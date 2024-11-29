<?php

namespace App\Filament\Client\Resources\TabelaPrecoResource\Pages;

use App\Filament\Client\Resources\TabelaPrecoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTabelaPrecos extends ManageRecords
{
    protected static string $resource = TabelaPrecoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
