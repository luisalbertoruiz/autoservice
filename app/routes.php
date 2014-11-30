<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get ('/', 'HomeController@index');
Route::get ('/contacto', 'HomeController@contacto');
Route::get ('/servicios', 'HomeController@servicio');
Route::get ('/nosotros', 'HomeController@nosotros');
Route::get ('/login', 'HomeController@login');
// Clientes
Route::get  ('/admin/cliente','ClientesController@index');
Route::get  ('/admin/cliente/crear','ClientesController@create');
Route::post ('/admin/cliente/guardar','ClientesController@store');
Route::get  ('/admin/cliente/mostrar/{id}','ClientesController@show');
Route::get  ('/admin/cliente/editar/{id}','ClientesController@edit');
Route::post ('/admin/cliente/actualizar/{id}','ClientesController@update');
Route::get  ('/admin/cliente/eliminar/{id}','ClientesController@destroy');
