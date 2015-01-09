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
Route::get ('/servicios', 'HomeController@servicio');
Route::get ('/nosotros', 'HomeController@nosotros');
Route::get ('/login', 'UsersController@login');
Route::post('/loged', 'UsersController@loged');
Route::get ('/logout', 'UsersController@logout');
// Administrador
Route::group(array('before' => 'Sentry|inGroup:admin'), function(){
// Clientes
Route::get  ('/cliente/crear','ClientesController@create');
Route::post ('/cliente/guardar','ClientesController@store');
Route::get  ('/cliente/editar/{id}','ClientesController@edit');
Route::post ('/cliente/actualizar/{id}','ClientesController@update');
Route::get  ('/cliente/eliminar/{id}','ClientesController@destroy');
// Proveedores
Route::get  ('/proveedor','ProveedoresController@index');
Route::get  ('/proveedor/crear','ProveedoresController@create');
Route::post ('/proveedor/guardar','ProveedoresController@store');
Route::get  ('/proveedor/mostrar/{id}','ProveedoresController@show');
Route::get  ('/proveedor/editar/{id}','ProveedoresController@edit');
Route::post ('/proveedor/actualizar/{id}','ProveedoresController@update');
Route::get  ('/proveedor/eliminar/{id}','ProveedoresController@destroy');
// Vehiculos
Route::get  ('/vehiculo','VehiculosController@index');
Route::get  ('/vehiculo/crear','VehiculosController@create');
Route::post ('/vehiculo/guardar','VehiculosController@store');
Route::get  ('/vehiculo/mostrar/{id}','VehiculosController@show');
Route::get  ('/vehiculo/editar/{id}','VehiculosController@edit');
Route::post ('/vehiculo/actualizar/{id}','VehiculosController@update');
Route::get  ('/vehiculo/eliminar/{id}','VehiculosController@destroy');
// Users
Route::get  ('/usuario','UsersController@index');
Route::get  ('/usuario/crear','UsersController@create');
Route::post ('/usuario/guardar','UsersController@store');
Route::get  ('/usuario/mostrar/{id}','UsersController@show');
Route::get  ('/usuario/editar/{id}','UsersController@edit');
Route::post ('/usuario/actualizar/{id}','UsersController@update');
Route::get  ('/usuario/eliminar/{id}','UsersController@destroy');
// Servicios
Route::get  ('/servicio','ServiciosController@index');
Route::get  ('/servicio/crear','ServiciosController@create');
Route::post ('/servicio/guardar','ServiciosController@store');
Route::get  ('/servicio/mostrar/{id}','ServiciosController@show');
Route::get  ('/servicio/editar/{id}','ServiciosController@edit');
Route::post ('/servicio/actualizar/{id}','ServiciosController@update');
Route::get  ('/servicio/eliminar/{id}','ServiciosController@destroy');

Route::get  ('/dropdown/{id}', 'VehiculosController@dropdown');
});
Route::group(array('before' => 'Sentry|inGroup:users'), function(){
Route::get  ('/admin','HomeController@admin');
// Clientes
Route::get  ('/cliente','ClientesController@index');
Route::get  ('/cliente/mostrar/{id}','ClientesController@show');
});

Route::get('sentry', function()
{
	$groupA = Sentry::createGroup([
		'name'        => 'administrador',
		'permissions' =>[
		'admin'       => 1,
		'users'       => 1,
		],
		]);
	$groupU = Sentry::createGroup([
		'name'        => 'usuario',
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
});

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