<?php

namespace App\Http\Livewire\Componentes;

use Livewire\Component;
use Illuminate\Support\Str;

class Contador extends Component
{
    public $name = '';
    public $numLetras = '';

    public function updatedName($value)
    {
        $this->numLetras = Str::length($value);
    }

    public function render()
    {
        return view('livewire.componentes.contador');
    }
}
