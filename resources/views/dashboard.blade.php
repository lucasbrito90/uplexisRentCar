<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    @if(session('message'))
        <x-alter-cards link="http://localhost:8000/catchcar" message="{{ session('message') }}" color="{{ session('color') }}"></x-alter-cards>
    @endif

    <x-search-area action="findcar" title="Encontre Seu Veículo Abaixo"  labelButton="capturar" ></x-search-area>

</x-app-layout>
