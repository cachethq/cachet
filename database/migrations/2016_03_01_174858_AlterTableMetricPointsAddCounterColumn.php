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

class AlterTableMetricPointsAddCounterColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('metrics', function (Blueprint $table) {
            $table->integer('threshold')->unsigned()->default(5)->after('default_view');
        });

        Schema::table('metric_points', function (Blueprint $table) {
            $table->integer('counter')->unsigned()->default(1)->after('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('metrics', function (Blueprint $table) {
            $table->dropColumn('threshold');
        });

        Schema::table('metric_points', function (Blueprint $table) {
            $table->dropColumn('counter');
        });
    }
}
