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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/comentar',App\Http\Controllers\comentarioController::class);
Route::post('/comentar/store', [App\Http\Controllers\comentarioController::class,'store'])->name('comentar.store');

Route::resource('/post',App\Http\Controllers\postController::class);
Route::post('/comentar/post', [App\Http\Controllers\postController::class,'store'])->name('post.store');
