<?php

class PresupuestosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /presupuestos
	 *
	 * @return Response
	 */
	public function index()
	{
		$presupuestos = Presupuesto::all();
		return View::make('presupuesto.index')
		->with('presupuestos',$presupuestos);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /presupuestos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$clientes = Cliente::all();
		return View::make('presupuesto.create')
		->with('clientes',$clientes);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /presupuestos
	 *
	 * @return Response
	 */
	public function store()
	{
        
		$presupuestos = new Presupuesto();
		$presupuestos->catalogo_id = 2;
		$presupuestos->nombre    = Str::title(Str::lower(Input::get('nombre')));
		$presupuestos->save();
		return Redirect::to('/presupuestos')
		->with('alert-success', 'Se ha agregado el presupuestos.');
		
	}

	/**
	 * Display the specified resource.
	 * GET /presupuestos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$presupuestos = Presupuesto::find($id);
		if (is_null ($presupuestos))
		{
			App::abort(404);
		}
		else
		{
			return View::make('presupuesto.show')
			->with('presupuestos',$presupuestos);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /presupuestos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$presupuestos = Presupuesto::find($id);
		if (is_null ($presupuestos))
		{
			App::abort(404);
		}
		else
		{
			return View::make('presupuesto.edit')
			->with('presupuestos',$presupuestos);
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /presupuestos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$presupuestos = Presupuesto::find($id);
		if (is_null ($presupuestos))
		{
			App::abort(404);
		}
		else
		{
			$presupuestos->nombre    = Str::title(Str::lower(Input::get('nombre')));
			$presupuestos->save();
			return Redirect::to('/presupuestos')
			->with('alert-success', 'Se ha editado el presupuestos.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /presupuestos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$presupuestos = Presupuesto::find($id);
		if (is_null ($presupuestos))
		{
			App::abort(404);
		}
		else
		{
			$presupuestos->delete();
			return Redirect::to('/presupuestos')
			->with('alert-danger', 'Se ha eliminado el presupuestos.');
		}
	}

	public function dropdown($id)
	{
		$vehiculos = Cliente::find($id)->vehiculos;
		return View::make('presupuesto.dropdown')
		->with('vehiculos', $vehiculos);
	}
}