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

    function pricingFormatted()
    {
        $primeiroValor = array_values($this->pricing)[0];
        $ultimoValor = array_values($this->pricing)[count($this->pricing) - 1];

        return 'De ' . number_format($primeiroValor, 2, ',', '.') . ' a ' . number_format($ultimoValor, 2, ',', '.');
    }
}
