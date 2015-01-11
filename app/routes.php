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

App::missing(function($exeption){
return Response::view('error.error404');
});
App::after(function($request, $response)
{
$response->headers->set('Cache-Control','nocache, no-store, max-age=0, must-revalidate');
$response->headers->set('Pragma','no-cache');
$response->headers->set('Expires','Fri, 01 Jan 1990 00:00:00 GMT');
});
// Home
Route::get ('/', 'HomeController@index');
Route::get ('/contacto', 'HomeController@contacto');
Route::get ('/servicioss', 'HomeController@servicios');
Route::get ('/nosotros', 'HomeController@nosotros');
Route::get ('/login', 'UsersController@login');
Route::post('/loged', 'UsersController@loged');
Route::get ('/logout', 'UsersController@logout');
// Rol Administrador
Route::group(array('before' => 'Sentry|inGroup:admin'), function(){
// Clientes
Route::get  ('/clientes/crear','ClientesController@create');
Route::post ('/clientes/guardar','ClientesController@store');
Route::get  ('/clientes/editar/{id}','ClientesController@edit');
Route::post ('/clientes/actualizar/{id}','ClientesController@update');
Route::get  ('/clientes/eliminar/{id}','ClientesController@destroy');
// Proveedores
Route::get  ('/proveedores','ProveedoresController@index');
Route::get  ('/proveedores/crear','ProveedoresController@create');
Route::post ('/proveedores/guardar','ProveedoresController@store');
Route::get  ('/proveedores/mostrar/{id}','ProveedoresController@show');
Route::get  ('/proveedores/editar/{id}','ProveedoresController@edit');
Route::post ('/proveedores/actualizar/{id}','ProveedoresController@update');
Route::get  ('/proveedores/eliminar/{id}','ProveedoresController@destroy');
// Vehiculos
Route::get  ('/vehiculos','VehiculosController@index');
Route::get  ('/vehiculos/crear','VehiculosController@create');
Route::post ('/vehiculos/guardar','VehiculosController@store');
Route::get  ('/vehiculos/mostrar/{id}','VehiculosController@show');
Route::get  ('/vehiculos/editar/{id}','VehiculosController@edit');
Route::post ('/vehiculos/actualizar/{id}','VehiculosController@update');
Route::get  ('/vehiculos/eliminar/{id}','VehiculosController@destroy');
Route::get  ('/vehiculos/dropdown/{id}', 'VehiculosController@dropdown');
// Users
Route::get  ('/usuarios','UsersController@index');
Route::get  ('/usuarios/crear','UsersController@create');
Route::post ('/usuarios/guardar','UsersController@store');
Route::get  ('/usuarios/mostrar/{id}','UsersController@show');
Route::get  ('/usuarios/editar/{id}','UsersController@edit');
Route::post ('/usuarios/actualizar/{id}','UsersController@update');
Route::get  ('/usuarios/eliminar/{id}','UsersController@destroy');
// Servicios
Route::get  ('/servicios','ServiciosController@index');
Route::get  ('/servicios/crear','ServiciosController@create');
Route::post ('/servicios/guardar','ServiciosController@store');
Route::get  ('/servicios/mostrar/{id}','ServiciosController@show');
Route::get  ('/servicios/editar/{id}','ServiciosController@edit');
Route::post ('/servicios/actualizar/{id}','ServiciosController@update');
Route::get  ('/servicios/eliminar/{id}','ServiciosController@destroy');
// Sub Sservicios
Route::get  ('/sservicios','SserviciosController@index');
Route::get  ('/sservicios/crear','SserviciosController@create');
Route::post ('/sservicios/guardar','SserviciosController@store');
Route::get  ('/sservicios/mostrar/{id}','SserviciosController@show');
Route::get  ('/sservicios/editar/{id}','SserviciosController@edit');
Route::post ('/sservicios/actualizar/{id}','SserviciosController@update');
Route::get  ('/sservicios/eliminar/{id}','SserviciosController@destroy');
// Colores
Route::get  ('/colores','ColoresController@index');
Route::get  ('/colores/crear','ColoresController@create');
Route::post ('/colores/guardar','ColoresController@store');
Route::get  ('/colores/mostrar/{id}','ColoresController@show');
Route::get  ('/colores/editar/{id}','ColoresController@edit');
Route::post ('/colores/actualizar/{id}','ColoresController@update');
Route::get  ('/colores/eliminar/{id}','ColoresController@destroy');
// Marcas
Route::get  ('/marcas','MarcasController@index');
Route::get  ('/marcas/crear','MarcasController@create');
Route::post ('/marcas/guardar','MarcasController@store');
Route::get  ('/marcas/mostrar/{id}','MarcasController@show');
Route::get  ('/marcas/editar/{id}','MarcasController@edit');
Route::post ('/marcas/actualizar/{id}','MarcasController@update');
Route::get  ('/marcas/eliminar/{id}','MarcasController@destroy');
// Sub marcas
Route::get  ('/smarcas','SmarcasController@index');
Route::get  ('/smarcas/crear','SmarcasController@create');
Route::post ('/smarcas/guardar','SmarcasController@store');
Route::get  ('/smarcas/mostrar/{id}','SmarcasController@show');
Route::get  ('/smarcas/editar/{id}','SmarcasController@edit');
Route::post ('/smarcas/actualizar/{id}','SmarcasController@update');
Route::get  ('/smarcas/eliminar/{id}','SmarcasController@destroy');
// Presupuestos
Route::get  ('/presupuestos','PresupuestosController@index');
Route::get  ('/presupuestos/crear','PresupuestosController@create');
Route::post ('/presupuestos/guardar','PresupuestosController@store');
Route::get  ('/presupuestos/mostrar/{id}','PresupuestosController@show');
Route::get  ('/presupuestos/editar/{id}','PresupuestosController@edit');
Route::post ('/presupuestos/actualizar/{id}','PresupuestosController@update');
Route::get  ('/presupuestos/eliminar/{id}','PresupuestosController@destroy');
Route::get  ('/presupuestos/dropdown/{id}', 'PresupuestosController@dropdown');
});
// Rol Usuarios
Route::group(array('before' => 'Sentry|inGroup:users'), function(){
Route::get  ('/admin','HomeController@admin');
// Clientes
Route::get  ('/clientes','ClientesController@index');
Route::get  ('/clientes/mostrar/{id}','ClientesController@show');
});

