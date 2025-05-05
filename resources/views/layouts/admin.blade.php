<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>HRM Панель</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <div class="flex h-screen">
        {{-- Sidebar --}}
        <aside class="w-64 bg-white shadow-md">
            <div class="p-6 font-bold text-xl border-b">HRM</div>
            <nav class="mt-4">
                <ul class="space-y-2">
                    <li><a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-gray-100">📊 Панель</a></li>
                    <li><a href="{{ route('employees.index') }}" class="block py-2 px-4 hover:bg-gray-100">👥 Співробітники</a></li>
                </ul>
            </nav>
        </aside>

        {{-- Main --}}
        <main class="flex-1 flex flex-col">
            {{-- Header --}}
            <header class="bg-white border-b p-4 flex justify-end items-center">
                <div class="relative">
                    <button onclick="toggleMenu()" class="flex items-center space-x-2 hover:text-blue-500">
                        <span>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                        <span class="text-sm text-gray-500">({{ Auth::user()->role }})</span>
                    </button>
                    <div id="userMenu" class="absolute right-0 mt-2 bg-white shadow rounded hidden">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-100">🚪 Вийти</button>
                        </form>
                    </div>
                </div>
            </header>

            {{-- Content --}}
            <div class="p-6">
                @yield('content')
            </div>
        </main>
    </div>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('userMenu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
