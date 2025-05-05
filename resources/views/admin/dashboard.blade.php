@extends('layouts.admin')

@section('title', 'Адмін-панель')

@section('content')
    <h2 class="text-2xl font-semibold">Вітаємо в HRM, {{ Auth::user()->first_name }}</h2>
    <p class="text-gray-600">Ваша роль: {{ Auth::user()->role }}</p>

    <form method="POST" action="{{ route('logout') }}" class="mt-4">
        @csrf
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
            Вийти
        </button>
    </form>
@endsection
