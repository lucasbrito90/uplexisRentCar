<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if(session('delete'))
        <x-alter-cards message="{{session('delete')}}" color="green" link=""></x-alter-cards>
    @endif

    <x-search-area action="catchCarBy" title="Encontre Seu Veículo Abaixo"  labelButton="pesquisar" ></x-search-area>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-transparent overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($cars as $car)

                        <x-show-cars-cards
                            imagem="{{$car->imagem}}"
                            nome="{{$car->nome}}"
                            preco="{{$car->preco}}"
                            ano="{{$car->ano}}"
                            quilometragem="{{$car->quilometragem}}"
                            combustivel="{{$car->combustivel}}"
                            cambio="{{$car->cambio}}"
                            portas="{{$car->portas}}"
                            cor="{{$car->cor}}"
                            id="{{$car->id}}"
                        > </x-show-cars-cards>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
