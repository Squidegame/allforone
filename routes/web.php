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


Route::get('/articles', 'App\Http\Controllers\ArticleController@articles');
Route::get('/article/{id}', 'App\Http\Controllers\ArticleController@article');
Route::get('/addarticle', 'App\Http\Controllers\ArticleController@newArticle');
Route::get('/listarticle', 'App\Http\Controllers\ArticleController@listArticles');

Auth::routes();

Route::get('/', function () {
    return view('accueil');
});
Route::get('articles/create', 'App\Http\Controllers\ArticleController@create');
Route::post('articles', 'App\Http\Controllers\ArticleController@store');
Route::get('articles', 'App\Http\Controllers\ArticleController@index');
Route::get('articles/{id}/edit', 'App\Http\Controllers\ArticleController@edit');
Route::put('articles/{id}', 'App\Http\Controllers\ArticleController@update');
Route::delete('articles/{id}', 'App\Http\Controllers\ArticleController@destroy');
