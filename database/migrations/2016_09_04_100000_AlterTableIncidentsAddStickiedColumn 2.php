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

class AlterTableIncidentsAddStickiedColumn extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('incidents', function (Blueprint $table) {
            $table->boolean('stickied')->after('visible')->default(false);

            $table->index('stickied');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('incidents', function (Blueprint $table) {
            $table->dropColumn('stickied');
        });
    }
}
