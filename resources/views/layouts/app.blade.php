<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HRM')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">

    {{-- Хедер --}}
    <header class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">HRM</h1>
        @auth
            <div class="relative">
                <span class="font-semibold">{{ Auth::user()->first_name }} ({{ Auth::user()->role }})</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button class="ml-4 text-red-500 hover:underline" type="submit">Вийти</button>
                </form>
            </div>
        @endauth
    </header>

    {{-- Основний контент --}}
    <main class="p-6">
        @yield('content')
    </main>

</body>
</html>
