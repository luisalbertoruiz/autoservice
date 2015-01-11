<?php

class SserviciosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sservicios
	 *
	 * @return Response
	 */
	public function index()
	{
		$sservicios = Sservicio::all();
		return View::make('sservicio.index')
		->with('sservicios',$sservicios);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sservicios/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$servicios = Marca::all();
		return View::make('sservicio.create')
		->with('servicios',$servicios);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sservicios
	 *
	 * @return Response
	 */
	public function store()
	{
        
		$sservicio = new Sservicio();
		$sservicio->marca_id = Input::get('marca_id');
		$sservicio->nombre    = Str::title(Str::lower(Input::get('nombre')));
		$sservicio->save();
		return Redirect::to('/sservicios')
		->with('alert-success', 'Se ha agregado el sservicio.');
		
	}

	/**
	 * Display the specified resource.
	 * GET /sservicios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$sservicio = Sservicio::find($id);
		if (is_null ($sservicio))
		{
			App::abort(404);
		}
		else
		{
			return View::make('sservicio.show')
			->with('sservicio',$sservicio);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /sservicios/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sservicio = Sservicio::find($id);
		if (is_null ($sservicio))
		{
			App::abort(404);
		}
		else
		{
			return View::make('sservicio.edit')
			->with('sservicio',$sservicio);
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /sservicios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$sservicio = Sservicio::find($id);
		if (is_null ($sservicio))
		{
			App::abort(404);
		}
		else
		{
			$sservicio->nombre    = Str::title(Str::lower(Input::get('nombre')));
			$sservicio->save();
			return Redirect::to('/sservicios')
			->with('alert-success', 'Se ha editado el sservicio.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sservicios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$sservicio = Sservicio::find($id);
		if (is_null ($sservicio))
		{
			App::abort(404);
		}
		else
		{
			$sservicio->delete();
			return Redirect::to('/sservicios')
			->with('alert-danger', 'Se ha eliminado el sservicio.');
		}
	}
}