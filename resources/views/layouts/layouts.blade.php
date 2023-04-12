@section('head')

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <title>Подарочек</title>
    </head>

@show

<body>
    @selected('header')
    <header class="bg-white py-4">
        <div class="container mx-auto">
            <nav class="flex justify-between items-center">
                <a href="#" class="text-gray-700 font-semibold text-lg">Мой Вишлист</a>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-gray-700 hover:text-gray-900">Главная</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-gray-900">О нас</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-gray-900">Подарки</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-gray-900">Войти</a></li>
                </ul>
            </nav>
        </div>
    </header>
@show
@yield('content')
@section('footer')
    <footer class="bg-gray-200 py-4 mt-auto">
        <div class="container mx-auto text-center text-gray-700">
            <p>&copy; 2023 Мой Вишлист. Все права защищены.</p>
        </div>
    </footer>
@show
</body>

</html>
