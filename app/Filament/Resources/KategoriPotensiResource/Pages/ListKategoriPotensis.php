<?php

namespace App\Filament\Resources\KategoriPotensiResource\Pages;

use App\Filament\Resources\KategoriPotensiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriPotensis extends ListRecords
{
    protected static string $resource = KategoriPotensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
