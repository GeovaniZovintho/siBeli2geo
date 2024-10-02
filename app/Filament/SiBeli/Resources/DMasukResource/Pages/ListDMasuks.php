<?php

namespace App\Filament\SiBeli\Resources\DMasukResource\Pages;

use App\Filament\SiBeli\Resources\DMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDMasuks extends ListRecords
{
    protected static string $resource = DMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
