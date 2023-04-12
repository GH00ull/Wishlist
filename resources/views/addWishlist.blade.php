@extends('layouts.layouts')
@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white w-96 rounded-md p-8">
            <h1 class="text-3xl font-semibold mb-6">Создание вишлиста</h1>
            <form action="/wishlists" method="post">
                <!-- @csrf CSRF-токен для защиты от CSRF-атак -->
                <label class="block mb-2" for="name">Название вишлиста:</label>
                <input class="w-full border border-gray-300 px-3 py-2 mb-4" type="text" id="name" name="name"
                    required>
                <label class="block mb-2" for="description">Описание вишлиста:</label>
                <textarea class="w-full border border-gray-300 px-3 py-2 mb-4" id="description" name="description" required></textarea>
                <input class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 cursor-pointer" type="submit"
                    value="Создать вишлист">
            </form>
        </div>
    </div>
@endsection
