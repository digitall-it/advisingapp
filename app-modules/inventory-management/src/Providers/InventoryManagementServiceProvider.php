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

namespace AdvisingApp\InventoryManagement\Providers;

use Filament\Panel;
use Illuminate\Support\ServiceProvider;
use AdvisingApp\InventoryManagement\Models\Asset;
use Illuminate\Database\Eloquent\Relations\Relation;
use AdvisingApp\InventoryManagement\Models\AssetType;
use AdvisingApp\InventoryManagement\Models\AssetStatus;
use AdvisingApp\Authorization\AuthorizationRoleRegistry;
use AdvisingApp\InventoryManagement\Models\AssetCheckIn;
use AdvisingApp\InventoryManagement\Models\AssetCheckOut;
use AdvisingApp\InventoryManagement\Models\AssetLocation;
use AdvisingApp\Authorization\AuthorizationPermissionRegistry;
use AdvisingApp\InventoryManagement\InventoryManagementPlugin;
use AdvisingApp\InventoryManagement\Models\MaintenanceActivity;
use AdvisingApp\InventoryManagement\Models\MaintenanceProvider;
use AdvisingApp\InventoryManagement\Observers\AssetCheckInObserver;
use AdvisingApp\InventoryManagement\Observers\AssetCheckOutObserver;
use AdvisingApp\InventoryManagement\Observers\MaintenanceActivityObserver;

class InventoryManagementServiceProvider extends ServiceProvider
{
    public function register()
    {
        Panel::configureUsing(fn (Panel $panel) => $panel->plugin(new InventoryManagementPlugin()));
    }

    public function boot()
    {
        Relation::morphMap([
            'asset_check_in' => AssetCheckIn::class,
            'asset_check_out' => AssetCheckOut::class,
            'asset_location' => AssetLocation::class,
            'asset_status' => AssetStatus::class,
            'asset_type' => AssetType::class,
            'asset' => Asset::class,
            'maintenance_activity' => MaintenanceActivity::class,
            'maintenance_provider' => MaintenanceProvider::class,
        ]);

        $this->registerObservers();

        $this->registerRolesAndPermissions();
    }

    public function registerObservers(): void
    {
        AssetCheckIn::observe(AssetCheckInObserver::class);
        AssetCheckOut::observe(AssetCheckOutObserver::class);
        MaintenanceActivity::observe(MaintenanceActivityObserver::class);
    }

    protected function registerRolesAndPermissions()
    {
        $permissionRegistry = app(AuthorizationPermissionRegistry::class);

        $permissionRegistry->registerApiPermissions(
            module: 'inventory-management',
            path: 'permissions/api/custom'
        );

        $permissionRegistry->registerWebPermissions(
            module: 'inventory-management',
            path: 'permissions/web/custom'
        );

        $roleRegistry = app(AuthorizationRoleRegistry::class);

        $roleRegistry->registerApiRoles(
            module: 'inventory-management',
            path: 'roles/api'
        );

        $roleRegistry->registerWebRoles(
            module: 'inventory-management',
            path: 'roles/web'
        );
    }
}
