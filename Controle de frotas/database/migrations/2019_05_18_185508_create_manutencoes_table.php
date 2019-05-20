<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManutencoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('manutencoes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('estabelecimento', 30);
			$table->string('servico', 100);
			$table->dateTime('data');
			$table->string('valor_manutencao', 45)->nullable();
			$table->integer('veiculo_id')->unsigned()->index('fk_manutencao_veiculo1_idx');
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
		Schema::drop('manutencoes');
	}

}
