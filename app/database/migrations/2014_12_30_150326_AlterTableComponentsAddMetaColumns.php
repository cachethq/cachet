<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableComponentsAddMetaColumns extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('components', function(Blueprint $table)
		{
			$table->text('tags')->nullable()->default(null)->after('description');
			$table->text('link')->nullable()->default(null)->after('description');
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
			$table->dropColumn('tags');
			$table->dropColumn('link');
		});
	}

}
