<?php

namespace App\Filament\SiBeli\Resources\DMasukResource\Pages;

use App\Filament\SiBeli\Resources\DMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDMasuk extends EditRecord
{
    protected static string $resource = DMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
