<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAbastecimentosHasVeiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('abastecimentos_has_veiculos', function(Blueprint $table)
		{
			$table->foreign('abastecimentos_id', 'fk_abastecimentos_has_veiculos_abastecimentos1')->references('id')->on('postos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('veiculos_id', 'fk_abastecimentos_has_veiculos_veiculos1')->references('id')->on('veiculos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('abastecimentos_has_veiculos', function(Blueprint $table)
		{
			$table->dropForeign('fk_abastecimentos_has_veiculos_abastecimentos1');
			$table->dropForeign('fk_abastecimentos_has_veiculos_veiculos1');
		});
	}

}
