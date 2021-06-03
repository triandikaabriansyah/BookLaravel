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

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::resource('book', 'BookController');

// Books
// Route::get('/books', 'BooksController@index');
// Route::get('/books/create', 'BooksController@create');
// Route::get('/books/{book}', 'BooksController@show');
// Route::post('/books', 'BooksController@store');
// Route::get('/books/{book}/edit', 'BooksController@edit');
// Route::patch('books/{book}', 'BooksController@update');
Route::resource('books', 'BooksController');
