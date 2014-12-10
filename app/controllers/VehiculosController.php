<?php

class VehiculosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /vehiculos
	 *
	 * @return Response
	 */
	public function index()
	{
		$vehiculos = DB::table('vehiculos')->orderBy('placas')->paginate(5);
		return View::make('vehiculo.index')->with('vehiculos',$vehiculos);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /vehiculos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('vehiculo.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /vehiculos
	 *
	 * @return Response
	 */
	public function store()
	{
		$vehiculo = new Vehiculo();
		$vehiculo->id_cliente = Input::get('id_cliente');
		$vehiculo->placas     = Input::get('placas');
		$vehiculo->marca      = Input::get('marca');
		$vehiculo->smarca     = Input::get('smarca');
		$vehiculo->modelo     = Input::get('modelo');
		$vehiculo->color      = Input::get('color');
		$vehiculo->serie      = Str::upper(Input::get('serie'));
		$vehiculo->nota       = Input::get('nota');
		$vehiculo->save();
		return Redirect::to('admin/vehiculo')
		->with('flash_success', 'Se ha agregado correctamente el vehiculo.');
	}

	/**
	 * Display the specified resource.
	 * GET /vehiculos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$vehiculo = Vehiculo::find($id);
		return View::make('vehiculo.show')->with('vehiculo',$vehiculo);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /vehiculos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vehiculo = Vehiculo::find($id);
		return View::make('vehiculo.edit')->with('vehiculo',$vehiculo);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /vehiculos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$vehiculo   = Vehiculo::find($id);
		$vehiculo->id_cliente = Input::get('id_cliente');
		$vehiculo->placas     = Input::get('placas');
		$vehiculo->numero     = Input::get('numero');
		$vehiculo->marca      = Input::get('marca');
		$vehiculo->smarca     = Input::get('smarca');
		$vehiculo->color      = Input::get('color');
		$vehiculo->serie      = Input::get('serie');
		$vehiculo->nota       = Input::get('nota');
		$vehiculo->save();
		return Redirect::to('admin/vehiculo')
		->with('flash_warning', 'Se ha editado correctamente el vehiculo.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /vehiculos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$vehiculo = Vehiculo::find($id);
		$vehiculo->delete();
		return Redirect::to('admin/vehiculo')
		->with('flash_danger', 'Se ha eliminado correctamente el vehiculo.');
	}

}