<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
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
		DB::table('vehiculos')->insert(
			array(
				array(
					'cliente_id' => '1001',
					'placas'     => 'MET1245',
					'marca'      => 'Dodge',
					'smarca'     => 'Caliber',
					'modelo'     => '2011',
					'color'      => 'Rojo',
					'serie'      => 'QWERTYUIOP45698LK',
					'nota'       => ''
				),
				array(
					'cliente_id' => '1002',
					'placas'     => '235SAT',
					'marca'      => 'Chevrolet',
					'smarca'     => 'Camaro',
					'modelo'     => '2014',
					'color'      => 'Amarillo',
					'serie'      => 'LKINHGVFRE45698LK',
					'nota'       => ''
				),
				array(
					'cliente_id' => '1002',
					'placas'     => 'RAL5689',
					'marca'      => 'Fiat',
					'smarca'     => 'Palio',
					'modelo'     => '2001',
					'color'      => 'Gris',
					'serie'      => 'K5OINBFTLA45698LK',
					'nota'       => ''
				),
				array(
					'cliente_id' => '1003',
					'placas'     => 'GHJ7856',
					'marca'      => 'Ford',
					'smarca'     => 'Mustang',
					'modelo'     => '2010',
					'color'      => 'Negro',
					'serie'      => 'KLASBEYHDB45698LK',
					'nota'       => ''
				),
				array(
					'cliente_id' => '1004',
					'placas'     => 'IOP2345',
					'marca'      => 'Nissan',
					'smarca'     => 'Tsuru',
					'modelo'     => '2004',
					'color'      => 'Plata',
					'serie'      => 'PKNGTRESAD45698LK',
					'nota'       => ''
				),
				array(
					'cliente_id' => '1005',
					'placas'     => '789RTY',
					'marca'      => 'Toyota',
					'smarca'     => 'Cambry',
					'modelo'     => '2011',
					'color'      => 'Amarillo',
					'serie'      => 'ZXCVBNMJHG45698LK',
					'nota'       => ''
				)
			)
		);
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
		DB::table('smarcas')->insert(
			array(
				array(
					'marca_id' => '14'
					'nombre'   => 'Tsuru'
				),
				array(
					'marca_id' => '14'
					'nombre'   => 'Sentra'
				),
				array(
					'marca_id' => '14'
					'nombre'   => 'Maxima'
				),
				array(
					'marca_id' => '14'
					'nombre'   => 'Altima'
				),
				array(
					'marca_id' => '14'
					'nombre'   => 'March'
				),
				array(
					'marca_id' => '14'
					'nombre'   => 'Versa'
				),
				array(
					'marca_id' => '23'
					'nombre'   => 'Golf'
				),
				array(
					'marca_id' => '23'
					'nombre'   => 'Jetta'
				),
				array(
					'marca_id' => '23'
					'nombre'   => 'Pointer'
				),
				array(
					'marca_id' => '23'
					'nombre'   => 'Gol'
				),
			)
		);
	}

}
