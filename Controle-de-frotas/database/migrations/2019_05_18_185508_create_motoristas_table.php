<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMotoristasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('motoristas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome', 45);
			$table->string('cpf', 20);
			$table->string('telefone', 20);
			$table->string('cidade', 45);
			$table->string('endereco', 45);
			$table->integer('veiculo_id')->unsigned()->index('fk_motorista_veiculo1_idx');
			$table->string('img_motorista')->nullable();
			$table->string('historico_infracoes', 500)->nullable();
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
		Schema::drop('motoristas');
	}

}
