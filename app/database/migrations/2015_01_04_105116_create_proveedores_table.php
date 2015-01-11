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
			$table->string('nombre')->unique();
			$table->string('direccion')->nullable();
			$table->string('telefono')->nullable();
			$table->string('celular')->nullable();
			$table->string('radio')->nullable();
			$table->string('email')->nullable();
			$table->string('pagina')->nullable();
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
