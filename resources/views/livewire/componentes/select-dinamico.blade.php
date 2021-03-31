<div>
    <div class="container">
        <form wire:submit.prevent='create'>


                    <input type="text" wire:model='title' name="title" placeholder="Titulo do Livro">

                    <div class="input-clear">
                        <input type="text" wire:model="search" name="user"
                               placeholder="Autor do Livro">
                        <span wire:click='clear' class="clear-button relative h-32 w-32">
                        <a wire:click='clear' class="cursor-pointer"> &#x2715 </a>
                        </span>
                    </div>

                    <ul style="display: {{ $showList }} ;">

                        @foreach ($autores as $autor)
                        <li wire:click='selectedUser({{$autor}})' class="cursor-pointer">
                            {{ $autor->name }}
                        </li>
                        @endforeach
                    </ul>

                    <button type="submit" class="bg-green-100">Cadastro</button>

        </form>
    </div>
    <br/>
    <hr>

    <ul>
        @forelse ($books as $book)
            <li>{{ $book->title }} - {{ $book->user->name}}</li>
        @empty
            <p>No books</p>
        @endforelse
    </ul>
</div>
