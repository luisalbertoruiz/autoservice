<?php

class ClientesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /clientes
	 *
	 * @return Response
	 */
	public function index()
	{
		$clientes = Cliente::all();
		return View::make('cliente.index')
		->with('clientes',$clientes);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /clientes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cliente.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /clientes
	 *
	 * @return Response
	 */
	public function store()
	{
		$entradas = array(
			'rfc' => Str::upper(Input::get('rfc'))
			);
		$reglas = array(
            'rfc' => 'required|unique:clientes'
        );
        $validador = Validator::make(Input::all(), $reglas);
		if($validador->fails())
		{
			return Redirect::to('/cliente')
			->with('alert-danger', 'Ya se encuentra registrado un cliente con ese RFC.');
		}
		else
		{
			$cliente = new Cliente();
			$cliente->nombre    = Str::title(Str::lower(Input::get('nombre')));
			$cliente->rfc       = Str::upper(Input::get('rfc'));
			$cliente->calle     = Str::title(Str::lower(Input::get('calle')));
			$cliente->colonia   = Str::title(Str::lower(Input::get('colonia')));
			$cliente->localidad = Input::get('localidad');
			$cliente->cp        = Input::get('cp');
			$cliente->telefono  = Input::get('telefono');
			$cliente->celular   = Input::get('celular');
			$cliente->radio     = Input::get('radio');
			$cliente->email     = Input::get('email');
			$cliente->save();
			return Redirect::to('/cliente')
			->with('alert-success', 'Se ha agregado el cliente.');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /clientes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cliente = Cliente::find($id);
		if (is_null ($cliente))
		{
			App::abort(404);
		}
		else
		{
			return View::make('cliente.show')
			->with('cliente',$cliente);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /clientes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cliente = Cliente::find($id);
		if (is_null ($cliente))
		{
			App::abort(404);
		}
		else
		{
			return View::make('cliente.edit')
			->with('cliente',$cliente);
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /clientes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cliente = Cliente::find($id);
		if (is_null ($cliente))
		{
			App::abort(404);
		}
		else
		{
			$cliente->nombre    = Str::title(Str::lower(Input::get('nombre')));
			$cliente->rfc       = Str::upper(Input::get('rfc'));
			$cliente->calle     = Str::title(Str::lower(Input::get('calle')));
			$cliente->colonia   = Str::title(Str::lower(Input::get('colonia')));
			$cliente->localidad = Input::get('localidad');
			$cliente->cp        = Input::get('cp');
			$cliente->telefono  = Input::get('telefono');
			$cliente->celular   = Input::get('celular');
			$cliente->radio     = Input::get('radio');
			$cliente->email     = Input::get('email');
			$cliente->save();
			return Redirect::to('/cliente/mostrar/'.$cliente->id)
			->with('alert-success', 'Se ha editado el cliente.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /clientes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cliente = Cliente::find($id);
		if (is_null ($cliente))
		{
			App::abort(404);
		}
		else
		{
			$cliente->delete();
			return Redirect::to('/cliente')
			->with('alert-danger', 'Se ha eliminado el cliente.');
		}
	}
}