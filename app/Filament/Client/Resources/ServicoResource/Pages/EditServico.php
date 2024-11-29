<?php

namespace App\Filament\Client\Resources\ServicoResource\Pages;

use App\Filament\Client\Resources\ServicoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServico extends EditRecord
{
    protected static string $resource = ServicoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
