<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePneusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pneus', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('marca', 45);
			$table->string('modelo', 45);
			$table->string('fornecedor', 45);
			$table->string('km_montagem_pneu', 45);
			$table->string('km_vida_util', 45)->nullable();
			$table->integer('veiculo_id')->unsigned()->index('fk_pneu_veiculo1_idx');
			$table->primary(['id','veiculo_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pneus');
	}

}
