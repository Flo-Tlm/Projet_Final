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


Route::get('/welcome',[ArticlesController::class, 'getArticles']);


Route::post('/registered', [AuthController::class, 'registered'])->name('registered');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/contacts', [MailController::class, 'contact'])->name('contact');
Route::middleware(['throttle:global'])->group(function ()  {
    Route::post('/contacts', [MailController::class, 'sendMessageGoogle'])->name('send.message.google');
});
Route::get('/detail/{id}', [ArticlesController::class, 'getOneDetails'])->whereNumber('id')->name('getDetails');
Route::post('/commentaires/{id}', [ArticlesController::class, 'addComm']);