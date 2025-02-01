<?php

namespace App\Filament\Resources\ServiceRequestResource\Pages;

use App\Filament\Resources\ServiceRequestResource;
use App\Models\ServiceRequest;
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
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $record = ServiceRequest::find($data['id']);
        $preco = $record->preco->price;
        $quantidade_paginas = $record->quantidade_paginas;

        $tot =  'Kz ' . number_format($preco * $quantidade_paginas, 2, ',', '.');
        $data['total_a_pagar'] = $tot;

        $data['pacote'] = 'Kz ' . number_format($record->preco->price, 2, ',', '.') . '/pag';

        $data['status'] = $record->status;
        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return [
            'status' => $data['status'],
        ];
    }
}
