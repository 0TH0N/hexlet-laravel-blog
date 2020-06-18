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

Route::get('/about', 'PageController@about');

Route::get('/articles', 'ArticleController@index')->name('articles.index');

Route::get('/articles/create', 'ArticleController@create')->name('articles.create');

Route::get('/articles/{id}', 'ArticleController@show')->name('articles.show');

Route::patch('/articles/{id}', 'ArticleController@update')->name('articles.update');

Route::delete('/articles/{id}', 'ArticleController@delete')->name('articles.delete');

Route::post('/articles', 'ArticleController@store')->name('articles.store');

Route::get('/articles/{id}/edit', 'ArticleController@edit')->name('articles.edit');
