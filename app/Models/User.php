<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    const ROLE_ADMIN = 'ADMIN';
    const ROLE_EDITOR = 'EDITOR';
    const ROLE_CLIENT = 'CLIENT';

    const ROLES = [
        self::ROLE_ADMIN => 'Admin',
        self::ROLE_EDITOR => 'Editor',
        self::ROLE_CLIENT => 'Client',
    ];


    public function perfilCliente()
    {
        return $this->hasOne(PerfilCliente::class);
    }

    public function isAdmin()
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function isEditor()
    {
        return $this->role === self::ROLE_EDITOR;
    }

    public function isClient()
    {
        return $this->role === self::ROLE_CLIENT;
    }

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function canUserAccessPanel($role): bool
    {
        return strtolower($this->role) === strtolower($role);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'admin') {
            return strtolower($this->role) === strtolower('ADMIN');;
        } else if ($panel->getId() === 'client') {
            return strtolower($this->role) === strtolower('USER');;
        }

        return true;
    }
}
