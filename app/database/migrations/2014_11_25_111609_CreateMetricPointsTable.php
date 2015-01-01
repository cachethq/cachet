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
            $table->integer('metric_id')->unsigned();
            $table->integer('value')->unsigned();
            $table->timestamps();

            $table->foreign('metric_id')->references('id')->on('metrics');
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
