<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->insert(
			array(
				array(
					'email'    => 'Rafacciones America SA de CV',
					'username' => 'Siempre Viva 89',
					'password'  => '58235689',
					'activated'     => '44663232',
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