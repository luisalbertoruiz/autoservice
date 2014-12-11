<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehiculos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_cliente')->unsigned();
			$table->string('placas')->unique();
			$table->string('marca');
			$table->string('smarca');
			$table->string('modelo');
			$table->string('color');
			$table->string('serie')->unique();
			$table->string('nota');
			$table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vehiculos');
	}

}
