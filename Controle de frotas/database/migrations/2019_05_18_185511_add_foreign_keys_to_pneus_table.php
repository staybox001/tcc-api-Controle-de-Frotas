<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPneusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pneus', function(Blueprint $table)
		{
			$table->foreign('veiculo_id', 'fk_pneu_veiculo1')->references('id')->on('veiculos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pneus', function(Blueprint $table)
		{
			$table->dropForeign('fk_pneu_veiculo1');
		});
	}

}
