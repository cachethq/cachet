<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('component_id')->default(0);
            $table->string('name');
            $table->integer('status');
            $table->longText('message');
            $table->integer('user_id');
            $table->timestamps();
            $table->softDeletes();

            $table->index('component_id');
            $table->index('status');
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('incidents');
    }
}
