<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('marcas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->integer('catalogo_id')->unsigned();
			$table->foreign('catalogo_id')->references('id')->on('catalogos');
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
		Schema::drop('marcas');
	}

}
