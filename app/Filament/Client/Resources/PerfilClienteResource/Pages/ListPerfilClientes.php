<?php

namespace App\Filament\Client\Resources\PerfilClienteResource\Resources;

use App\Filament\Client\Resources\PerfilClienteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerfilClientes extends ListRecords
{
    protected static string $resource = PerfilClienteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
