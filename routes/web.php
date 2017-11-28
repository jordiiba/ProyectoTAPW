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
    return view('master');
});

Route::get('/prueba', function(){
    return view('prueba');
});

//Route::resource('categoria','CategoriaController');
Route::prefix('categoria')->group(function () {
    Route::get('/index', 'CategoriaController@index');
    Route::get('/detalle/{id}', 'CategoriaController@show');
    Route::post('/inserta', 'CategoriaController@store');
    Route::put('/actualiza/{id}', 'CategoriaController@update');
    Route::delete('/borra/{id}', 'CategoriaController@destroy');
    Route::get('/vista_inserta', 'CategoriaController@create');
    Route::get('/vista_actualiza/{id}', 'CategoriaController@edit');
});