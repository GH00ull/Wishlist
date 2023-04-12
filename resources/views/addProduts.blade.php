@extends('layouts.layouts')
@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white w-96 rounded-md p-8">
            <h1 class="text-3xl font-semibold mb-6">Добавление подарков</h1>
            <form action="/gifts" method="post" enctype="multipart/form-data">
                @csrf <!-- CSRF-токен для защиты от CSRF-атак -->
                <label class="block mb-2" for="name">Название подарка:</label>
                <input class="w-full border border-gray-300 px-3 py-2 mb-4" type="text" id="name" name="name"
                    required>
                <label class="block mb-2" for="description">Описание подарка:</label>
                <textarea class="w-full border border-gray-300 px-3 py-2 mb-4" id="description" name="description" required></textarea>
                <label class="block mb-2" for="image">Изображение подарка:</label>
                <input class="mb-4" type="file" id="image" name="image" required>
                <input class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 cursor-pointer" type="submit"
                    value="Добавить подарок">
            </form>
        </div>
    </div>
@endsection
