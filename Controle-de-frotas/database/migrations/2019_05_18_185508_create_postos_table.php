<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postos', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->unique('idabastecimento_UNIQUE');
			$table->string('nome_posto', 45);
			$table->integer('litros');
			$table->integer('km_abastecimento');
			$table->dateTime('data');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('postos');
	}

}
