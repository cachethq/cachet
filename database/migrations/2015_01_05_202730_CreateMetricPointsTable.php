<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetricPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metric_points', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('metric_id');
            $table->decimal('value', 10, 3);
            $table->timestamps();

            $table->index('metric_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('metric_points');
    }
}
