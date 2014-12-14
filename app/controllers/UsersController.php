<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		if (=='')
		{
			
		}
		try
		{
		// Create the user
		$user = Sentry::createUser(array(
		    'email'       => 'john.doe@example.com',
		    'password'    => 'test',
		    'activated'   => true,
		    'permissions' => array(
		        'user.create' => -1,
		        'user.delete' => -1,
		        'user.view'   => 1,
		        'user.update' => 1,
		    ),
		));
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		    echo 'Login field is required.';
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
		    echo 'Password field is required.'
		}
		catch (Cartalyst\Sentry\Users\UserExistsException $e)
		{
		    echo 'User with this login already exists.';
		}
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function login()
	{
		Sentry::logout();
		return View::make('home.login');
	}

	public function loged()
	{
		$credenciales = [
			'username' => Input::get('username'),
            'password' => Input::get('password')];

        try
        {
        	$usuario = Sentry::authenticate($credenciales, false);
        	if ($user)
        	{
        		return Redirect::to('login')
        		->with('flash_notice', 'Bienvenido.');
        	}
        }
        catch (\Exception $e)
        {
        	return Redirect::to('admin/cliente')
        	->with('flash_error', 'Los datos son incorrectos.');
        }
	}

	public function logout()
	{
		Sentry::logout();
		return Redirect::route('login')
    	->with('flash_warning', 'Has cerrado correctamente tu sesión. Hasta luego.');	
	}

}