<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'observacao'
    ]; 

    public function servicos(){
        return $this->belongsToMany(Servico::class, 'servico_observacao')->withPivot(['preco']);
    }
}
