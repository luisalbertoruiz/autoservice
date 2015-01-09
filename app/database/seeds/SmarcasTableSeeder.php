<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SmarcasTableSeeder extends Seeder {

	public function run()
	{
		DB::table('smarcas')->insert(
			array(
				array(
					'marca_id' => '14',
					'nombre'   => 'Tsuru'
				),
				array(
					'marca_id' => '14',
					'nombre'   => 'Sentra'
				),
				array(
					'marca_id' => '14',
					'nombre'   => 'Maxima'
				),
				array(
					'marca_id' => '14',
					'nombre'   => 'Altima'
				),
				array(
					'marca_id' => '14',
					'nombre'   => 'March'
				),
				array(
					'marca_id' => '14',
					'nombre'   => 'Versa'
				),
				array(
					'marca_id' => '23',
					'nombre'   => 'Golf'
				),
				array(
					'marca_id' => '23',
					'nombre'   => 'Jetta'
				),
				array(
					'marca_id' => '23',
					'nombre'   => 'Pointer'
				),
				array(
					'marca_id' => '23',
					'nombre'   => 'Gol'
				),
			)
		);
	}

}