<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('km inicial');
			$table->integer('km final');
			$table->string('destino', 45);
			$table->dateTime('data');
			$table->integer('motorista_id')->unsigned();
			$table->integer('motorista_veiculo_id')->unsigned();
			$table->index(['motorista_id','motorista_veiculo_id'], 'fk_diario_motorista1_idx');
			$table->primary(['id','motorista_id','motorista_veiculo_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('diarios');
	}

}
