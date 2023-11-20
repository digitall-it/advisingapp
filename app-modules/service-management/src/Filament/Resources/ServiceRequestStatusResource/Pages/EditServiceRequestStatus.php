<?php

namespace Assist\ServiceManagement\Filament\Resources\ServiceRequestStatusResource\Pages;

use Filament\Actions;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Assist\ServiceManagement\Enums\ColumnColorOptions;
use Assist\ServiceManagement\Enums\SystemServiceRequestClassification;
use Assist\ServiceManagement\Filament\Resources\ServiceRequestStatusResource;

class EditServiceRequestStatus extends EditRecord
{
    protected static string $resource = ServiceRequestStatusResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->string(),
                Select::make('classification')
                    ->label('classification')
                    ->searchable()
                    ->options(SystemServiceRequestClassification::class)
                    ->required()
                    ->enum(SystemServiceRequestClassification::class),
                Select::make('color')
                    ->label('Color')
                    ->searchable()
                    ->options(ColumnColorOptions::class)
                    ->required()
                    ->enum(ColumnColorOptions::class),
            ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
