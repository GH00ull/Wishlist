<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
// ** Авторизация и работа с пользователем
Route::get('/auth', [AuthController::class, 'index'])->name('auth');

Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

// ** Регистрация 

Route::get('/peg', [RegController::class, 'index'])->name('reg');
Route::post('/peg/go', [RegController::class, 'register'])->name('reg.register');



Route::get('/', function () {
    return view('index');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/addwishlist', function () {
    return view('addwishlist');
});
Route::get('/produts', function () {
    return view('produts');
});
Route::get('/addproduts', function () {
    return view('addProduts');
});