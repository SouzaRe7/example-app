<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nova Pessoa') }}
        </h2>
        <form  method="GET" action="{{route('pessoas.create')}}">
            <x-primary-button>Novo</x-primary-button>
        </form>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-12 gap">
                <div class="col-span-3">NOME</div>
                <div class="col-span-7">Endereço</div>
                <div class="col-span-2">Ação</div>
                </div>
            @foreach ($data as $item)    
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="grid grid-cols-12 gap">
                    <div class="col-span-3">{{$item['PesNome']}}</div>
                    <div class="col-span-7">{{$item['PesEndereco']}}</div>
                    <div class="col-span-2 text-md">
                        <x-nav-link :href="route('pessoas.index')"> Editar</x-nav-link>
                        <x-nav-link :href="route('pessoas.index')"> Deletar</x-nav-link>
                    </div>
                </div>    
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
