@extends('layouts.app')

@section('title', 'Galeria')

@section('content')
    <div class="text-center my-8">
        <h1 class="text-4xl font-bold text-gray-800">Galeria</h1>
        <p class="text-gray-600 mt-2">Fotos do projeto, construção e testes</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4">
        
        <div class="overflow-hidden rounded-xl shadow-lg hover:scale-105 transition transform duration-300">
            <img src="/imagens/IM1.jpg" alt="Carrinho montado" class="w-full h-64 object-cover">
        </div>
        <div class="overflow-hidden rounded-xl shadow-lg hover:scale-105 transition transform duration-300">
            <img src="/imagens/IM2.jpg" alt="Testes do volante" class="w-full h-64 object-cover">
        </div>
        <div class="overflow-hidden rounded-xl shadow-lg hover:scale-105 transition transform duration-300">
            <img src="/imagens/IM3.jpg" alt="Equipa a trabalhar" class="w-full h-64 object-cover">
        </div>
        <div class="overflow-hidden rounded-xl shadow-lg hover:scale-105 transition transform duration-300">
            <img src="/imagens/IM4.jpg" alt="Carrinho em ação" class="w-full h-64 object-cover">
        </div>
        <div class="overflow-hidden rounded-xl shadow-lg hover:scale-105 transition transform duration-300">
            <img src="/imagens/IM5.jpg" alt="Equipa a trabalhar" class="w-full h-64 object-cover">
        </div>
        <div class="overflow-hidden rounded-xl shadow-lg hover:scale-105 transition transform duration-300">
            <img src="/imagens/IM6.jpg" alt="Carrinho em ação" class="w-full h-64 object-cover">
        </div>
    </div>
@endsection
