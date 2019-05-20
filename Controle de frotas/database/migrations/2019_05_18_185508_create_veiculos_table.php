<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVeiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('veiculos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('marca', 30);
			$table->string('modelo', 30);
			$table->string('placa', 15);
			$table->string('ano', 5);
			$table->string('km_atual', 45)->nullable();
			$table->string('situacao', 45)->nullable();
			$table->string('img_veiculo')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('veiculos');
	}

}
