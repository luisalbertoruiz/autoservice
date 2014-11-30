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
		$clientes = DB::table('clientes')->orderBy('nombre')->paginate(5);
		return View::make('cliente.index')->with('clientes',$clientes);
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
		$cliente = new Cliente();
		$cliente->nombre    = Str::title(Str::lower(Input::get('nombre')));
		$cliente->rfc       = Input::get('rfc');
		$cliente->calle     = Input::get('calle');
		$cliente->colonia   = Input::get('colonia');
		$cliente->localidad = Input::get('localidad');
		$cliente->cp        = Input::get('cp');
		$cliente->telefono  = Input::get('telefono');
		$cliente->celular   = Input::get('celular');
		$cliente->radio     = Input::get('radio');
		$cliente->email     = Input::get('email');
		$cliente->save();
		return Redirect::to('admin/cliente')
		->with('flash_warning', 'Se ha agregado correctamente el cliente.');
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
		return View::make('cliente.show')->with('cliente',$cliente);
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
		return View::make('cliente.edit')->with('cliente',$cliente);
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
		$cliente   = Cliente::find($id);
		$cliente->nombre    = Str::title(Str::lower(Input::get('nombre')));
		$cliente->apellido  = Str::title(Str::lower(Input::get('apellido')));
		$cliente->rfc       = Input::get('rfc');
		$cliente->calle     = Input::get('calle');
		$cliente->numero    = Input::get('numero');
		$cliente->colonia   = Input::get('colonia');
		$cliente->localidad = Input::get('localidad');
		$cliente->telefono  = Input::get('telefono');
		$cliente->celular   = Input::get('celular');
		$cliente->radio     = Input::get('radio');
		$cliente->email     = Input::get('email');
		$cliente->save();
		return Redirect::to('admin/cliente')
		->with('flash_warning', 'Se ha editado correctamente el cliente.');
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
		$cliente->delete();
		return Redirect::to('admin/cliente')
		->with('flash_warning', 'Se ha eliminado correctamente el cliente.');
	}

}