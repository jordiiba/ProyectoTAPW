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

Route::prefix('categoria')->group(function () {
    Route::get('/index', 'CategoriaController@index');
    Route::get('/detalle/{id}', 'CategoriaController@show');
    Route::post('/inserta', 'CategoriaController@store');
    Route::put('/actualiza/{id}', 'CategoriaController@update');
    Route::delete('/borra/{id}', 'CategoriaController@destroy');
    Route::get('/vista_inserta', 'CategoriaController@create');
    Route::get('/vista_actualiza/{id}', 'CategoriaController@edit');
    Route::get('/vista_borra/{id}', 'CategoriaController@delete');
});

Route::prefix('cupon')->group(function () {
    Route::get('/index', 'CuponController@index');
    Route::get('/detalle/{id}', 'CuponController@show');
    Route::post('/inserta', 'CuponController@store');
    Route::put('/actualiza/{id}', 'CuponController@update');
    Route::delete('/borra/{id}', 'CuponController@destroy');
    Route::get('/vista_inserta', 'CuponController@create');
    Route::get('/vista_actualiza/{id}', 'CuponController@edit');
    Route::get('/vista_borra/{id}', 'CuponController@delete');
});

Route::prefix('cliente')->group(function () {
    Route::get('/index', 'ClienteController@index');
    Route::get('/detalle/{id}', 'ClienteController@show');
    Route::post('/inserta', 'ClienteController@store');
    Route::put('/actualiza/{id}', 'ClienteController@update');
    Route::delete('/borra/{id}', 'ClienteController@destroy');
    Route::get('/vista_inserta', 'ClienteController@create');
    Route::get('/vista_actualiza/{id}', 'ClienteController@edit');
    Route::get('/vista_borra/{id}', 'ClienteController@delete');
});