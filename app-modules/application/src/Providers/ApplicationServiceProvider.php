<?php

/*
<COPYRIGHT>

    Copyright © 2016-2024, Canyon GBS LLC. All rights reserved.

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

namespace AdvisingApp\Application\Providers;

use Filament\Panel;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use AdvisingApp\Application\ApplicationPlugin;
use AdvisingApp\Application\Models\Application;
use AdvisingApp\Application\Models\ApplicationStep;
use AdvisingApp\Application\Models\ApplicationField;
use Illuminate\Database\Eloquent\Relations\Relation;
use AdvisingApp\Authorization\AuthorizationRoleRegistry;
use AdvisingApp\Application\Models\ApplicationSubmission;
use AdvisingApp\Application\Models\ApplicationAuthentication;
use AdvisingApp\Application\Models\ApplicationSubmissionState;
use AdvisingApp\Authorization\AuthorizationPermissionRegistry;
use AdvisingApp\Application\Events\ApplicationSubmissionCreated;
use AdvisingApp\Application\Observers\ApplicationSubmissionObserver;
use AdvisingApp\Application\Listeners\NotifySubscribersOfApplicationSubmission;

class ApplicationServiceProvider extends ServiceProvider
{
    public function register()
    {
        Panel::configureUsing(fn (Panel $panel) => $panel->plugin(new ApplicationPlugin()));
    }

    public function boot()
    {
        Relation::morphMap([
            'application' => Application::class,
            'application_field' => ApplicationField::class,
            'application_submission' => ApplicationSubmission::class,
            'application_step' => ApplicationStep::class,
            'application_authentication' => ApplicationAuthentication::class,
            'application_submission_state' => ApplicationSubmissionState::class,
        ]);

        $this->registerRolesAndPermissions();
        $this->registerObservers();
        $this->registerEvents();
    }

    public function registerObservers(): void
    {
        ApplicationSubmission::observe(ApplicationSubmissionObserver::class);
    }

    public function registerEvents(): void
    {
        Event::listen(
            events: ApplicationSubmissionCreated::class,
            listener: NotifySubscribersOfApplicationSubmission::class
        );
    }

    protected function registerRolesAndPermissions()
    {
        $permissionRegistry = app(AuthorizationPermissionRegistry::class);

        $permissionRegistry->registerApiPermissions(
            module: 'application',
            path: 'permissions/api/custom'
        );

        $permissionRegistry->registerWebPermissions(
            module: 'application',
            path: 'permissions/web/custom'
        );

        $roleRegistry = app(AuthorizationRoleRegistry::class);

        $roleRegistry->registerApiRoles(
            module: 'application',
            path: 'roles/api'
        );

        $roleRegistry->registerWebRoles(
            module: 'application',
            path: 'roles/web'
        );
    }
}
