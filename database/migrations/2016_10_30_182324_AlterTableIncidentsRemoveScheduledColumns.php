<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Cachet\Integrations\Contracts\System;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use CachetHQ\Cachet\Models\Schedule;

class AlterTableIncidentsRemoveScheduledColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $yesterday = Carbon::now()->subDay();
        // We need a better way of handling data migrations...
        $system = app(System::class);
        $prefix = $system->getTablePrefix();
        DB::update("INSERT INTO {$prefix}schedules (name, message, scheduled_at, created_at, updated_at) SELECT name, message, scheduled_at, created_at, updated_at FROM {$prefix}incidents WHERE scheduled_at IS NOT NULL");

        DB::table('incidents')->whereNotNull('scheduled_at')->delete();

        Schema::table('incidents', function (Blueprint $table) {
            $table->dropColumn('scheduled_at');
        });

        // Close schedules older than a day
        $old_schedules = DB::table('schedules')
            ->where('scheduled_at', '<', $yesterday)
            ->get();

        foreach ($old_schedules as $schedule) {
            DB::table('schedules')
                ->where('id', $schedule->id)
                ->update([
                    'completed_at' => $schedule->scheduled_at,
                    'status' => Schedule::COMPLETE
                ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incidents', function (Blueprint $table) {
            $table->timestamp('scheduled_at')->before('created_at')->nullable()->default(null);
        });
        $system = app(System::class);
        $prefix = $system->getTablePrefix();
        DB::update("INSERT INTO {$prefix}incidents (name, status, message, scheduled_at, created_at, updated_at) SELECT name, 0, message, scheduled_at, created_at, updated_at FROM {$prefix}schedules");
    }
}
