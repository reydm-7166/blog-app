<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainIngredientController;

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

Route::get('/', function () {
    return view('user.index');
});

Route::get('index', [MainIngredientController::class, 'index'])->name('main.index');

Route::get('search', [MainIngredientController::class, 'search'])->name('main.search');

Route::get('show/{dish}/{main}', [MainIngredientController::class, 'show']);

