<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('/post/index', [App\Http\Controllers\PostController::class, 'index'])->name('index');
Route::get('/post/show/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('show');
Route::get('/post/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('edit');
Route::post('/post/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('update');
Route::post('/post/destroy/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('destroy');
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('create');
Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('store');
