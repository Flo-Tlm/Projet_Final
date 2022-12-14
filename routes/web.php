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


Route::get('/studio', function () {
    return view('studio');
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/oneArticle', function () {
    return view('oneArticle');
});

Route::get('/contact', function () {
    return view('contact');
});




