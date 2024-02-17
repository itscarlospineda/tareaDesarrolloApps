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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');
Route::get('/articles', [App\Http\Controllers\ArticlesController::class, 'index'])->name('articles');

Route::get('/createarticles', [App\Http\Controllers\ArticlesController::class, 'index2'])->name('createarticles');
Route::post('/createarticles', [App\Http\Controllers\ArticlesController::class, 'create'])->name('createarticles.create');

Route::get('/editarticles/{id}', [App\Http\Controllers\ArticlesController::class, 'edit'])->name('editarticles.edit');
Route::post('/editarticles/{id}', [App\Http\Controllers\ArticlesController::class, 'update'])->name('editarticles.update');
Route::delete('/editarticles/{id}', [App\Http\Controllers\ArticlesController::class, 'delete'])->name('editarticles.delete');
