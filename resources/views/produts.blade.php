@extends('layouts.layouts')
@section('content')
    <main class="container mx-auto py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="gift1.jpg" alt="Подарок 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">Название подарка 1</h2>
                    <p class="text-sm text-gray-600 mt-1">Описание подарка 1</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-xl font-semibold text-indigo-500">$50</span>
                        <button
                            class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md">Добавить
                            в вишлист</button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="gift2.jpg" alt="Подарок 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">Название подарка 2</h2>
                    <p class="text-sm text-gray-600 mt-1">Описание подарка 2</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-xl font-semibold text-indigo-500">$100</span>
                        <button
                            class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md">Добавить
                            в вишлист</button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="gift3.jpg" alt="Подарок 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">Название подарка 3</h2>
                    <p class="text-sm text-gray-600 mt-1">Описание подарка 3</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-xl font-semibold text-indigo-500">$25</span>
                        <button
                            class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2
                    px-4 rounded-md">Добавить
                            в вишлист</button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="gift4.jpg" alt="Подарок 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">Название подарка 4</h2>
                    <p class="text-sm text-gray-600 mt-1">Описание подарка 4</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-xl font-semibold text-indigo-500">$75</span>
                        <button
                            class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md">Добавить
                            в вишлист</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
