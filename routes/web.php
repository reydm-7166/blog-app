<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', [LoginController::class, 'index'])->name('login.index');

Route::post('login/submit',  [LoginController::class, 'submit'])->name('login.submit');

Route::get('register', [RegisterController::class, 'create'])->name('register.create');

Route::post('register/submit', [RegisterController::class, 'store'])->name('register.store');

Route::get('/home', [PostController::class, 'index'])->name('post.index');

Route::get('/', function () {
    return view('user.index');
});

Route::get('/generator', function () {
    return view('user.generator');
});

Route::get('/result', function () {
    return view('user.result');
});


