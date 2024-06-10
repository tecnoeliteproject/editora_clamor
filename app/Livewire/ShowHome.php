<?php

namespace App\Livewire;

use App\Models\Servico;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        $servicos = Servico::orderBy('nome', 'ASC')->get();
        return view('livewire.show-home', [
            'servicos' => $servicos
        ]);
    }
}
