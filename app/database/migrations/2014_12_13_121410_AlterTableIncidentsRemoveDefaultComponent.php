<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableIncidentsRemoveDefaultComponent extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('incidents', function(Blueprint $table)
		{
			DB::statement("ALTER TABLE `incidents` CHANGE `component_id` `component_id` TINYINT(4)  NOT NULL  DEFAULT '0';");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('incidents', function(Blueprint $table)
		{
			DB::statement("ALTER TABLE `incidents` CHANGE `component_id` `component_id` TINYINT(4)  NOT NULL  DEFAULT '1';");
		});
	}

}
