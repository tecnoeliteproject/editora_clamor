<?php

namespace App\Filament\Resources\ObservacaoResource\Pages;

use App\Filament\Resources\ObservacaoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListObservacaos extends ListRecords
{
    protected static string $resource = ObservacaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
