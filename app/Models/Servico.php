<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'nome', 'description', 'pricing',];

    protected $casts = [
        'pricing' => 'array', // Converte o JSON automaticamente para array
    ];

    function prices()
    {
        return $this->hasMany(Price::class);
    }


    function numeroPaginas()
    {
        return $this->prices;
    }

    function precosPorPagina()
    {
        return $this->prices;
    }
}
