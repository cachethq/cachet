<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableComponentsAddGroupIdColumn extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('components', function(Blueprint $table) {
			$table->integer('group_id')->nullable()->default(null)->after('order');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('components', function(Blueprint $table) {
			$table->dropColumn('group_id');
		});
	}
}
