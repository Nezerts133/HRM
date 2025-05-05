@extends('layouts.app')

@section('title', 'Вхід')

@section('content')
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-semibold text-center mb-6">Вхід</h2>

            <!-- Помилки -->
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Форма входу -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Пароль -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Пароль:</label>
                    <input type="password" name="password" id="password" required class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Кнопка -->
                <div class="flex justify-between items-center">
                    <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition">Увійти</button>
                </div>
            </form>
        </div>
    </div>
@endsection