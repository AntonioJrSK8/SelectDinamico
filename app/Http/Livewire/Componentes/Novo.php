<?php

namespace App\Http\Livewire\Componentes;

use Livewire\Component;

class Novo extends Component
{
    public $x= 'novo';

    public function render()
    {
        return view('livewire.componentes.novo');
    }
}
