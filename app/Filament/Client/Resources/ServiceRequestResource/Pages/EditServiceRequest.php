<?php

namespace App\Filament\Client\Resources\ServiceRequestResource\Pages;

use App\Filament\Client\Resources\ServiceRequestResource;
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

        $data['servico_id'] = $record->servico_id;
        $data['contrato_url'] = $record->contrato_url;
        $data['comprovativo_pagamento_url'] = $record->comprovativo_pagamento_url;
        $data['documento_final_url'] = $record->documento_final_url;
        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return [
           
            'contrato_url' => $data['contrato_url'], 
            'comprovativo_pagamento_url' => $data['comprovativo_pagamento_url'], 
            'documento_final_url' => $data['documento_final_url'], 
        ];
    }
}
