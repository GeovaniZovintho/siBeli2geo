<?php

namespace App\Filament\SiBeli\Resources\MasukResource\Pages;

use App\Filament\SiBeli\Resources\MasukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMasuks extends ListRecords
{
    protected static string $resource = MasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
