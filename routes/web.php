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

Route::get('/ver-pdf', 'HomeController@pdf')->name('pdf.index');

Route::get('/', function () {
    return view('PDF');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Servicios Routes
Route::get('/agregar-servicio', 'ServicioController@index')->name('servicios.index');
