<?php

namespace Assist\ServiceManagement\Filament\Resources\ServiceRequestPriorityResource\Pages;

use Filament\Actions;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Assist\ServiceManagement\Filament\Resources\ServiceRequestPriorityResource;

class EditServiceRequestPriority extends EditRecord
{
    protected static string $resource = ServiceRequestPriorityResource::class;

    public function form(Form $form): Form
    {
        return parent::form($form)
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->string(),
                TextInput::make('order')
                    ->label('Priority Order')
                    ->required()
                    ->integer()
                    ->numeric()
                    ->disabled(),
            ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}