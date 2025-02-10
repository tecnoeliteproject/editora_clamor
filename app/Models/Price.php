<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'servico_id',
        'quantidade_paginas',
        'price',
    ];
    public function servico()
    {
        return $this->belongsTo(Servico::class);
    }
}
