<?php

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
Route::get('/auth', function () {
    return view('auth');
});
Route::get('/peg', function () {
    return view('reg');
});
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