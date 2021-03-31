<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class Menucomp extends Component
{
    public $op = null;

    public function opcao($op = null)
    {
        $this->op = $op;

        return $this->op;
    }
    public function render()
    {
        return view('livewire.menucomp');
    }
}
