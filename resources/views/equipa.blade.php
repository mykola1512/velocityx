@extends('layouts.app')

@section('title', 'Equipa')

@section('content')
    <div class="text-center my-8">
        <h1 class="text-4xl font-bold text-gray-800">A Nossa Equipa</h1>
        <p class="text-gray-600 mt-2">Conhece os criadores do projeto Velocity X</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4">
        <!-- Membro 1 -->
        <div class="bg-white rounded-xl shadow-lg p-6 text-center">
            <img src="/imagens/mykola.jpg" alt="Mykola Galyulko" class="w-32 h-32 mx-auto rounded-full object-cover">
            <h2 class="mt-4 text-xl font-semibold text-gray-800">Mykola Galyulko</h2>
            <p class="text-gray-600">Programador e Designer do site,<br>Responsável pelos pedais</p>
        </div>

        <!-- Membro 2 -->
        <div class="bg-white rounded-xl shadow-lg p-6 text-center">
            <img src="/imagens/nuno.jpg" alt="Nuno Gomes" class="w-32 h-32 mx-auto rounded-full object-cover">
            <h2 class="mt-4 text-xl font-semibold text-gray-800">Nuno Gomes</h2>
            <p class="text-gray-600">Responsável pelo volante, vídeo</p>
        </div>

        <!-- Adiciona mais membros se quiseres -->
    </div>
@endsection
