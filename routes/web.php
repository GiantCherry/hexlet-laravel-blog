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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

//    $message = 'Be called ROUTE /about';
//    Log::alert($message);

    return view('about');
});

Route::get('/articles', function () {

//    $message = 'Be called ROUTE /articles';
//    Log::alert($message);

    return view('articles');
});
