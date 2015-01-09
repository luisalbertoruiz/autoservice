<?php

class VehiculosTableSeeder extends Seeder {

	public function run()
	{
		DB::table('vehiculos')->insert(
			array(
				array(
					'id_cliente' => '1001',
					'placas'     => 'MET1245',
					'marca_id'   => '14',
					'smarca_id'  => '1',
					'modelo'     => '2011',
					'color'      => 'Rojo',
					'serie'      => 'QWERTYUIOP45698LK',
					'nota'       => ''
				),
				array(
					'id_cliente' => '1002',
					'placas'     => '235SAT',
					'marca_id'   => '14',
					'smarca_id'  => '2',
					'modelo'     => '2014',
					'color'      => 'Amarillo',
					'serie'      => 'LKINHGVFRE45698LK',
					'nota'       => ''
				),
				array(
					'id_cliente' => '1002',
					'placas'     => 'RAL5689',
					'marca_id'   => '14',
					'smarca_id'  => '3',
					'modelo'     => '2001',
					'color'      => 'Gris',
					'serie'      => 'K5OINBFTLA45698LK',
					'nota'       => ''
				),
				array(
					'id_cliente' => '1003',
					'placas'     => 'GHJ7856',
					'marca_id'   => '14',
					'smarca_id'  => '4',
					'modelo'     => '2010',
					'color'      => 'Negro',
					'serie'      => 'LKINHGVFRE45698LK',
					'nota'       => ''
				),
				array(
					'id_cliente' => '1004',
					'placas'     => 'IOP2345',
					'marca_id'   => '23',
					'smarca_id'  => '2',
					'modelo'     => '2004',
					'color'      => 'Plata',
					'serie'      => 'PKNGTRESAD45698LK',
					'nota'       => ''
				),
				array(
					'id_cliente' => '1005',
					'placas'     => '789RTY',
					'marca_id'   => '23',
					'smarca_id'  => '3',
					'modelo'     => '2011',
					'color'      => 'Amarillo',
					'serie'      => 'ZXCVBNMJHG45698LK',
					'nota'       => ''
				)
			)
		);
	}

}