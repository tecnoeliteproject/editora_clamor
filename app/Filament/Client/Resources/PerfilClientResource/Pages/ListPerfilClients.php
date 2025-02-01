<?php

namespace App\Filament\Client\Resources\PerfilClientResource\Pages;

use App\Filament\Client\Resources\PerfilClientResource;
use App\Models\PerfilCliente;
use Filament\Resources\Pages\ListRecords;

class ListPerfilClients extends ListRecords
{
    protected static string $resource = PerfilClientResource::class;
    protected static ?string $title = 'Meu Perfil';

    
}