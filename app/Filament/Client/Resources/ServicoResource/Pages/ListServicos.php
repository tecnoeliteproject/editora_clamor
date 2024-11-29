<?php

namespace App\Filament\Client\Resources\ServicoResource\Pages;

use App\Filament\Client\Resources\ServicoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicos extends ListRecords
{
    protected static string $resource = ServicoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
