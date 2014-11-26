<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('home.index');
	}

	public function contacto()
	{
		return View::make('home.contacto');
	}

	public function nosotros()
	{
		return View::make('home.nosotros');
	}

	public function servicio()
	{
		return View::make('home.servicio');
	}

	public function login()
	{
		return View::make('home.login');
	}

}
