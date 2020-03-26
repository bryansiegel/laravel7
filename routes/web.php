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

Route::get('/about', function() {

	// return $article;

    return view('about', ['articles' => App\Article::take(3)->latest()->get()]);
});

/* About */
Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create')
    ->middleware('auth');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit')
    ->middleware('auth');
Route::put('/articles/{article}', 'ArticlesController@update');


Route::get('/posts/{post}', 'PostController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
