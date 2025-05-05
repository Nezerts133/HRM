@extends('layouts.app')

@section('title', 'Адмін-панель')

@section('content')
    <h2>Вітаємо в HRM, {{ Auth::user()->first_name }}</h2>
    <p>Ваша роль: {{ Auth::user()->role }}</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Вийти</button>
    </form>
@endsection
