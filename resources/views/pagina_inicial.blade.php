@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
    <div class="full-screen-image" id="hero">
        <h1 class="project-title" id="title">VelocityX</h1>
    </div>

    <!-- Projeto -->
    <section id="projeto" class="p-10 bg-white">
    <div class="max-w-4xl mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">O Projeto</h1>

        <p class="text-gray-700 mb-6">
            O nosso projeto consiste na remodelação de um carrinho RC, controlado por um sistema de volante e pedais desenvolvidos por nós.
            Este projeto foi realizado no âmbito da Prova de Aptidão Profissional (PAP), no curso de Informática.
        </p>

        <h2 class="text-2xl font-semibold text-gray-800 mb-2">Objetivos</h2>
        <ul class="list-disc list-inside text-gray-700 mb-6">
            <li>Construir um sistema funcional de volante e pedais</li>
            <li>Controlar o carrinho remotamente via ESP32</li>
            <li>Mostrar conhecimentos de eletrónica, programação e design</li>
            <li>Apresentar o projeto de forma visual e interativa</li>
        </ul>

        <h2 class="text-2xl font-semibold text-gray-800 mb-2">Componentes Usados</h2>
        <ul class="list-disc list-inside text-gray-700 mb-6">
            <li>2x ESP32</li>
            <li>2x Potenciómetros (pedais)</li>
            <li>Volante com sensor</li>
            <li>Chassis RC modificado</li>
            <li>Website de apresentação feito em Laravel</li>
            <li>Imagens e vídeos para documentação</li>
            <li>Documentação técnica e esquemas de ligação</li>
            <li>Testes de funcionamento e ajustes</li>
            <li>Apresentação final do projeto</li>
        </ul>

        <h2 class="text-2xl font-semibold text-gray-800 mb-2">Funcionamento</h2>
        <p class="text-gray-700 mb-6">
            Os pedais enviam sinais analógicos para o ESP32 do volante, que transmite os dados via Wi-Fi para outro ESP32 no carrinho.
            Esse segundo ESP32 interpreta os sinais e movimenta o carrinho conforme a aceleração e direção.
            O volante e os pedais são conectados a um chassis RC modificado, permitindo um controle preciso do carrinho.
        </p>

        <img src="/imagens/esquema.jpg" alt="Esquema do funcionamento" class="w-full rounded shadow-md">

        <p class="text-sm text-gray-500 mt-2 text-center">Esquema ilustrativo da ligação entre volante, pedais e carrinho</p>
    </div>
    </section>

    <!-- Galeria -->
    <section id="galeria" class="p-10 bg-gray-100">
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
    </section>

    <!-- Equipa -->
    <section id="equipa" class="p-10 bg-white">
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
    </section>
@endsection

@section('scripts')
<script>
    const title = document.getElementById('title');
    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        title.classList.toggle('hidden-title', scrollY > 50);
    });
</script>
@endsection
