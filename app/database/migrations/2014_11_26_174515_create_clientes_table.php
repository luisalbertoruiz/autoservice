<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('rfc')->unique();
			$table->string('calle');
			$table->string('colonia');
			$table->string('localidad');
			$table->string('cp');
			$table->string('telefono');
			$table->string('celular');
			$table->string('radio');
			$table->string('email');
			$table->timestamps();
		});
		$statement = "ALTER TABLE clientes AUTO_INCREMENT = 1001;";
        DB::unprepared($statement);
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientes');
	}

}
