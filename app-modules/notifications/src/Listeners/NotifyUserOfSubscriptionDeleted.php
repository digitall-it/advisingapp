<?php

namespace Assist\Notifications\Listeners;

use Filament\Facades\Filament;
use Illuminate\Support\HtmlString;
use Filament\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Assist\Notifications\Events\SubscriptionDeleted;

class NotifyUserOfSubscriptionDeleted implements ShouldQueue
{
    public function handle(SubscriptionDeleted $event): void
    {
        $subscribable = $event->subscription->subscribable;

        $name = $subscribable->{$subscribable->displayNameKey()};

        $target = resolve(Filament::getModelResource($subscribable));

        $url = $target::getUrl('view', ['record' => $subscribable]);

        $link = new HtmlString("<a href='{$url}' target='_blank' class='underline'>{$name}</a>");

        $morph = str($subscribable->getMorphClass());

        Notification::make()
            ->warning()
            ->title("You have been unsubscribed from {$morph} {$link}")
            ->sendToDatabase($event->subscription->user);
    }
}
