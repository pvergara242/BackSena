<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () {return view('auth.login');});

Route::get('dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
Route::get('ventas', 'VentasController@index')->name('ventas')->middleware('auth');
Route::get('inventario', 'InventarioController@index')->name('inventario')->middleware('auth');
Route::get('compras', 'ComprasController@index')->name('compras')->middleware('auth');

Route::group(['prefix' => 'clientes', 'middleware' =>  ['auth']], function() {
    Route::get('/', 'ClientController@index')->name('cliente'); 
    Route::get('/create', 'ClientController@create')->name('cliente.create');
    Route::get('/{cliente}', 'ClientController@show')->name('cliente.show');
    Route::post('/', 'ClientController@store')->name('cliente.store');
    Route::get('/{cliente}/edit', 'ClientController@edit')->name('cliente.edit');
    Route::patch('/{cliente}', 'ClientController@update')->name('cliente.update');
    Route::delete('/{cliente}', 'ClientController@destroy')->name('cliente.destroy');
});


Route::group(['prefix' => 'product', 'middleware' =>  ['auth']], function() {
    Route::get('/', 'ProductController@index')->name('productos'); 
    Route::get('/create', 'ProductController@create')->name('productos.create');
    Route::get('/{productos}', 'ProductController@show')->name('productos.show');
    Route::post('/', 'ProductController@store')->name('productos.store');
    Route::get('/{productos}/edit', 'ProductController@edit')->name('productos.edit');
    Route::patch('/{productos}', 'ProductController@update')->name('productos.update');
    Route::delete('/{productos}', 'ProductController@destroy')->name('productos.destroy');
});
