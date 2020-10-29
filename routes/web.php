<?php

use Illuminate\Support\Facades\Route;

Route::get('/resolver-pdf', function(){
	return view('PDF');
});

Route::get('/resolver-grafico', function(){
	return view('grafico');
});

Route::get('/ver-pdf', 'HomeController@pdf')->name('pdf.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datatables', 'HomeController@datatables');

Route::get('/pricing', function(){
	return view('pricing');
});

Route::get('/suscriptions', 'ServicioController@suscriptions');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Servicios Routes
Route::get('/agregar-servicio', 'ServicioController@index')->name('servicios.index');
