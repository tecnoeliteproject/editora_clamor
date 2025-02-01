<?php

namespace App\Filament\Client\Resources\PerfilClientResource\Pages;

use App\Filament\Client\Resources\PerfilClientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerfilClient extends EditRecord
{
    protected static string $resource = PerfilClientResource::class;
   

    protected function getHeaderActions(): array
    {
        return [
           // Actions\ViewAction::make(),
        ];
    }
}
