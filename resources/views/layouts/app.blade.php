<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'HRM')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="{{ route('dashboard') }}">HRM</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                @if(Auth::check() && Auth::user()->role === 'Адмін')
                    <li class="nav-item"><a class="nav-link" href="#">Співробітники</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Відпустки</a></li>
                @endif
                <li class="nav-item"><a class="nav-link" href="#">Мій профіль</a></li>
            </ul>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-outline-light btn-sm">Вийти</button>
            </form>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
