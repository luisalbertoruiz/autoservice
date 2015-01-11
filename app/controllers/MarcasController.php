<?php

class MarcasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /marcas
	 *
	 * @return Response
	 */
	public function index()
	{
		$marcas = Marca::all();
		return View::make('marca.index')
		->with('marcas',$marcas);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /marcas/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('marca.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /marcas
	 *
	 * @return Response
	 */
	public function store()
	{
        
		$marca = new Marca();
		$marca->catalogo_id = 1;
		$marca->nombre    = Str::title(Str::lower(Input::get('nombre')));
		$marca->save();
		return Redirect::to('/marcas')
		->with('alert-success', 'Se ha agregado la marca.');
		
	}

	/**
	 * Display the specified resource.
	 * GET /marcas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$marca = Marca::find($id);
		if (is_null ($marca))
		{
			App::abort(404);
		}
		else
		{
			return View::make('marca.show')
			->with('marca',$marca);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /marcas/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$marca = Marca::find($id);
		if (is_null ($marca))
		{
			App::abort(404);
		}
		else
		{
			return View::make('marca.edit')
			->with('marca',$marca);
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /marcas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$marca = Marca::find($id);
		if (is_null ($marca))
		{
			App::abort(404);
		}
		else
		{
			$marca->nombre    = Str::title(Str::lower(Input::get('nombre')));
			$marca->save();
			return Redirect::to('/marcas')
			->with('alert-success', 'Se ha editado la marca.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /marcas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$marca = Marca::find($id);
		if (is_null ($marca))
		{
			App::abort(404);
		}
		else
		{
			$marca->delete();
			return Redirect::to('/marcas')
			->with('alert-danger', 'Se ha eliminado la marca.');
		}
	}
}