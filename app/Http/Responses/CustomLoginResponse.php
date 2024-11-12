<?php

namespace App\Http\Responses;

use App\Filament\Client\Pages\CompleteSignup;
use App\Models\PerfilCliente;
use Filament\Facades\Filament;
use Filament\Http\Responses\Auth\Contracts\LoginResponse as Responsable;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;

class CustomLoginResponse implements Responsable
{
    public function toResponse($request): RedirectResponse | Redirector
    {
        $profile = PerfilCliente::where('user_id', $request->user()->id)->first();

        if ($profile) {
            return redirect()->intended(Filament::getUrl());
        } else {
            return redirect()->intended(CompleteSignup::getUrl());
        }
    }
}
