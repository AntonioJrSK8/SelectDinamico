<?php

namespace App\Http\Livewire\Componentes;

use App\Models\Book;
use App\Models\User;
use Livewire\Component;

class SelectDinamico extends Component
{
    public $autores = [];
    public $showList = 'none';
    public $search = '';
    public $title = '';
    public $user_id = '';

    protected $rules = [
        'title' => 'required',
        'search' => 'required',
        'user_id' => 'integer'
    ];

    public function updatedSearch()
    {
        $this->showList = 'block';

        $this->autores = User::where("name","like","%{$this->search}%")->get();
    }

    public function create()
    {
        $validatedData = $this->validate();

        Book::create($validatedData);

        $this->clear();

    }
    public function selectedUser($user)
    {
        $this->user_id = $user['id'];
        $this->search = $user['name'];

        $this->showList = 'none';
    }

    public function clear()
    {
        $this->title = '';
        $this->search = '';
        $this->showList = 'none';

    }

    public function render()
    {
        return view('livewire.componentes.select-dinamico', [
            'books' => Book::all(),
            'autores' => $this->autores
        ]);
    }
}
