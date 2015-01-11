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
			$table->string('nombre')->unique();
			$table->string('rfc')->unique();
			$table->string('calle')->nullable();
			$table->string('colonia')->nullable();
			$table->string('localidad')->nullable();
			$table->string('cp')->nullable();
			$table->string('telefono')->nullable();
			$table->string('celular')->nullable();
			$table->string('radio')->nullable();
			$table->string('email')->nullable();
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
