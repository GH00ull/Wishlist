<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Регистрация | Мой Вишлист</title>
    <!-- Подключение стилей Tailwind CSS -->

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded-md shadow-md w-96">
            <h1 class="text-3xl font-semibold text-gray-800 mb-4">Регистрация</h1>
            <form action="#" class="space-y-4">
                <div>
                    <label for="name" class="block text-gray-700 font-medium">Имя</label>
                    <input type="text" id="name"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 mt-1
                     focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="Введите ваше имя" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-medium">Email</label>
                    <input type="email" id="email"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 mt-1
                     focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="Введите ваш Email" required>
                </div>
                <div>
                    <label for="password" class="block text-gray-700 font-medium">Пароль</label>
                    <input type="password" id="password"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 mt-1
                     focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="Введите ваш пароль" required>
                </div>
                <div>
                    <button type="submit"
                        class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md w-full">Зарегистрироваться</button>
                </div>
            </form>
            <div class="mt-4 text-gray-600">
                Уже есть аккаунт? <a href="#" class="text-indigo-500 hover:text-indigo-600">Войти</a>
            </div>
        </div>
    </div>
    <footer class="bg-gray-200 py-4 mt-auto">
        <div class="container mx-auto text-center text-gray-700">
            <p>&copy; 2023 Мой Вишлист. Все права защищены.</p>
        </div>
    </footer>
</body>

</html>
