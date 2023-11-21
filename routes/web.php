<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
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

Route::get('/', BookController::class.'@index')->name('books.index');
Route::get('/books/{book}', BookController::class.'@show')->name('books.show');
Route::get('/create', BookController::class.'@create')->name('books.create');
Route::get('/books/{book}/edit', BookController::class.'@edit')->name('books.edit');
Route::post('/books', BookController::class .'@store')->name('books.store');
Route::put('/books/{book}', BookController::class.'@update')->name('books.update');
Route::delete('/books/{book}', BookController::class.'@destroy')->name('books.destroy');