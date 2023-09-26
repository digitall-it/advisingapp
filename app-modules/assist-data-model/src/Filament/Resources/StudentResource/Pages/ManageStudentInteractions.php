<?php

namespace Assist\AssistDataModel\Filament\Resources\StudentResource\Pages;

use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Component;
use Assist\AssistDataModel\Models\Student;
use Filament\Forms\Components\MorphToSelect;
use Filament\Resources\Pages\ManageRelatedRecords;
use Assist\AssistDataModel\Filament\Resources\StudentResource;
use Assist\Interaction\Filament\Resources\InteractionResource\Pages\CreateInteraction;
use Assist\Interaction\Filament\Resources\InteractionResource\RelationManagers\HasManyMorphedInteractionsRelationManager;

class ManageStudentInteractions extends ManageRelatedRecords
{
    protected static string $resource = StudentResource::class;

    protected static string $relationship = 'interactions';

    // TODO: Automatically set from Filament based on relationship name
    protected static ?string $breadcrumb = 'Interactions';

    // TODO: Automatically set from Filament based on relationship name
    protected static ?string $navigationLabel = 'Interactions';

    protected static ?string $navigationIcon = 'heroicon-o-arrow-path-rounded-square';

    public function form(Form $form): Form
    {
        $createInteractionForm = (resolve(CreateInteraction::class))->form($form);

        $formComponents = collect($createInteractionForm->getComponents())->filter(function (Component $component) {
            if (! $component instanceof MorphToSelect) {
                return true;
            }
        })->toArray();

        return parent::form($createInteractionForm)
            ->schema([
                Hidden::make('interactable_id')
                    ->default($this->getOwnerRecord()->identifier()),
                Hidden::make('interactable_type')
                    ->default(resolve(Student::class)->getMorphClass()),
                ...$formComponents,
            ]);
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return (resolve(HasManyMorphedInteractionsRelationManager::class))->infolist($infolist);
    }

    public function table(Table $table): Table
    {
        return (resolve(HasManyMorphedInteractionsRelationManager::class))->table($table);
    }
}