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

Route::get('/master', function () {
    return view('master');
});

Route::get('/', function(){
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
    Route::get('/vista_borra/{id}', 'CategoriaController@delete');
    Route::get('/servicio_index', 'CategoriaController@servicio_index');
});

Route::prefix('producto')->group(function () {
    Route::get('/index', 'ProductoController@index');
    Route::get('/detalle/{id}', 'ProductoController@show');
    Route::post('/inserta', 'ProductoController@store');
    Route::put('/actualiza/{id}', 'ProductoController@update');
    Route::delete('/borra/{id}', 'ProductoController@destroy');
    Route::get('/vista_inserta', 'ProductoController@create');
    Route::get('/vista_actualiza/{id}', 'ProductoController@edit');
    Route::get('/vista_borra/{id}', 'ProductoController@delete');
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
    Route::get('/servicio_index', 'ClienteController@servicio_index');
});

Route::prefix('proveedor')->group(function () {
    Route::get('/index', 'ProveedorController@index');
    Route::get('/detalle/{id}', 'ProveedorController@show');
    Route::post('/inserta', 'ProveedorController@store');
    Route::put('/actualiza/{id}', 'ProveedorController@update');
    Route::delete('/borra/{id}', 'ProveedorController@destroy');
    Route::get('/vista_inserta', 'ProveedorController@create');
    Route::get('/vista_actualiza/{id}', 'ProveedorController@edit');
    Route::get('/vista_borra/{id}', 'ProveedorController@delete');
});

Route::prefix('clientecupon')->group(function () {
    Route::get('/index', 'ClienteCuponController@index');
    Route::get('/detalle/{id}', 'ClienteCuponController@show');
    Route::post('/inserta', 'ClienteCuponController@store');
    Route::put('/actualiza/{id}', 'ClienteCuponController@update');
    Route::delete('/borra/{id}', 'ClienteCuponController@destroy');
    Route::get('/vista_inserta', 'ClienteCuponController@create');
    Route::get('/vista_actualiza/{id}', 'ClienteCuponController@edit');
    Route::get('/vista_borra/{id}', 'ClienteCuponController@delete');
});

Route::prefix('apiPractica3')->group(function () {
    Route::get('/cupon/{id}', 'ClienteCuponController@show');
    Route::post('/valcliente', 'ClienteController@val');
    Route::get('/perfil/{id}', 'ClienteController@perfil');
});