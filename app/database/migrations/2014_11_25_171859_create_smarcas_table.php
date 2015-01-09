<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmarcasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('smarcas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('marca_id')->unsigned();
			$table->string('nombre');
			$table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
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
		Schema::drop('smarcas');
	}

}
