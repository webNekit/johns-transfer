<?php

namespace App\Filament\Resources\CarClassResource\Pages;

use App\Filament\Resources\CarClassResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarClass extends EditRecord
{
    protected static string $resource = CarClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
