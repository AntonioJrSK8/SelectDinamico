<div>
    <button wire:click='opcao(1)' class="hover:shadow-lg bg-red-100 text-blue-500 hover:text-red-500 py-3 px-3">
      Contador de letras
    </button>

    <button wire:click='opcao(2)' class="hover:shadow-lg bg-red-100 text-blue-500 hover:text-red-500 py-3 px-3">
      Select Dinamico
    </button>
    <hr>
    <br>

    @switch($op)
    @case(1)
        @livewire('componentes.contador')
        @break

    @case(2)
        @livewire('componentes.select-dinamico')
        @break

    @default
        @livewire('componentes.novo')
@endswitch

</div>
