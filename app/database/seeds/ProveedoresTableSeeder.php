<?php

class ProveedoresTableSeeder extends Seeder {

	public function run()
	{
		DB::table('proveedores')->insert(
			array(
				array(
					'nombre'    => 'Rafacciones America SA de CV',
					'direccion' => 'Siempre Viva 89',
					'telefono'  => '58235689',
					'celular'   => '5569874123',
					'radio'     => '44663232',
					'email'     => 'mariano89@gmail.com',
					'pagina'    => 'http://www.refacciones.com.mx'
				),
				array(
					'nombre'    => 'Refacionaria California SA de CV',
					'direccion' => 'Siempre Viva 89',
					'telefono'  => '58235689',
					'celular'   => '5569874123',
					'radio'     => '44663232',
					'email'     => 'mariano89@gmail.com',
					'pagina'    => 'http://www.refacciones.com.mx'
				),
				array(
					'nombre'    => 'Refaccionaria Patito',
					'direccion' => 'Siempre Viva 89',
					'telefono'  => '58235689',
					'celular'   => '5569874123',
					'radio'     => '44663232',
					'email'     => 'mariano89@gmail.com',
					'pagina'    => 'http://www.refacciones.com.mx'
				)
			)
		);
	}

}