<?php

namespace App\Filament\Resources\PengelolaPotensiResource\Pages;

use App\Filament\Resources\PengelolaPotensiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengelolaPotensi extends EditRecord
{
    protected static string $resource = PengelolaPotensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
