@extends('layouts.app')

@section('title', 'Projeto')

@section('content')
    <div class="max-w-3xl mx-auto p-6" style="padding-top: 80px;">
        <h1 class="text-4xl font-bold mb-4 text-center">Adquire o Conjunto VelocityX</h1>
        <p class="text-center text-lg text-gray-600 mb-10">
            O nosso conjunto de volante e pedais foi desenvolvido especialmente para projetos educativos e de robótica.
        </p>

        <div class="bg-white rounded-xl shadow-md p-6 text-center">
            <img src="/imagens/conjunto.png" alt="Volante e Pedais" class="mx-auto mb-6 rounded-md">
            <h2 class="text-2xl font-semibold mb-2">Conjunto VelocityX</h2>
            <p class="text-gray-700 mb-4">Inclui volante com sensores e pedais com ligação por ESP32, prontos a integrar com carrinhos RC ou projetos personalizados.</p>
            <p class="text-3xl font-bold text-green-600 mb-6">149,99 €</p>
            <a href="#encomendar" class="bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded-full text-lg transition duration-200">
                Encomendar agora
            </a>
        </div>

        <div id="encomendar" class="mt-16 bg-white p-6 rounded-xl shadow-md">
            <h3 class="text-xl font-bold mb-4">Fazer encomenda</h3>
            <form action="#" method="POST" class="space-y-4">
                <input type="text" placeholder="Nome completo" class="w-full border border-gray-300 p-3 rounded">
                <input type="email" placeholder="Email" class="w-full border border-gray-300 p-3 rounded">
                <input type="text" placeholder="Morada de entrega" class="w-full border border-gray-300 p-3 rounded">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-full text-lg">Enviar Pedido</button>
            </form>
        </div>

        <div class="text-center mt-10">
            <a href="/" class="text-blue-600 hover:underline">← Voltar ao início</a>
        </div>
    </div>
@endsection
