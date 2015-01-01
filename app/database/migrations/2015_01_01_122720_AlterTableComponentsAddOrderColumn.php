<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableComponentsAddOrderColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('components', function(Blueprint $table)
		{
			$table->tinyInteger('order')->default(0)->after('status');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('components', function(Blueprint $table)
		{
			$table->dropColumn('order');
		});
	}

}
