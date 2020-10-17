<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product', 'ProductController@index')->name('product');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
Route::get('ventas', 'VentasController@index')->name('ventas')->middleware('auth');
Route::get('clientes', 'ClientesController@index')->name('clientes')->middleware('auth');
Route::get('inventario', 'InventarioController@index')->name('inventario')->middleware('auth');
Route::get('compras', 'ComprasController@index')->name('compras')->middleware('auth');


Route::group(['prefix' => 'product', 'middleware' =>  ['auth']], function() {
    Route::get('/', 'ProductController@index')->name('productos'); 
    Route::get('/create', 'ProductController@create')->name('productos.create');
    Route::get('/{productos}', 'ProductController@show')->name('productos.show');
    Route::post('/', 'ProductController@store')->name('productos.store');
    Route::get('/{productos}/edit', 'ProductController@edit')->name('productos.edit');
    Route::patch('/{productos}', 'ProductController@update')->name('productos.update');
    Route::delete('/{productos}', 'ProductController@destroy')->name('productos.destroy');
});
