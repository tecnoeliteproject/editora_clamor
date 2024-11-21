<?php

namespace App\Http\Responses;

use App\Filament\Client\Pages\CompleteSignup;
use Filament\Http\Responses\Auth\Contracts\RegistrationResponse as Responsable;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;

class CustomRegistrationResponse implements Responsable
{
    public function toResponse($request): RedirectResponse | Redirector
    {
        return redirect()->intended(CompleteSignup::getUrl());
    }
}
