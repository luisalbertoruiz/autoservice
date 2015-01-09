<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProveedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('direccion');
			$table->string('telefono');
			$table->string('celular');
			$table->string('radio');
			$table->string('email');
			$table->string('pagina');
			$table->timestamps();
		});
		$statement = "ALTER TABLE proveedores AUTO_INCREMENT = 2001;";
        DB::unprepared($statement);
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proveedores');
	}

}
