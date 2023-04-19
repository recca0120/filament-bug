<?php

namespace App\Filament\Resources\TestDetailResource\Pages;

use App\Filament\Resources\TestDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestDetails extends ListRecords
{
    protected static string $resource = TestDetailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
