<?php

/*
<COPYRIGHT>

    Copyright © 2022-2023, Canyon GBS LLC. All rights reserved.

    Advising App™ is licensed under the Elastic License 2.0. For more details,
    see https://github.com/canyongbs/advisingapp/blob/main/LICENSE.

    Notice:

    - You may not provide the software to third parties as a hosted or managed
      service, where the service provides users with access to any substantial set of
      the features or functionality of the software.
    - You may not move, change, disable, or circumvent the license key functionality
      in the software, and you may not remove or obscure any functionality in the
      software that is protected by the license key.
    - You may not alter, remove, or obscure any licensing, copyright, or other notices
      of the licensor in the software. Any use of the licensor’s trademarks is subject
      to applicable law.
    - Canyon GBS LLC respects the intellectual property rights of others and expects the
      same in return. Canyon GBS™ and Advising App™ are registered trademarks of
      Canyon GBS LLC, and we are committed to enforcing and protecting our trademarks
      vigorously.
    - The software solution, including services, infrastructure, and code, is offered as a
      Software as a Service (SaaS) by Canyon GBS LLC.
    - Use of this software implies agreement to the license terms and conditions as stated
      in the Elastic License 2.0.

    For more information or inquiries please visit our website at
    https://www.canyongbs.com or contact us via email at legal@canyongbs.com.

</COPYRIGHT>
*/

use App\Models\User;
use Illuminate\Support\Facades\Event;
use Assist\Application\Models\ApplicationSubmission;
use Assist\Application\Events\ApplicationSubmissionCreated;
use Assist\Application\Listeners\NotifySubscribersOfApplicationSubmission;
use Assist\Application\Notifications\AuthorLinkedApplicationSubmissionCreatedNotification;

it('dispatches ApplicationSubmissionCreated Event when a ApplicationSubmission is created', function () {
    Event::fake(ApplicationSubmissionCreated::class);

    $submission = ApplicationSubmission::factory()->create();

    Event::assertDispatched(
        event: ApplicationSubmissionCreated::class,
        callback: fn (ApplicationSubmissionCreated $event) => $event->submission->is($submission)
    );
});

test('ApplicationSubmissionCreated Event has the proper listeners', function () {
    Event::fake();

    Event::assertListening(
        expectedEvent: ApplicationSubmissionCreated::class,
        expectedListener: NotifySubscribersOfApplicationSubmission::class
    );
});

test('NotifySubscribersOfApplicationSubmission dispatches the correct Notification', function () {
    Notification::fake();

    /** @var ApplicationSubmission $submission */
    $submission = ApplicationSubmission::factory()->make();

    $user = User::factory()->create();

    $user->subscriptions()->create([
        'subscribable_id' => $submission->author->getKey(),
        'subscribable_type' => $submission->author->getMorphClass(),
    ]);

    $submission->save();

    $submission->author->subscriptions->map(fn ($subscription) => $subscription->user)->each(function (User $user) {
        Notification::assertSentTo(notifiable: $user, notification: AuthorLinkedApplicationSubmissionCreatedNotification::class);
    });
});