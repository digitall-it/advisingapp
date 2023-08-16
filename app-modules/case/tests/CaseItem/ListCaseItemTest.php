<?php

use App\Models\User;
use Assist\Case\Models\CaseItem;

use function Tests\asSuperAdmin;
use function Pest\Laravel\actingAs;
use function Pest\Livewire\livewire;

use Assist\Case\Filament\Resources\CaseItemResource;
use Assist\Case\Filament\Resources\CaseItemResource\Pages\ListCaseItems;

test('The correct details are displayed on the ListCaseItem page', function () {
    $caseItems = CaseItem::factory()
        ->count(10)
        ->create();

    asSuperAdmin();

    $component = livewire(ListCaseItems::class);

    $component->assertSuccessful()
        ->assertCanSeeTableRecords($caseItems)
        ->assertCountTableRecords(10);

    $caseItems->each(
        fn (CaseItem $caseItem) => $component
            ->assertTableColumnStateSet(
                'id',
                $caseItem->id,
                $caseItem
            )
            ->assertTableColumnStateSet(
                'casenumber',
                $caseItem->casenumber,
                $caseItem
            )
            ->assertTableColumnStateSet(
                'respondent.full',
                $caseItem->respondent->full,
                $caseItem
            )
            ->assertTableColumnStateSet(
                'respondent.sisid',
                $caseItem->respondent->sisid,
                $caseItem
            )
            ->assertTableColumnStateSet(
                'respondent.otherid',
                $caseItem->respondent->otherid,
                $caseItem
            )
            ->assertTableColumnStateSet(
                'institution.name',
                $caseItem->institution->name,
                $caseItem
            )
            ->assertTableColumnStateSet(
                'assignedTo.name',
                $caseItem->assignedTo->name,
                $caseItem
            )
    );
});

// TODO: Sorting and Searching tests

// Permission Tests

test('ListCaseItem is gated with proper access control', function () {
    $user = User::factory()->create();

    actingAs($user)
        ->get(
            CaseItemResource::getUrl('index')
        )->assertForbidden();

    $user->givePermissionTo('case_item.view-any');

    actingAs($user)
        ->get(
            CaseItemResource::getUrl('index')
        )->assertSuccessful();
});