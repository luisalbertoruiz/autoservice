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
Route::get  ('/admin/cliente/buscar/{val}','ClientesController@find');
// Vehiculos
Route::get  ('/admin/vehiculo','VehiculosController@index');
Route::get  ('/admin/vehiculo/crear','VehiculosController@create');
Route::post ('/admin/vehiculo/guardar','VehiculosController@store');
Route::get  ('/admin/vehiculo/mostrar/{id}','VehiculosController@show');
Route::get  ('/admin/vehiculo/editar/{id}','VehiculosController@edit');
Route::post ('/admin/vehiculo/actualizar/{id}','VehiculosController@update');
Route::get  ('/admin/vehiculo/eliminar/{id}','VehiculosController@destroy');
// Users
Route::get  ('/admin/usuario','UsersController@index');
Route::get  ('/admin/usuario/crear','UsersController@create');
Route::post ('/admin/usuario/guardar','UsersController@store');
Route::get  ('/admin/usuario/mostrar/{id}','UsersController@show');
Route::get  ('/admin/usuario/editar/{id}','UsersController@edit');
Route::post ('/admin/usuario/actualizar/{id}','UsersController@update');
Route::get  ('/admin/usuario/eliminar/{id}','UsersController@destroy');