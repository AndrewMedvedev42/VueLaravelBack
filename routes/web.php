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
    return "Home";
});

Route::get('/articles', 'ArticleController@getAll');
Route::get('/article/{articleid}', 'ArticleController@getOne');
Route::post('/create', 'ArticleController@store');
Route::post('/update', 'ArticleController@update');