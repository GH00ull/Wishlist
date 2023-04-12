<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // !написать миграцию
        if (Auth::attempt($credentials)) {
            // Аутентификация успешна
            return redirect('/'); // здесь '/dashboard' - это URL-адрес страницы, на которую будет перенаправлен пользователь после успешной аутентификации
        } else {
            // Аутентификация не удалась
            return back()->withErrors([
                'email' => 'Неправильные учетные данные',
            ]);
        }
    }

    // Метод выхода пользователя
    public function logout()
    {
        // !написать миграцию
        Auth::logout();
        return redirect('/'); // здесь '/login' - это URL-адрес страницы входа
    }

}