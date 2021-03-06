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
    return view('home');
});


Route::get('/data-table', function () {
    return view('data_table');
});


Route::get('/home', 'AuthController@home');
Route::get('/data_table', 'AuthController@data-table');

Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts', 'PostController@index');
Route::get('/posts/{id}', 'PostController@show');
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::put('/posts/{id}', 'PostController@update');
Route::delete('/posts/{id}', 'PostController@destroy');

Route::get('/pertanyaan/create', 'crudcontroller@create');
Route::post('/pertanyaan', 'crudcontroller@store');
Route::get('/pertanyaan', 'crudcontroller@index');
Route::get('/pertanyaan/{id}', 'crudcontroller@show');
Route::get('/pertanyaan/{id}/edit', 'crudcontroller@edit');
Route::put('/pertanyaan/{id}', 'crudcontroller@update');
Route::delete('/pertanyaan/{id}', 'crudcontroller@destroy');


