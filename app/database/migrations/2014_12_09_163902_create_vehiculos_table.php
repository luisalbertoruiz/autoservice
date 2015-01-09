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
			$table->integer('cliente_id')->unsigned();
			$table->string('placas')->unique();
			$table->string('marca_id')->unsigned();
			$table->string('smarca_id')->unsigned();
			$table->string('modelo');
			$table->string('color');
			$table->string('serie')->unique();
			$table->string('nota');
			$table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
			$table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
			$table->foreign('smarca_id')->references('id')->on('smarcas')->onDelete('cascade');
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
