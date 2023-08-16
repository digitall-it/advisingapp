<?php

namespace Assist\Prospect\Filament\Resources\ProspectResource\Pages;

use Filament\Actions;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\TextEntry;
use Assist\Prospect\Filament\Resources\ProspectResource;

class ViewProspect extends ViewRecord
{
    protected static string $resource = ProspectResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return parent::infolist($infolist)
            ->schema([
                TextEntry::make('id')
                    ->label('ID')
                    ->translateLabel(),
                TextEntry::make('status.name')
                    ->label('Status')
                    ->translateLabel(),
                TextEntry::make('source.name')
                    ->label('Source')
                    ->translateLabel(),
                TextEntry::make('first_name')
                    ->label('First Name')
                    ->translateLabel(),
                TextEntry::make('last_name')
                    ->label('Last Name')
                    ->translateLabel(),
                TextEntry::make('full')
                    ->label('Full Name')
                    ->translateLabel(),
                TextEntry::make('preferred')
                    ->label('Preferred Name')
                    ->translateLabel(),
                TextEntry::make('description')
                    ->label('Description')
                    ->translateLabel(),
                TextEntry::make('email')
                    ->label('Email')
                    ->translateLabel(),
                TextEntry::make('email_2')
                    ->label('Email 2')
                    ->translateLabel(),
                TextEntry::make('mobile')
                    ->label('Mobile')
                    ->translateLabel(),
                TextEntry::make('sms_opt_out')
                    ->label('SMS Opt Out')
                    ->translateLabel()
                    ->formatStateUsing(fn (bool $state): string => $state ? 'Yes' : 'No'),
                TextEntry::make('email_bounce')
                    ->label('Email Bounce')
                    ->translateLabel()
                    ->formatStateUsing(fn (bool $state): string => $state ? 'Yes' : 'No'),
                TextEntry::make('phone')
                    ->label('Phone')
                    ->translateLabel(),
                TextEntry::make('address')
                    ->label('Address')
                    ->translateLabel(),
                TextEntry::make('address_2')
                    ->label('Address 2')
                    ->translateLabel(),
                TextEntry::make('birthdate')
                    ->label('Birthdate')
                    ->translateLabel(),
                TextEntry::make('hsgrad')
                    ->label('High School Grad')
                    ->translateLabel(),
                TextEntry::make('assignedTo.name')
                    ->label('Assigned To')
                    ->translateLabel(),
                TextEntry::make('createdBy.name')
                    ->label('Created By')
                    ->translateLabel(),
            ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}