<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceRequest extends Model
{
    use HasFactory;
    use SoftDeletes;

    // recupera o servico
    public function servico()
    {
        return $this->belongsTo(Servico::class, 'service_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function preco()
    {
        return $this->belongsTo(Price::class, 'price_id');
    }

    // public function preco_total()
    // {
    //     return $this->quantidade_paginas * $this->preco->price;
    // }
}
