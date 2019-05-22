<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDiariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('diarios', function(Blueprint $table)
		{
			$table->foreign('motorista_id', 'fk_diario_motorista1')->references('id')->on('motoristas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('diarios', function(Blueprint $table)
		{
			$table->dropForeign('fk_diario_motorista1');
		});
	}

}
