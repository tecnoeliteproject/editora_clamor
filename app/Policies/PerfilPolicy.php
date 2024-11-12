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

    public static function canViewAny(User $user): bool
{
    return $user->hasRole('client');
}

public static function canEdit(User $user): bool
{
    return $user->hasRole('client');
}

/*
    public function update(User $user, PerfilCliente $perfil)
{
    return $user->id === $perfil->user_id;
}
*/
public function update(User $user, PerfilCliente $perfil)
{
    return $perfil->user_id === $user->id || $user->hasRole('client');
}

}
