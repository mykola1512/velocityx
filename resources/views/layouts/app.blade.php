<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>VelocityX - @yield('title')</title>
    <!-- CDN do Tailwind CSS (rápido e simples) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Podes meter o CSS global aqui ou linkar a um ficheiro */
        body, html { margin:0; padding:0; height:100%; }
        html {
            overflow-y: scroll;}

        .full-screen-image {
            position: relative;
            height: 100vh;
            background: url('/imagens/H1.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .project-title {
            font-size: 150px;
            color: white;
            font-weight: bolder; /* Negrito */
            transition: opacity 0.5s ease;
        }
        .hidden-title {
            opacity: 0;
        }
        .content {
            padding: 2rem;
            background: white;
        }
        .titulo{
            font-size: 2rem;
            color: #1f2937; /* Cor cinza escuro */
            font-weight: 800; /* Negrito */
            text-transform: uppercase; /* Maiúsculas */
        }
        html {
        scroll-behavior: smooth;
        }
    </style>

    @yield('css') <!-- Para CSS extra por página, se precisares -->
</head>
<body class="bg-gray-100 text-gray-900">

<!-- Navbar simples com links para as páginas -->
<nav class="fixed top-0 left-0 w-full bg-white shadow-md px-6 py-4 flex justify-between items-center z-50">

    <div class="space-x-4">
        <a href="{{ route('pagina_inicial') }}" class="{{ request()->routeIs('pagina_inicial') ? 'text-blue-600 font-bold underline' : 'text-gray-700 hover:text-blue-600 transition' }}">Início</a>
        <a href="#projeto" class="hover:underline">Projeto</a>
    </div>
    <div class="text-2xl font-extrabold text-gray-800"><p class="titulo">Velocity X</p></div>
    <div class="space-x-4">
        <a href="#galeria" class="hover:underline">Galeria</a>
        <a href="#equipa" class="hover:underline">Equipa</a>
        <a href="{{ route('comprar') }}" class="{{ request()->routeIs('comprar') ? 'text-blue-600 font-bold underline' : 'text-gray-700 hover:text-blue-600 transition' }}">Comprar</a>
    </div>
</nav>

    <div class="p-8">
        @yield('content')
    </div>
<footer class="bg-gray-800 text-white py-6 mt-12">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
        <p class="text-sm">&copy; {{ date('Y') }} VelocityX. Projeto criado por Mykola e Nuno.</p>
        <div class="space-x-4 mt-2 md:mt-0">
            <a href="#projeto" class="hover:text-blue-400">Projeto</a>
            <a href="#galeria" class="hover:text-blue-400">Galeria</a>
            <a href="#equipa" class="hover:text-blue-400">Equipa</a>
            <a href="{{ route('comprar') }}" class="hover:text-blue-400">Comprar</a>
        </div>
    </div>
</footer>

    @yield('scripts') <!-- Para JS extra por página -->
</body>
</html>
