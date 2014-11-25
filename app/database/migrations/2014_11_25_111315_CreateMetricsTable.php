<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetricsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('metrics', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable(false);
			$table->string('suffix')->nullable(false);
			$table->string('description')->nullable(false);
			$table->boolean('display_chart')->default(false);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('metrics');
	}

}
