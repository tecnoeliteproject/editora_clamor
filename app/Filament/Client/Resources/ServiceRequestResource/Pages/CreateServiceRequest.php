<?php

namespace App\Filament\Client\Resources\ServiceRequestResource\Pages;

use App\Filament\Client\Resources\ServiceRequestResource;
use App\Models\Price;
use App\Models\ServiceRequest;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateServiceRequest extends CreateRecord
{
    protected static string $resource = ServiceRequestResource::class;

    //before create
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->user()->id;

        $price = Price::where('quantidade_paginas', '>=', $data['num_paginas'])->first();

        if ($price) {
            $price_id = Price::where('quantidade_paginas', '>=', $data['num_paginas'])->first()->id;
        } else {
            $price_id = Price::orderBy('quantidade_paginas', 'desc')->first()->id;
        }

        $data['price_id'] = $price_id;

        $data['user_id'] = auth()->user()->id;
        $data['service_id'] = $data['servico'];
        $data['price_id'] = $data['price_id'];
        $data['status'] = 'pendente';
        $data['documento_url'] = $data['documento'];
        $data['quantidade_paginas'] = $data['num_paginas'];
        $data['observacoes'] = $data['observacoes'];

        return $data;
    }

    protected function handleRecordCreation(array $data): Model
    {
        return ServiceRequest::create([
            'user_id' => $data['user_id'],
            'service_id' => $data['service_id'],
            'price_id' => $data['price_id'],
            'status' => $data['status'],
            'documento_url' => $data['documento_url'],
            'quantidade_paginas' => $data['quantidade_paginas'],
            'observacoes' => $data['observacoes'],
        ]);
    }
}
