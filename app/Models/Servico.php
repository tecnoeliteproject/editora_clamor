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

    function pricingFormatted()
    {
        $primeiroValor = $this->prices[0]->price;
        $ultimoValor = $this->prices[count($this->prices) - 1]->price;

        return 'De ' . number_format($primeiroValor, 2, ',', '.') . ' a ' . number_format($ultimoValor, 2, ',', '.');
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
