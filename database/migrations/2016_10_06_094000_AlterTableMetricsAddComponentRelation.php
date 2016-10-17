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

class AlterTableMetricsAddComponentRelation extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('metrics', function (Blueprint $table) {
            $table->integer('component_id')->after('order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('metrics', function (Blueprint $table) {
            $table->dropColumn('component_id');
        });
    }
}
