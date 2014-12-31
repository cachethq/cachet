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
        if (Config::get('database')['default'] === 'mysql') {
            DB::statement("ALTER TABLE settings CHANGE `value` `value` LONGTEXT;");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Config::get('database')['default'] === 'mysql') {
            DB::statement("ALTER TABLE settings CHANGE `value` `value` TEXT;");
        }
    }
}
