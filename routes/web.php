<?php

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

Route::get('/', 'MainController@main');

Route::get('/about', 'PageController@about');

Route::post('/articles', 'ArticleController@store');

Route::get('/articles', 'ArticleController@index');

Route::get('/articles/create', 'ArticleController@create')
    ->name('articles.create');

Route::patch('/articles/{id}', 'ArticleController@update')
    ->name('articles.update');

Route::get('/articles/{id}', 'ArticleController@show')
    ->name('articles.show');

Route::get('/articles/{id}/edit', 'ArticleController@edit')
    ->name('articles.edit');
