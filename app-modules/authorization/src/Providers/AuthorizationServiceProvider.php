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

namespace AdvisingApp\Authorization\Providers;

use Filament\Panel;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use AdvisingApp\Authorization\Models\Role;
use AdvisingApp\Authorization\Models\License;
use AdvisingApp\Authorization\Models\RoleGroup;
use AdvisingApp\Authorization\Models\Permission;
use AdvisingApp\Authorization\AuthorizationPlugin;
use SocialiteProviders\Azure\AzureExtendSocialite;
use SocialiteProviders\Manager\SocialiteWasCalled;
use Illuminate\Database\Eloquent\Relations\Relation;
use SocialiteProviders\Google\GoogleExtendSocialite;
use AdvisingApp\Authorization\AuthorizationRoleRegistry;
use AdvisingApp\Authorization\Observers\LicenseObserver;
use AdvisingApp\Authorization\AuthorizationPermissionRegistry;

class AuthorizationServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Panel::configureUsing(fn (Panel $panel) => $panel->plugin(new AuthorizationPlugin()));

        $this->app->singleton(AuthorizationPermissionRegistry::class, function ($app) {
            return new AuthorizationPermissionRegistry();
        });

        $this->app->singleton(AuthorizationRoleRegistry::class, function ($app) {
            return new AuthorizationRoleRegistry();
        });

        app('config')->set('permission', require base_path('app-modules/authorization/config/permission.php'));
    }

    public function boot(AuthorizationPermissionRegistry $permissionRegistry, AuthorizationRoleRegistry $roleRegistry): void
    {
        Relation::morphMap([
            'role' => Role::class,
            'permission' => Permission::class,
            'role_group' => RoleGroup::class,
            'license' => License::class,
        ]);

        $this->registerObservers();

        $permissionRegistry->registerApiPermissions(
            module: 'authorization',
            path: 'permissions/api/custom'
        );

        $permissionRegistry->registerWebPermissions(
            module: 'authorization',
            path: 'permissions/web/custom'
        );

        $roleRegistry->registerApiRoles(
            module: 'authorization',
            path: 'roles/api'
        );

        $roleRegistry->registerWebRoles(
            module: 'authorization',
            path: 'roles/web'
        );

        Event::listen(
            events: SocialiteWasCalled::class,
            listener: AzureExtendSocialite::class . '@handle'
        );

        Event::listen(
            events: SocialiteWasCalled::class,
            listener: GoogleExtendSocialite::class . '@handle'
        );
    }

    public function registerObservers(): void
    {
        License::observe(LicenseObserver::class);
    }
}
