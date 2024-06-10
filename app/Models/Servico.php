<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'estado'
    ];

    public function observacaos(){
        return $this->belongsToMany(Observacao::class, 'servico_observacao')->withPivot(['preco']);
    }

}
