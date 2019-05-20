<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLembretesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lembretes', function(Blueprint $table)
		{
			$table->foreign('diario_iddiario', 'fk_lembrete_diario1')->references('id')->on('diarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lembretes', function(Blueprint $table)
		{
			$table->dropForeign('fk_lembrete_diario1');
		});
	}

}
