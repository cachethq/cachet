<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimedActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timed_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('timed_action_group_id')->unsigned()->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->boolean('active')->default(false);
            $table->boolean('visible')->default(false);
            $table->timestamp('start_at');
            $table->string('timezone');
            $table->integer('window_length')->unsigned(); // In seconds
            $table->integer('completion_latency')->unsigned()->default(0); // In seconds
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('timed_actions');
    }
}
