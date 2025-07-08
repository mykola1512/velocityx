@extends('layouts.app')

@section('title', 'Projeto')

@section('content')
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
@endsection
