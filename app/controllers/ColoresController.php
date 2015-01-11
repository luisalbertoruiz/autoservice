<?php

class ColoresController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /colores
	 *
	 * @return Response
	 */
	public function index()
	{
		$colores = Color::all();
		return View::make('color.index')
		->with('colores',$colores);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /colores/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('color.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /colores
	 *
	 * @return Response
	 */
	public function store()
	{
        
		$color = new Color();
		$color->catalogo_id = 2;
		$color->nombre    = Str::title(Str::lower(Input::get('nombre')));
		$color->save();
		return Redirect::to('/colores')
		->with('alert-success', 'Se ha agregado el color.');
		
	}

	/**
	 * Display the specified resource.
	 * GET /colores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$color = Color::find($id);
		if (is_null ($color))
		{
			App::abort(404);
		}
		else
		{
			return View::make('color.show')
			->with('color',$color);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /colores/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$color = Color::find($id);
		if (is_null ($color))
		{
			App::abort(404);
		}
		else
		{
			return View::make('color.edit')
			->with('color',$color);
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /colores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$color = Color::find($id);
		if (is_null ($color))
		{
			App::abort(404);
		}
		else
		{
			$color->nombre    = Str::title(Str::lower(Input::get('nombre')));
			$color->save();
			return Redirect::to('/colores')
			->with('alert-success', 'Se ha editado el color.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /colores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$color = Color::find($id);
		if (is_null ($color))
		{
			App::abort(404);
		}
		else
		{
			$color->delete();
			return Redirect::to('/colores')
			->with('alert-danger', 'Se ha eliminado el color.');
		}
	}
}