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
        } elseif (Config::get('database')['default'] === 'pgsql') {
            DB::statement("ALTER TABLE settings ALTER COLUMN value value TEXT;");
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
        } elseif (Config::get('database')['default'] === 'pgsql') {
            DB::statement("ALTER TABLE settings ALTER COLUMN value value TEXT;");
        }
    }
}
