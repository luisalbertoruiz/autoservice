<?php

class ProveedoresController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /proveedores
	 *
	 * @return Response
	 */
	public function index()
	{
		$proveedores = Proveedor::all();
		return View::make('proveedor.index')
		->with('proveedores',$proveedores);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /proveedores/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('proveedor.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /proveedores
	 *
	 * @return Response
	 */
	public function store()
	{
        
		$proveedor = new Proveedor();
		$proveedor->nombre    = Str::title(Str::lower(Input::get('nombre')));
		$proveedor->direccion = Str::title(Str::lower(Input::get('direccion')));
		$proveedor->telefono  = Input::get('telefono');
		$proveedor->celular   = Input::get('celular');
		$proveedor->radio     = Input::get('radio');
		$proveedor->email     = Input::get('email');
		$proveedor->pagina    = Input::get('pagina');
		$proveedor->save();
		return Redirect::to('/proveedor')
		->with('alert-success', 'Se ha agregado el proveedor.');
		
	}

	/**
	 * Display the specified resource.
	 * GET /proveedores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$proveedor = Proveedor::find($id);
		if (is_null ($proveedor))
		{
			App::abort(404);
		}
		else
		{
			return View::make('proveedor.show')
			->with('proveedor',$proveedor);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /proveedores/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$proveedor = Proveedor::find($id);
		if (is_null ($proveedor))
		{
			App::abort(404);
		}
		else
		{
			return View::make('proveedor.edit')
			->with('proveedor',$proveedor);
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /proveedores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$proveedor = Proveedor::find($id);
		if (is_null ($proveedor))
		{
			App::abort(404);
		}
		else
		{
			$proveedor->nombre    = Str::title(Str::lower(Input::get('nombre')));
			$proveedor->direccion = Str::title(Str::lower(Input::get('direccion')));
			$proveedor->telefono  = Input::get('telefono');
			$proveedor->celular   = Input::get('celular');
			$proveedor->radio     = Input::get('radio');
			$proveedor->email     = Input::get('email');
			$proveedor->pagina    = Input::get('pagina');
			$proveedor->save();
			return Redirect::to('/proveedor/mostrar/'.$proveedor->id)
			->with('alert-success', 'Se ha editado el proveedor.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /proveedores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$proveedor = Proveedor::find($id);
		if (is_null ($proveedor))
		{
			App::abort(404);
		}
		else
		{
			$proveedor->delete();
			return Redirect::to('/proveedor')
			->with('alert-danger', 'Se ha eliminado el proveedor.');
		}
	}
}