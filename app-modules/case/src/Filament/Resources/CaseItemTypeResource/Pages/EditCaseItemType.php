<?php

namespace Assist\Case\Filament\Resources\CaseItemTypeResource\Pages;

use Filament\Actions;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Assist\Case\Filament\Resources\CaseItemTypeResource;

class EditCaseItemType extends EditRecord
{
    protected static string $resource = CaseItemTypeResource::class;

    public function form(Form $form): Form
    {
        return parent::form($form)
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->string(),
            ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}