<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AlterTableIncidentsRenameComponentColumn extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incidents', function (Blueprint $table) {
            DB::statement("ALTER TABLE `incidents` CHANGE `component` `component_id` TINYINT(4)  NOT NULL  DEFAULT '1'");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incidents', function (Blueprint $table) {
            DB::statement("ALTER TABLE `incidents` CHANGE `component_id` `component` TINYINT(4)  NOT NULL  DEFAULT '1'");
        });
    }
}
