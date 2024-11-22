<?php

namespace App\Filament\Client\Resources\ServiceRequestResource\Pages;

use App\Filament\Client\Resources\ServiceRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewServiceRequest extends ViewRecord
{
    protected static string $resource = ServiceRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
