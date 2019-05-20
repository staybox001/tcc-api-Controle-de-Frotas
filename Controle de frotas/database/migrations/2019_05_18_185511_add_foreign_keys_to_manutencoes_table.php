<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToManutencoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('manutencoes', function(Blueprint $table)
		{
			$table->foreign('veiculo_id', 'fk_manutencao_veiculo1')->references('id')->on('veiculos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('manutencoes', function(Blueprint $table)
		{
			$table->dropForeign('fk_manutencao_veiculo1');
		});
	}

}
