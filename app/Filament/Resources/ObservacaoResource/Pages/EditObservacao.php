<?php

namespace App\Filament\Resources\ObservacaoResource\Pages;

use App\Filament\Resources\ObservacaoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditObservacao extends EditRecord
{
    protected static string $resource = ObservacaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
