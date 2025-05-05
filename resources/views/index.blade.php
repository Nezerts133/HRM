@extends('layouts.admin')

@section('title', 'Список співробітників')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Список співробітників</h1>

    <table class="min-w-full bg-white shadow rounded overflow-hidden">
        <thead class="bg-gray-100 text-left text-sm font-medium text-gray-600">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Ім’я</th>
                <th class="px-4 py-2">Прізвище</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Роль</th>
            </tr>
        </thead>
        <tbody class="text-sm divide-y divide-gray-100">
            @foreach ($employees as $employee)
                <tr>
                    <td class="px-4 py-2">{{ $employee->id }}</td>
                    <td class="px-4 py-2">{{ $employee->first_name }}</td>
                    <td class="px-4 py-2">{{ $employee->last_name }}</td>
                    <td class="px-4 py-2">{{ $employee->email }}</td>
                    <td class="px-4 py-2">{{ $employee->role }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
