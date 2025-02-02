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

namespace AdvisingApp\IntegrationAI\Providers;

use Filament\Panel;
use Illuminate\Support\ServiceProvider;
use AdvisingApp\IntegrationAI\Client\AzureOpenAI;
use AdvisingApp\IntegrationAI\IntegrationAIPlugin;
use AdvisingApp\Authorization\AuthorizationRoleRegistry;
use AdvisingApp\IntegrationAI\Client\Contracts\AIChatClient;
use AdvisingApp\Authorization\AuthorizationPermissionRegistry;
use AdvisingApp\IntegrationAI\Client\Playground\AzureOpenAI as PlaygroundAzureOpenAI;

class IntegrationAIServiceProvider extends ServiceProvider
{
    public function register()
    {
        Panel::configureUsing(fn (Panel $panel) => $panel->plugin(new IntegrationAIPlugin()));

        $this->app->singleton(AIChatClient::class, function () {
            if ($this->app->runningUnitTests() || config('services.azure_open_ai.enable_test_mode') === true) {
                return new PlaygroundAzureOpenAI();
            }

            return new AzureOpenAI();
        });
    }

    public function boot()
    {
        $this->registerRolesAndPermissions();
    }

    protected function registerRolesAndPermissions()
    {
        $permissionRegistry = app(AuthorizationPermissionRegistry::class);

        $permissionRegistry->registerApiPermissions(
            module: 'integration-ai',
            path: 'permissions/api/custom'
        );

        $permissionRegistry->registerWebPermissions(
            module: 'integration-ai',
            path: 'permissions/web/custom'
        );

        $roleRegistry = app(AuthorizationRoleRegistry::class);

        $roleRegistry->registerApiRoles(
            module: 'integration-ai',
            path: 'roles/api'
        );

        $roleRegistry->registerWebRoles(
            module: 'integration-ai',
            path: 'roles/web'
        );
    }
}
