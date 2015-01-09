<?php

class ClientesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('clientes')->insert(
			array(
				array(
					'nombre'    => 'Mariano Escobedo Aguilar',
					'rfc'       => 'ESAM650722NB8',
					'calle'     => 'Siempre Viva 89',
					'colonia'   => 'Xonacatlan',
					'localidad' => 'Gustavo A. Madero',
					'cp'        => '56328',
					'telefono'  => '58235689',
					'celular'   => '5569874123',
					'radio'     => '44663232',
					'email'     => 'mariano89@gmail.com'
				),
				array(
					'nombre'    => 'Fernando Montes de Oca',
					'rfc'       => 'MOOF450506KD5',
					'calle'     => 'Siempre Viva 89',
					'colonia'   => 'Xonacatlan',
					'localidad' => 'Gustavo A. Madero',
					'cp'        => '56328',
					'telefono'  => '58235689',
					'celular'   => '5569874123',
					'radio'     => '44663232',
					'email'     => 'mariano89@gmail.com'
				),
				array(
					'nombre'    => 'Juan Escutia',
					'rfc'       => 'ESJU830821LK1',
					'calle'     => 'Siempre Viva 89',
					'colonia'   => 'Xonacatlan',
					'localidad' => 'Gustavo A. Madero',
					'cp'        => '56328',
					'telefono'  => '58235689',
					'celular'   => '5569874123',
					'radio'     => '44663232',
					'email'     => 'mariano89@gmail.com'
				),
				array(
					'nombre'    => 'Juan de la Barrera',
					'rfc'       => 'BAJU650722NB8',
					'calle'     => 'Siempre Viva 89',
					'colonia'   => 'Xonacatlan',
					'localidad' => 'Gustavo A. Madero',
					'cp'        => '56328',
					'telefono'  => '58235689',
					'celular'   => '5569874123',
					'radio'     => '44663232',
					'email'     => 'mariano89@gmail.com'
				),
				array(
					'nombre'    => 'Francisco Márquez',
					'rfc'       => 'MAFA650722NB8',
					'calle'     => 'Siempre Viva 89',
					'colonia'   => 'Xonacatlan',
					'localidad' => 'Gustavo A. Madero',
					'cp'        => '56328',
					'telefono'  => '58235689',
					'celular'   => '5569874123',
					'radio'     => '44663232',
					'email'     => 'mariano89@gmail.com'
				),
				array(
					'nombre'    => 'Agustín Melgar',
					'rfc'       => 'MEAG650722NB8',
					'calle'     => 'Siempre Viva 89',
					'colonia'   => 'Xonacatlan',
					'localidad' => 'Gustavo A. Madero',
					'cp'        => '56328',
					'telefono'  => '58235689',
					'celular'   => '5569874123',
					'radio'     => '44663232',
					'email'     => 'mariano89@gmail.com'
				),
				array(
					'nombre'    => 'Vicente Suárez',
					'rfc'       => 'SUVI650722NB8',
					'calle'     => 'Siempre Viva 89',
					'colonia'   => 'Xonacatlan',
					'localidad' => 'Gustavo A. Madero',
					'cp'        => '56328',
					'telefono'  => '58235689',
					'celular'   => '5569874123',
					'radio'     => '44663232',
					'email'     => 'mariano89@gmail.com'
				)
			)
		);
	}
}