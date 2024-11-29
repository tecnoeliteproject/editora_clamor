<?php

namespace App\Filament\Client\Resources\ServiceRequestResource\Pages;

use App\Filament\Client\Resources\ServiceRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceRequest extends EditRecord
{
    protected static string $resource = ServiceRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
