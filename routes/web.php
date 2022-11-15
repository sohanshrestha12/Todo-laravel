<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todo;

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

Route::get('/', [Todo::class, 'index']);
Route::post('/save-todo',[Todo::class, 'saveTodo'])->name('saveTodo');
Route::get('delete/{id}',[Todo::class, 'destroy']);
Route::get('edit/{id}',[Todo::class, 'edit']);
Route::get('back',[Todo::class, 'back']);
Route::post('/edit',[Todo::class, 'update'])->name('update');