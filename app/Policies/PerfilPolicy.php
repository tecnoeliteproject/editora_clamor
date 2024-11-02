<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PerfilCliente;

class PerfilPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, PerfilCliente $perfil)
{
    return $user->id === $perfil->user_id;
}
}
