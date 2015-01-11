<?php

class SmarcasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /smarcas
	 *
	 * @return Response
	 */
	public function index()
	{
		$smarcas = Smarca::all();
		return View::make('smarca.index')
		->with('smarcas',$smarcas);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /smarcas/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$marcas = Marca::all();
		return View::make('smarca.create')
		->with('marcas',$marcas);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /smarcas
	 *
	 * @return Response
	 */
	public function store()
	{
        
		$smarca = new Smarca();
		$smarca->marca_id = Input::get('marca_id');
		$smarca->nombre    = Str::title(Str::lower(Input::get('nombre')));
		$smarca->save();
		return Redirect::to('/smarcas')
		->with('alert-success', 'Se ha agregado el smarca.');
		
	}

	/**
	 * Display the specified resource.
	 * GET /smarcas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$smarca = Smarca::find($id);
		if (is_null ($smarca))
		{
			App::abort(404);
		}
		else
		{
			return View::make('smarca.show')
			->with('smarca',$smarca);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /smarcas/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$smarca = Smarca::find($id);
		if (is_null ($smarca))
		{
			App::abort(404);
		}
		else
		{
			return View::make('smarca.edit')
			->with('smarca',$smarca);
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /smarcas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$smarca = Smarca::find($id);
		if (is_null ($smarca))
		{
			App::abort(404);
		}
		else
		{
			$smarca->nombre    = Str::title(Str::lower(Input::get('nombre')));
			$smarca->save();
			return Redirect::to('/smarcas')
			->with('alert-success', 'Se ha editado el smarca.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /smarcas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$smarca = Smarca::find($id);
		if (is_null ($smarca))
		{
			App::abort(404);
		}
		else
		{
			$smarca->delete();
			return Redirect::to('/smarcas')
			->with('alert-danger', 'Se ha eliminado el smarca.');
		}
	}
}