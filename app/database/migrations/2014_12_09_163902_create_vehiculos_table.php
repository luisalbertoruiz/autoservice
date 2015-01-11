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
			$table->integer('marca_id')->unsigned();
			$table->integer('smarca_id')->unsigned();
			$table->string('modelo');
			$table->integer('color_id')->unsigned();
			$table->string('serie')->nullable()->unique();
			$table->string('nota');
			$table->string('creado');
			$table->string('editado');
			$table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
			$table->foreign('marca_id')->references('id')->on('marcas');
			$table->foreign('smarca_id')->references('id')->on('smarcas');
			$table->foreign('color_id')->references('id')->on('colores');
			$table->softDeletes();
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
