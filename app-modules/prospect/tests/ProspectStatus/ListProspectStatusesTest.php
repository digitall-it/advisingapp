<?php

/*
<COPYRIGHT>

Copyright © 2022-2023, Canyon GBS LLC

All rights reserved.

This file is part of a project developed using Laravel, which is an open-source framework for PHP.
Canyon GBS LLC acknowledges and respects the copyright of Laravel and other open-source
projects used in the development of this solution.

This project is licensed under the Affero General Public License (AGPL) 3.0.
For more details, see https://github.com/canyongbs/assistbycanyongbs/blob/main/LICENSE.

Notice:
- The copyright notice in this file and across all files and applications in this
 repository cannot be removed or altered without violating the terms of the AGPL 3.0 License.
- The software solution, including services, infrastructure, and code, is offered as a
 Software as a Service (SaaS) by Canyon GBS LLC.
- Use of this software implies agreement to the license terms and conditions as stated
 in the AGPL 3.0 License.

For more information or inquiries please visit our website at
https://www.canyongbs.com or contact us via email at legal@canyongbs.com.

</COPYRIGHT>
*/

use App\Models\User;

use function Tests\asSuperAdmin;
use function Pest\Laravel\actingAs;
use function Pest\Livewire\livewire;

use Assist\Prospect\Models\ProspectStatus;
use Assist\Prospect\Filament\Resources\ProspectStatusResource;
use Assist\Prospect\Filament\Resources\ProspectStatusResource\Pages\ListProspectStatuses;

test('The correct details are displayed on the ListProspectStatuses page', function () {
    $prospectStatuses = ProspectStatus::factory()
        // TODO: Fix this once Prospect factory is created
        //->has(ServiceRequest::factory()->count(fake()->randomNumber(1)), 'serviceRequests')
        ->count(10)
        ->create();

    asSuperAdmin();

    $component = livewire(ListProspectStatuses::class);

    $component
        ->assertSuccessful()
        ->assertCanSeeTableRecords($prospectStatuses)
        ->assertCountTableRecords(10)
        ->assertTableColumnExists('prospects_count');

    $prospectStatuses->each(
        fn (ProspectStatus $prospectStatus) => $component
            ->assertTableColumnStateSet(
                'id',
                $prospectStatus->id,
                $prospectStatus
            )
            ->assertTableColumnStateSet(
                'name',
                $prospectStatus->name,
                $prospectStatus
            )
            ->assertTableColumnFormattedStateSet(
                'classification',
                $prospectStatus->classification->getLabel(),
                $prospectStatus
            )
            ->assertTableColumnFormattedStateSet(
                'color',
                $prospectStatus->color->getLabel(),
                $prospectStatus
            )
        // Currently setting not test for service_requests_count as there is no easy way to check now, relying on underlying package tests
    );
});

// TODO: Sorting and Searching tests

// Permission Tests

test('ListProspectStatuses is gated with proper access control', function () {
    $user = User::factory()->create();

    actingAs($user)
        ->get(
            ProspectStatusResource::getUrl('index')
        )->assertForbidden();

    $user->givePermissionTo('prospect_status.view-any');

    actingAs($user)
        ->get(
            ProspectStatusResource::getUrl('index')
        )->assertSuccessful();
});
