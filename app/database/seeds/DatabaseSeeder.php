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
		DB::table('catalogos')->insert(
			array(
				array(
					'nombre'      => 'Marcas',
					'descripcion' => 'Nombre de la marca del vehiculo'
				),
				array(
					'nombre'      => 'Colores',
					'descripcion' => 'Colores de los vehiculos'
				)
				array(
					'nombre'      => 'Servicios',
					'descripcion' => 'Servicios realizables'
				)
			)
		);
		DB::table('servicios')->insert(
			array(
				array(
					'nombre'      => 'Motor',
					'catalogo_id' => '3'
				),
				array(
					'nombre'      => 'Frenos',
					'catalogo_id' => '3'
				),
				array(
					'nombre'      => 'Sistema eléctrico',
					'catalogo_id' => '3'
				),
				array(
					'nombre'      => 'Suspención',
					'catalogo_id' => '3'
				),
				array(
					'nombre'      => 'Transmisión',
					'catalogo_id' => '3'
				),
				array(
					'nombre'      => 'Dirección',
					'catalogo_id' => '3'
				),
				array(
					'nombre'      => 'Afinación',
					'catalogo_id' => '3'
				),
				array(
					'nombre'      => 'Diagnóstico',
					'catalogo_id' => '3'
				)
				
			)
		);
		DB::table('colores')->insert(
			array(
				array(
					'nombre'      => 'Rojo',
					'catalogo_id' => '2'
				),
				array(
					'nombre'      => 'Negro',
					'catalogo_id' => '2'
				),
				array(
					'nombre'      => 'Blanco',
					'catalogo_id' => '2'
				),
				array(
					'nombre'      => 'Azul',
					'catalogo_id' => '2'
				),
				array(
					'nombre'      => 'Verde',
					'catalogo_id' => '2'
				),
				array(
					'nombre'      => 'Amarillo',
					'catalogo_id' => '2'
				),
				array(
					'nombre'      => 'Gris',
					'catalogo_id' => '2'
				),
				array(
					'nombre'      => 'Plata',
					'catalogo_id' => '2'
				)
				
			)
		);
		DB::table('marcas')->insert(
			array(
				array(
					'nombre' => 'Audi',
					'catalogo_id' => '1'
					),
				array('nombre' => 'BMW',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Chevrolet',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Chrysler',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Dodge',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Fiat',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Ford',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Honda',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Hyundai',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Jeep',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Mazda',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Mercedes Benz',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Mitsubishi',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Nissan',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Opel',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Peugeot',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Pontiac',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Renault',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Seat',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Subaru',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Suzuki',
					'catalogo_id' => '1'
					),
				array('nombre' => 'Toyota',
					'catalogo_id' => '1'
					),
				array('nombre' => 'VW',
					'catalogo_id' => '1'
					)  
			)
		);
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

		DB::table('vehiculos')->insert(
			array(
				array(
					'cliente_id' => '1001',
					'placas'     => 'MET1245',
					'marca_id'   => '14',
					'smarca_id'  => '2',
					'modelo'     => '2011',
					'color_id'   => '1',
					'serie'      => 'QWERTYUIOP45698LK',
					'nota'       => ''
				),
				array(
					'cliente_id' => '1002',
					'placas'     => '235SAT',
					'marca_id'   => '14',
					'smarca_id'  => '1',
					'modelo'     => '2014',
					'color_id'   => '2',
					'serie'      => 'LKINHGVFRE45698LK',
					'nota'       => ''
				),
				array(
					'cliente_id' => '1002',
					'placas'     => 'RAL5689',
					'marca_id'   => '14',
					'smarca_id'  => '3',
					'modelo'     => '4',
					'color_id'   => '3',
					'serie'      => 'K5OINBFTLA45698LK',
					'nota'       => ''
				),
				array(
					'cliente_id' => '1003',
					'placas'     => 'GHJ7856',
					'marca_id'   => '14',
					'smarca_id'  => '5',
					'modelo'     => '2010',
					'color_id'   => '4',
					'serie'      => 'KLASBEYHDB45698LK',
					'nota'       => ''
				),
				array(
					'cliente_id' => '1004',
					'placas'     => 'IOP2345',
					'marca_id'   => '23',
					'smarca_id'  => '1',
					'modelo'     => '2004',
					'color_id'   => '5',
					'serie'      => 'PKNGTRESAD45698LK',
					'nota'       => ''
				),
				array(
					'cliente_id' => '1005',
					'placas'     => '789RTY',
					'marca_id'   => '23',
					'smarca_id'  => '3',
					'modelo'     => '2011',
					'color_id'   => '6',
					'serie'      => 'ZXCVBNMJHG45698LK',
					'nota'       => ''
				)
			)
		);
	}

}
