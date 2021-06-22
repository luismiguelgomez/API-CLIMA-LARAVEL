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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/mensajes', 'App\Http\Controllers\MensajesController@index')->name('mensajes');

Route::post('/crearMensaje','App\Http\Controllers\MensajesController@Create');

Route::get('/editarUsuarios','App\Http\Controllers\AdminUserController@updateAdmin')->name('editarUsuarios');

Route::post('/formEditarUsuario','App\Http\Controllers\AdminUserController@formAdmin');

Route::get('/crearCiudad', 'App\Http\Controllers\CountriesController@index')->name('paises');

//Crea pais
Route::post('/formCrearCiudad', 'App\Http\Controllers\CountriesController@crearPais');

//Listar paises
Route::get('/paises', 'App\Http\Controllers\CountriesController@indexClima')->name('listadoCiudades');

//Listar datos del pais escogido
Route::get('/pais/{cityId}', 'App\Http\Controllers\CountriesController@apiClima');