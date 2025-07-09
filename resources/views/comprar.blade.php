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
        </div>

        <div id="encomendar" class="mt-16 bg-white p-6 rounded-xl shadow-md">
            <h3 class="text-xl font-bold mb-4">Fazer encomenda</h3>
            @if(session('success'))
    <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif
        <form action="{{ route('encomenda.enviar') }}" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="nome" placeholder="Nome completo" class="w-full border border-gray-300 p-3 rounded" required>
            <input type="email" name="email" placeholder="Email" class="w-full border border-gray-300 p-3 rounded" required>
            <input type="text" name="morada" placeholder="Morada de entrega" class="w-full border border-gray-300 p-3 rounded" required>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-full text-lg">Enviar Pedido</button>
        </form>
        </div>

        <div class="text-center mt-10">
            <a href="/" class="text-blue-600 hover:underline">← Voltar ao início</a>
        </div>
    </div>
@endsection
