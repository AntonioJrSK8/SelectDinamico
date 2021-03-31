<div>
    <div class="container border-2 bg-gray-300">
        <form wire:submit.prevent='create'>
            <div class="grid ml-2">
                <div>
                    <input type="text" wire:model='title' name="title" placeholder="Titulo do Livro">
                    @error('title') <span class="error">{{ $message }}</span> @enderror
                </div>

                    <div class="">
                        <input type="text" wire:model="search" name="user"
                               placeholder="Autor do Livro">

                            <span wire:click='clear' class="clear-button relative h-32 w-32">
                                <a wire:click='clear' class="cursor-pointer"> &#x2715 </a>
                            </span>

                        @error('search') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <ul style="display: {{ $showList }} ;">

                            @foreach ($autores as $autor)
                            <li wire:click='selectedUser({{$autor}})' class="cursor-pointer">
                                {{ $autor->name }}
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="justify-items-end">
                        <button type="submit" class="bg-green-100">Cadastro</button>
                    </div>

            </div>
        </form>
    </div>
    <br/>
    <hr>

    <div class="flex justify-center">
        <div class="grid grid-cols-2 gap-0 border-2 w-3/5">

            <div class="border-2 bg-black text-white">Titulo</div>
            <div class="border-2 bg-black text-white">Autor</div>
            @forelse ($books as $book)
                <div class="border-2">{{ $book->title }}</div>
                <div class="border-2">{{ $book->user->name}}</div>
            @empty
                <div class="border-2 col-span-2">No books</div>
            @endforelse
        </div>
    </div>

</div>
