<?php

use Illuminate\Database\Migrations\Migration;

class AlterTableSettingsValueLongText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE settings CHANGE `value` `value` LONGTEXT;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE settings CHANGE `value` `value` TEXT;");
    }
}
