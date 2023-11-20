<?php

namespace Assist\Consent\Providers;

use Filament\Panel;
use Assist\Consent\ConsentPlugin;
use Illuminate\Support\ServiceProvider;
use Assist\Consent\Models\ConsentAgreement;
use Assist\Consent\Models\UserConsentAgreement;
use Assist\Authorization\AuthorizationRoleRegistry;
use Illuminate\Database\Eloquent\Relations\Relation;
use Assist\Consent\Observers\ConsentAgreementObserver;
use Assist\Authorization\AuthorizationPermissionRegistry;

class ConsentServiceProvider extends ServiceProvider
{
    public function register()
    {
        Panel::configureUsing(fn (Panel $panel) => $panel->plugin(new ConsentPlugin()));
    }

    public function boot()
    {
        Relation::morphMap([
            'consent_agreement' => ConsentAgreement::class,
            'user_consent_agreement' => UserConsentAgreement::class,
        ]);

        $this->registerRolesAndPermissions();

        $this->registerObservers();
    }

    public function registerObservers(): void
    {
        ConsentAgreement::observe(ConsentAgreementObserver::class);
    }

    protected function registerRolesAndPermissions()
    {
        $permissionRegistry = app(AuthorizationPermissionRegistry::class);

        $permissionRegistry->registerApiPermissions(
            module: 'consent',
            path: 'permissions/api/custom'
        );

        $permissionRegistry->registerWebPermissions(
            module: 'consent',
            path: 'permissions/web/custom'
        );

        $roleRegistry = app(AuthorizationRoleRegistry::class);

        $roleRegistry->registerApiRoles(
            module: 'consent',
            path: 'roles/api'
        );

        $roleRegistry->registerWebRoles(
            module: 'consent',
            path: 'roles/web'
        );
    }
}
