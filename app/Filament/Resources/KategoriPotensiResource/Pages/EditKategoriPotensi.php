<?php

namespace App\Filament\Resources\KategoriPotensiResource\Pages;

use App\Filament\Resources\KategoriPotensiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriPotensi extends EditRecord
{
    protected static string $resource = KategoriPotensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
