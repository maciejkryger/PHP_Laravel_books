<?php

use Illuminate\Support\Facades\Route;
use App\Book;
use App\Category;
use Illuminate\Http\Request;
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

Route::post('/foo', function () {
    echo 1;
    return;
});

Route::get('/', function () {
    return view('index');
});

Route::get('/books', 'BooksController@show') ;

Route::get('/book/add', 'BooksController@add');

Route::post('/book/store', 'BooksController@store'); 

Route::get('/book/del/{id}', 'BooksController@remove');