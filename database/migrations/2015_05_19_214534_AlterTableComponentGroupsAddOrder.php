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

class AlterTableComponentGroupsAddOrder extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('component_groups', function (Blueprint $table) {
            $table->integer('order')->after('name')->default(0);
            $table->index('order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('component_groups', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
}
