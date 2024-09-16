<?php

namespace App\Filament\Resources\CarClassResource\Pages;

use App\Filament\Resources\CarClassResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarClasses extends ListRecords
{
    protected static string $resource = CarClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
