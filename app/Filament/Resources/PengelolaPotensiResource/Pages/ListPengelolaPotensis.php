<?php

namespace App\Filament\Resources\PengelolaPotensiResource\Pages;

use App\Filament\Resources\PengelolaPotensiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengelolaPotensis extends ListRecords
{
    protected static string $resource = PengelolaPotensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
