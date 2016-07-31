<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableComponentGroupsAddVisibleColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('component_groups', function (Blueprint $table) {
            $table->integer('visible')->after('order')->unsigned()->default(2);

            $table->index('visible');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('component_groups', function (Blueprint $table) {
            $table->dropColumn('visible');
        });
    }
}
