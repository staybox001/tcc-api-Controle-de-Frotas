<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbastecimentosHasVeiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('abastecimentos_has_veiculos', function(Blueprint $table)
		{
			$table->integer('abastecimentos_id')->unsigned()->index('fk_abastecimentos_has_veiculos_abastecimentos1_idx');
			$table->integer('veiculos_id')->unsigned()->index('fk_abastecimentos_has_veiculos_veiculos1_idx');
			$table->primary(['abastecimentos_id','veiculos_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('abastecimentos_has_veiculos');
	}

}
