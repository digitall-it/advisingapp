<?php

namespace Assist\Prospect\Filament\Resources;

use Filament\Resources\Resource;
use Assist\Prospect\Models\ProspectSource;
use Assist\Prospect\Filament\Resources\ProspectSourceResource\Pages;

class ProspectSourceResource extends Resource
{
    protected static ?string $model = ProspectSource::class;

    protected static ?string $navigationGroup = 'Field Settings';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationIcon = 'heroicon-o-viewfinder-circle';

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProspectSources::route('/'),
            'create' => Pages\CreateProspectSource::route('/create'),
            'view' => Pages\ViewProspectSource::route('/{record}'),
            'edit' => Pages\EditProspectSource::route('/{record}/edit'),
        ];
    }
}