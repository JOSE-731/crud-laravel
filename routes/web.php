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

Route::get('inicio', function(){
    return view('index')->name('inicio');
});

Route::get('agregar',function(){
  return view('agregar');
})->name('agregar');

Route::post('resgistro', 'crud@create')->name('registro');
Route::get('inventario', 'crud@store');

Route::get('editar{id}', 'crud@edit')->name('editar');
Route::put('editar{id}', 'crud@update')->name('Update');

Route::delete('eliminar{id}', 'crud@destroy')->name('eliminar');