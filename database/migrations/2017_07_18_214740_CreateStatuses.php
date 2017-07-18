<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Cachet\Models\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateStatuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->char('color', 7)->nullable()->default(null);
            $table->string('type');
            $table->timestamps();
        });

        // Migrate the existing incident language files into the statuses table.
        $incidentStatuses = Lang::get('cachet.incidents.status');

        foreach ($incidentStatuses as $status) {
            Status::create([
                'name' => $status,
                'slug' => Str::slug($status),
                'type' => Status::TYPE_INCIDENTS,
            ]);
        }

        // Migrate the existing component language files into the statuses table.
        $componentStatuses = Lang::get('cachet.components.status');

        foreach ($componentStatuses as $status) {
            Status::create([
                'name' => $status,
                'slug' => Str::slug($status),
                'type' => Status::TYPE_COMPONENTS,
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
        Schema::dropIfExists('statuses');
    }
}
