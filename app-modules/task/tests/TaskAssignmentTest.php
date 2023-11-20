<?php

use App\Models\User;
use Assist\Task\Models\Task;
use Assist\Authorization\Models\Permission;
use Illuminate\Support\Facades\Notification;
use Assist\Task\Notifications\TaskAssignedToUserNotification;

beforeEach(function () {
    Notification::fake();
});

it('creates the proper permissions record when a Task is created', function () {
    $task = Task::factory()->create();

    expect(Permission::where('name', "task.{$task->id}.update")->exists())->toBeTrue();
});

it('gives the proper permission to the creator of a Task', function () {
    /** @var Task $task */
    $task = Task::factory()->create();

    expect($task->createdBy->can("task.{$task->id}.update"))->toBeTrue();
});

it('gives the proper permission to the assigned User of a Task on create and update', function () {
    /** @var Task $task */
    $task = Task::factory()->assigned()->create();

    expect($task->createdBy->can("task.{$task->id}.update"))->toBeTrue()
        ->and($task->assignedTo->can("task.{$task->id}.update"))->toBeTrue();

    $originalAssignedUser = $task->assignedTo;

    $newAssignedUser = User::factory()->create();

    $task->assignedTo()->associate($newAssignedUser)->save();

    $task->refresh();
    $originalAssignedUser->refresh();
    $newAssignedUser->refresh();

    expect($task->createdBy->can("task.{$task->id}.update"))->toBeTrue()
        ->and($newAssignedUser->can("task.{$task->id}.update"))->toBeTrue()
        ->and($originalAssignedUser->can("task.{$task->id}.update"))->toBeFalse();
});

it('sends the proper notification to the assigned User', function () {
    $task = Task::factory()->assigned()->create();

    Notification::assertSentTo($task->assignedTo, TaskAssignedToUserNotification::class);

    // Reset the fake notification store
    Notification::fake();

    $originalAssignedUser = $task->assignedTo;

    $newAssignedUser = User::factory()->create();

    $task->assignedTo()->associate($newAssignedUser)->save();

    Notification::assertSentTo($newAssignedUser, TaskAssignedToUserNotification::class);
    Notification::assertNotSentTo($originalAssignedUser, TaskAssignedToUserNotification::class);
});

it('it properly subscriptions the creator and assigned Users to the Subscribable', function () {
    $task = Task::factory()
        ->recycle(User::factory()->create())
        ->assigned()
        ->concerningStudent()
        ->create();

    expect($task->createdBy->id)->toBe($task->assignedTo->id);

    $subscriptions = $task->createdBy->subscriptions;

    expect($subscriptions->count())->toBe(1)
        ->and($subscriptions->first()->subscribable->id)->toBe($task->concern->id);

    $task = Task::factory()
        ->assigned()
        ->concerningProspect()
        ->create();

    expect($task->createdBy->id)->not->toBe($task->assignedTo->id);

    $creatorSubscriptions = $task->createdBy->subscriptions;

    expect($creatorSubscriptions->count())->toBe(1)
        ->and($creatorSubscriptions->first()->subscribable->id)->toBe($task->concern->id);

    $assignedToSubscriptions = $task->assignedTo->subscriptions;

    expect($assignedToSubscriptions->count())->toBe(1)
        ->and($assignedToSubscriptions->first()->subscribable->id)->toBe($task->concern->id);

    $newAssignedUser = User::factory()->create();

    $task->assignedTo()->associate($newAssignedUser)->save();

    $task->refresh();

    expect($task->createdBy->id)->not->toBe($task->assignedTo->id)
        ->and($task->assignedTo->id)->toBe($newAssignedUser->id);

    $creatorSubscriptions = $task->createdBy->subscriptions;

    expect($creatorSubscriptions->count())->toBe(1)
        ->and($creatorSubscriptions->first()->subscribable->id)->toBe($task->concern->id);

    $assignedToSubscriptions = $task->assignedTo->subscriptions;

    expect($assignedToSubscriptions->count())->toBe(1)
        ->and($assignedToSubscriptions->first()->subscribable->id)->toBe($task->concern->id);
});
