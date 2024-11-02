<?php

namespace App\Filament\Client\Resources\PerfilClienteResource\Pages;

use App\Filament\Client\Resources\PerfilClienteResource;
use Filament\Resources\Pages\EditRecord;
use App\Models\PerfilCliente;

class EditPerfilCliente extends EditRecord
{
    protected static string $resource = PerfilClienteResource::class;

    public function mount($record = null): void
    {
        // Tenta carregar o perfil existente do usuário
        $user = auth()->user();
        $profile = $user->perfil ?: new PerfilCliente(['user_id' => $user->id]);

        // Redireciona para a rota de edição, criando um perfil se necessário
        if (!$record) {
            $this->redirect(static::getResource()::getUrl('edit', ['record' => $profile->id]));
        } else {
            parent::mount($record);
        }
    }
}
