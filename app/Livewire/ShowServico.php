<?php

namespace App\Livewire;

use App\Models\Servico;
use Livewire\Component;

class ShowServico extends Component
{
    public $servico;

    public function mount($id){
        $this->servico = Servico::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.show-servico', [
            'servico' => $this->servico
        ]);
    }
}
