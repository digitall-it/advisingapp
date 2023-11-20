<?php

namespace App\Filament\Pages;

use App\Models\User;
use Spatie\Health\Enums\Status;
use Illuminate\Contracts\Support\Htmlable;
use Spatie\Health\ResultStores\ResultStore;
use ShuvroRoy\FilamentSpatieLaravelHealth\Pages\HealthCheckResults;

class ProductHealth extends HealthCheckResults
{
    public static function getNavigationLabel(): string
    {
        return 'Product Administration';
    }

    public function getHeading(): string | Htmlable
    {
        return 'Product Health Dashboard';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Product Administration';
    }

    public static function getNavigationSort(): ?int
    {
        return 8;
    }

    public static function getNavigationBadge(): ?string
    {
        $count = app(ResultStore::class)
            ->latestResults()
            ?->storedCheckResults
            ->filter(fn ($check) => $check->status !== Status::ok()->value)
            ->count();

        return $count > 0 ? $count : null;
    }

    public static function getNavigationBadgeColor(): string | array | null
    {
        return 'danger';
    }

    public static function shouldRegisterNavigation(): bool
    {
        /** @var User $user */
        $user = auth()->user();

        return $user->can('authorization.view_product_health_dashboard');
    }

    public function mount(): void
    {
        $this->authorize('authorization.view_product_health_dashboard');
    }
}
