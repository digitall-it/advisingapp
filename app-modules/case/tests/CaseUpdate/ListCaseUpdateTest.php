<?php

use App\Models\User;
use Illuminate\Support\Str;
use Assist\Case\Models\CaseItem;

use function Tests\asSuperAdmin;

use Assist\Case\Models\CaseUpdate;

use function Pest\Laravel\actingAs;
use function Pest\Livewire\livewire;

use Assist\Case\Filament\Resources\CaseUpdateResource;
use Assist\Case\Filament\Resources\CaseUpdateResource\Pages\ListCaseUpdates;

test('The correct details are displayed on the ListCaseUpdate page', function () {
    $caseUpdates = CaseUpdate::factory()
        ->for(CaseItem::factory(), 'case')
        ->count(10)
        ->create();

    asSuperAdmin();

    $component = livewire(ListCaseUpdates::class);

    $component->assertSuccessful()
        ->assertCanSeeTableRecords($caseUpdates)
        ->assertCountTableRecords(10);

    $caseUpdates->each(
        fn (CaseUpdate $caseUpdate) => $component
            ->assertTableColumnStateSet(
                'id',
                $caseUpdate->id,
                $caseUpdate
            )
            ->assertTableColumnStateSet(
                'case.respondent.full',
                $caseUpdate->case->respondent->full,
                $caseUpdate
            )
            ->assertTableColumnStateSet(
                'case.respondent.sisid',
                $caseUpdate->case->respondent->sisid,
                $caseUpdate
            )
            ->assertTableColumnStateSet(
                'case.respondent.otherid',
                $caseUpdate->case->respondent->otherid,
                $caseUpdate
            )
            ->assertTableColumnStateSet(
                'case.casenumber',
                $caseUpdate->case->casenumber,
                $caseUpdate
            )
            ->assertTableColumnStateSet(
                'internal',
                $caseUpdate->internal,
                $caseUpdate
            )
            ->assertTableColumnFormattedStateSet(
                'direction',
                Str::ucfirst($caseUpdate->direction->value),
                $caseUpdate
            )
    );
});

// TODO: Sorting and Searching tests

// Permission Tests

test('ListCaseUpdates is gated with proper access control', function () {
    $user = User::factory()->create();

    actingAs($user)
        ->get(
            CaseUpdateResource::getUrl('index')
        )->assertForbidden();

    $user->givePermissionTo('case_update.view-any');

    actingAs($user)
        ->get(
            CaseUpdateResource::getUrl('index')
        )->assertSuccessful();
});