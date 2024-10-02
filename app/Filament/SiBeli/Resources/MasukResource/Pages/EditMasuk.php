<?php

namespace App\Filament\SiBeli\Resources\MasukResource\Pages;

use App\Filament\SiBeli\Resources\MasukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMasuk extends EditRecord
{
    protected static string $resource = MasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
