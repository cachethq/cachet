<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AlterIncidentsTableMoveUserIdColumn extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incidents', function (Blueprint $table) {
            DB::statement('ALTER TABLE `incidents` MODIFY COLUMN `user_id` INT(10) UNSIGNED DEFAULT NULL AFTER `component_id`;');
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

            DB::statement('ALTER TABLE `incidents` MODIFY COLUMN `user_id` INT(10) UNSIGNED DEFAULT NULL AFTER `deleted_at`;');
        });
    }
}
