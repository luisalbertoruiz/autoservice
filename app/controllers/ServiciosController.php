<?php

class ServiciosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /servicios
	 *
	 * @return Response
	 */
	public function index()
	{
		$servicios = Servicio::all();
		return View::make('servicio.index')
		->with('servicios',$servicios);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /servicios/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('servicio.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /servicios
	 *
	 * @return Response
	 */
	public function store()
	{
        
		$servicio = new Servicio();
		$servicio->catalogo_id = 3;
		$servicio->nombre    = Str::title(Str::lower(Input::get('nombre')));
		$servicio->save();
		return Redirect::to('/servicios')
		->with('alert-success', 'Se ha agregado la servicio.');
		
	}

	/**
	 * Display the specified resource.
	 * GET /servicios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$servicio = Servicio::find($id);
		if (is_null ($servicio))
		{
			App::abort(404);
		}
		else
		{
			return View::make('servicio.show')
			->with('servicio',$servicio);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /servicios/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$servicio = Servicio::find($id);
		if (is_null ($servicio))
		{
			App::abort(404);
		}
		else
		{
			return View::make('servicio.edit')
			->with('servicio',$servicio);
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /servicios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$servicio = Servicio::find($id);
		if (is_null ($servicio))
		{
			App::abort(404);
		}
		else
		{
			$servicio->nombre    = Str::title(Str::lower(Input::get('nombre')));
			$servicio->save();
			return Redirect::to('/servicios')
			->with('alert-success', 'Se ha editado la servicio.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /servicios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$servicio = Servicio::find($id);
		if (is_null ($servicio))
		{
			App::abort(404);
		}
		else
		{
			$servicio->delete();
			return Redirect::to('/servicios')
			->with('alert-danger', 'Se ha eliminado la servicio.');
		}
	}
}