/*Route::get('sentry', function()
{
	$groupA = Sentry::createGroup([
		'name'        => 'administrador',
		'permissions' =>[
		'admin'       => 1,
		'users'       => 1,
		],
		]);
	$groupU = Sentry::createGroup([
		'name'        => 'usuarios',
		'permissions' =>[
		'admin'       => 0,
		'users'       => 1,
		],
		]);
	$admin = Sentry::createUser([
		'email'      => 'admin@sga.com',
		'username'   => 'admin',
		'password'   => 'admin',
		'first_name' => 'Administrador',
		'last_name'  => 'General',
		'activated'  => 1,
		]);
	$user = Sentry::createUser([
		'email'      => 'user@sga.com',
		'username'   => 'user',
		'password'   => 'user',
		'first_name' => 'Usuario',
		'last_name'  => 'Estandar',
		'activated'  => 1,
		]);
	$admin->addGroup($groupA);
	$user->addGroup($groupU);
	
	return 'todo se genero correctamente';
});*/

/*
Route::get('indexAdd', function()
{
	Search::insert(3, array(
    'title' => 'My title',
    'content' => 'peluchin',
    'status' => 'published',
	));
	return 'create index con id ';
});

Route::get('search', function()
{
	$results = Search::search('content', 'peluch', array('fuzzy'=>true))->get();
	return $results;
});*/