<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () {return view('auth.login');});

Route::get('dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
Route::get('ventas', 'VentasController@index')->name('ventas')->middleware('auth');

Route::get('compras', 'ComprasController@index')->name('compras')->middleware('auth');
Route::get('entregaProductos', 'EntregaProductsController@index')->name('entregaProductos')->middleware('auth');
Route::get('pedidoProductos', 'PedidoProductController@index')->name('pedidoProductos')->middleware('auth');

Route::group(['prefix' => 'clientes', 'middleware' =>  ['auth']], function() {
    Route::get('/', 'ClientController@index')->name('cliente'); 
    Route::get('/create', 'ClientController@create')->name('cliente.create');
    Route::get('/{cliente}', 'ClientController@show')->name('cliente.show');
    Route::post('/', 'ClientController@store')->name('cliente.store');
    Route::get('/{cliente}/edit', 'ClientController@edit')->name('cliente.edit');
    Route::patch('/{cliente}', 'ClientController@update')->name('cliente.update');
    Route::delete('/{cliente}', 'ClientController@destroy')->name('cliente.destroy');
});

Route::group(['prefix' => 'productos', 'middleware' =>  ['auth']], function() {
    Route::get('/', 'ProductController@index')->name('producto'); 
    Route::get('/create', 'ProductController@create')->name('productos.create');
    Route::get('/{productos}', 'ProductController@show')->name('productos.show');
    Route::post('/', 'ProductController@store')->name('productos.store');
    Route::get('/{productos}/edit', 'ProductController@edit')->name('productos.edit');
    Route::patch('/{productos}', 'ProductController@update')->name('productos.update');
    Route::delete('/{productos}', 'ProductController@destroy')->name('productos.destroy');
});

Route::group(['prefix' => 'compras', 'middleware' =>  ['auth']], function() {
    Route::get('/', 'ComprasController@index')->name('compra'); 
    Route::get('/create', 'ComprasController@create')->name('compra.create');
    Route::get('/{compras}', 'ComprasController@show')->name('compra.show');
    Route::post('/', 'ComprasController@store')->name('compra.store');
    Route::get('/{compras}/edit', 'ComprasController@edit')->name('compra.edit');
    Route::patch('/{compras}', 'ComprasController@update')->name('compra.update');
    Route::delete('/{compras}', 'ComprasController@destroy')->name('compra.destroy');
});

Route::group(['prefix' => 'entregaProductos', 'middleware' =>  ['auth']], function() {
    Route::get('/', 'EntregaProductsController@index')->name('entregaProducto'); 
    Route::get('/create', 'EntregaProductsController@create')->name('entregaProductos.create');
    Route::get('/{entregaProductos}', 'EntregaProductsController@show')->name('entregaProductos.show');
    Route::post('/', 'EntregaProductsController@store')->name('entregaProductos.store');
    Route::get('/{entregaProductos}/edit', 'EntregaProductsController@edit')->name('entregaProductos.edit');
    Route::patch('/{entregaProductos}', 'EntregaProductsController@update')->name('entregaProductos.update');
    Route::delete('/{entregaProductos}', 'EntregaProductsController@destroy')->name('entregaProductos.destroy');
});

Route::group(['prefix' => 'pedidoProductos', 'middleware' =>  ['auth']], function() {
    Route::get('/', 'PedidoProductController@index')->name('pedidoProducto'); 
    Route::get('/create', 'PedidoProductController@create')->name('pedidoProductos.create');
    Route::get('/{pedidoProductos}', 'PedidoProductController@show')->name('pedidoProductos.show');
    Route::post('/', 'PedidoProductController@store')->name('pedidoProductos.store');
    Route::get('/{pedidoProductos}/edit', 'PedidoProductController@edit')->name('pedidoProductos.edit');
    Route::patch('/{pedidoProductos}', 'PedidoProductController@update')->name('pedidoProductos.update');
    Route::delete('/{pedidoProductos}', 'PedidoProductController@destroy')->name('pedidoProductos.destroy');
});
