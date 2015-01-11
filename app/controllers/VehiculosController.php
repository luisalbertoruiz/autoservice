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
		$vehiculos = Vehiculo::all();
		return View::make('vehiculo.index')
		->with('vehiculos',$vehiculos);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /vehiculos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$maxModelo = Config::get('opciones.modelo');
		$colores = Color::all();
		$marcas = Marca::all();
		$clientes = Cliente::all();
		return View::make('vehiculo.create')
		->with('colores',$colores)
		->with('marcas',$marcas)
		->with('maxModelo',$maxModelo)
		->with('clientes',$clientes);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /vehiculos
	 *
	 * @return Response
	 */
	public function store()
	{
		$entradas = array(
			'placas' => Str::upper(Input::get('placas')),
			'placas' => Str::upper(Input::get('serie'))
			);
		$reglas = array(
            'placas' => 'required|unique:vehiculos',
            'serie' => 'unique:vehiculos'
        );
        $validador = Validator::make(Input::all(), $reglas);
		if($validador->fails())
		{
			return Redirect::to('/vehiculo')
			->with('alert-danger', 'Ya se encuentra registrado un vehiculo con estas placas o No. de serie.');
		}
		else
		{
			$vehiculo = new Vehiculo();
			$vehiculo->cliente_id = Input::get('cliente_id');
			$vehiculo->placas     = Str::upper(Input::get('placas'));
			$vehiculo->marca_id   = Input::get('marca_id');
			$vehiculo->smarca_id  = Input::get('smarca_id');
			$vehiculo->modelo     = Input::get('modelo');
			$vehiculo->color_id   = Input::get('color_id');
			$vehiculo->serie      = Str::upper(Input::get('serie'));
			$vehiculo->nota       = Input::get('nota');
			$vehiculo->save();
			return Redirect::to('/vehiculo')
			->with('alert-success', 'Se ha agregado el vehiculo.');
		}
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
		if (is_null ($vehiculo))
		{
			App::abort(404);
		}
		else
		{
			return View::make('vehiculo.show')
			->with('vehiculo',$vehiculo);
		}
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
		if (is_null ($vehiculo))
		{
			App::abort(404);
		}
		else
		{
			$colores = Color::all();
			$marcas = Marca::all();
			$clientes = Cliente::all();
			return View::make('vehiculo.edit')
			->with('colores',$colores)
			->with('vehiculo',$vehiculo)
			->with('marcas',$marcas)
			->with('clientes',$clientes);
		}
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
		$vehiculo = Vehiculo::find($id);
		if (is_null ($vehiculo))
		{
			App::abort(404);
		}
		else
		{
			$vehiculo->cliente_id = Input::get('cliente_id');
			$vehiculo->placas     = Str::upper(Input::get('placas'));
			$vehiculo->marca_id   = Input::get('marca_id');
			$vehiculo->smarca_id  = Input::get('smarca_id');
			$vehiculo->modelo     = Input::get('modelo');
			$vehiculo->color_id   = Input::get('color_id');
			$vehiculo->serie      = Str::upper(Input::get('serie'));
			$vehiculo->nota       = Input::get('nota');
			$vehiculo->save();
			return Redirect::to('/vehiculo/mostrar/'.$vehiculo->id)
			->with('alert-success', 'Se ha editado el vehiculo.');
		}
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
		if (is_null ($vehiculo))
		{
			App::abort(404);
		}
		else
		{
			$vehiculo->delete();
			return Redirect::to('/vehiculo')
			->with('alert-danger', 'Se ha eliminado el vehiculo.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /vehiculos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function dropdown($id)
	{
		$smarcas = Marca::find($id)->smarcas;
		return $smarcas->lists('nombre','id');
	}
}