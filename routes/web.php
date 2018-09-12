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

Route::get('/auth/login', function () {
    return view('auth.login');
});
Route::post('/auth/login', 'LoginController@login');

Route::get('/auth/register' function () {
    return view('auth.register');
});
Route::post('/auth/register', 'RegisterController@register');

Route::get('/'. 'ArticleController@showList');

Route::get('/articles', 'ArticleController@showList');
Route::get('/article/{id}', 'ArticleController@showArticle');
Route::get('/article/add', function () {
    return view('articles.add');
});
Route::post('/article/add', 'ArticleController@addArticle');

Route::get('/codes', 'CodeController@showList');
Route::get('/code/{id}' 'CodeController@showCode');
Route::get('/code/add', function () {
    return view('codes.add');
});
Route::post('/code/add', 'CodeController@addCode');

Route::get('/tags', 'TagController@showList');
