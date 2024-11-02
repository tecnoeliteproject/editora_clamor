<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PerfilCliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Campo da chave estrangeira
        'nome',
        'sobrenome',
        'nivel_academico',
    ];

    // Definindo a relação com o modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
