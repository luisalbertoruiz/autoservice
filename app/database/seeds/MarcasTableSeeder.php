<?php

class MarcasTableSeeder extends Seeder {

	public function run()
	{
		DB::table('marcas')->insert(
			array(
				array('nombre' => 'Audi'),
				array('nombre' => 'BMW'),
				array('nombre' => 'Chevrolet'),
				array('nombre' => 'Chrysler'),
				array('nombre' => 'Dodge'),
				array('nombre' => 'Fiat'),
				array('nombre' => 'Ford'),
				array('nombre' => 'Honda'),
				array('nombre' => 'Hyundai'),
				array('nombre' => 'Jeep'),
				array('nombre' => 'Mazda'),
				array('nombre' => 'Mercedes Benz'),
				array('nombre' => 'Mitsubishi'),
				array('nombre' => 'Nissan'),
				array('nombre' => 'Opel'),
				array('nombre' => 'Peugeot'),
				array('nombre' => 'Pontiac'),
				array('nombre' => 'Renault'),
				array('nombre' => 'Seat'),
				array('nombre' => 'Subaru'),
				array('nombre' => 'Suzuki'),
				array('nombre' => 'Toyota'),
				array('nombre' => 'VW')  
			)
		);
	}

}