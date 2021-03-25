<?php

use App\Models\Productos;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('notas', 'App\Http\Controllers\ProductosController@index')->name('productos.index');

Route::get('agregar', 'App\Http\Controllers\ProductosController@agregar')->name('productos.agregar');

Route::post('crear', 'App\Http\Controllers\ProductosController@crear')->name('productos.crear');

Route::get('notas/{id}/editar', 'App\Http\Controllers\ProductosController@editar')->name('productos.edit');

Route::put('notas/{productos}/editar', 'App\Http\Controllers\ProductosController@update')->name('productos.update');

Route::delete('notas/{id}', 'App\Http\Controllers\ProductosController@destroy')->name('productos.destroy');
