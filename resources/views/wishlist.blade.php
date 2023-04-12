@extends('layouts.layouts')
@section('content')
    <main class="container mx-auto mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="wishlist1.jpg" alt="Лист 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">Лист 1</h2>
                    <p class="text-sm text-gray-600 mt-1">Описание листа 1</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-xl font-semibold text-indigo-500">10 подарков</span>
                        <a href="#" class="text-indigo-500 hover:text-indigo-600">Посмотреть</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="wishlist2.jpg" alt="Лист 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">Лист 2</h2>
                    <p class="text-sm text-gray-600 mt-1">Описание листа 2</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-xl font-semibold text-indigo-500">5 подарков</span>
                        <a href="#" class="text-indigo-500 hover:text-indigo-600">Посмотреть</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="wishlist3.jpg" alt="Лист 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">Лист 3</h2>
                    <p class="text-sm text-gray-600 mt-1">Описание листа 3</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-xl font-semibold text-indigo-500">3 подарка</span>
                        <a href="#" class="text-indigo-500 hover:text-indigo-600">Посмотреть</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
