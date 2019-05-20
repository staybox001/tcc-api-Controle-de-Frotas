<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLembretesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lembretes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('descricao', 45);
			$table->string('tipo', 45);
			$table->string('data_lembrete', 45);
			$table->integer('diario_iddiario')->unsigned()->index('fk_lembrete_diario1_idx');
			$table->primary(['id','diario_iddiario']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lembretes');
	}

}
