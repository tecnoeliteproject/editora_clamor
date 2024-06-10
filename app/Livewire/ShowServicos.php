<?php

namespace App\Livewire;

use App\Models\Servico;
use Livewire\Component;

class ShowServicos extends Component
{
    public function render()
    {
        $servicos = Servico::orderBy('nome', 'ASC')->get();
        return view('livewire.show-servicos', [
                    'servicos' => $servicos
        ]);
    }
}
