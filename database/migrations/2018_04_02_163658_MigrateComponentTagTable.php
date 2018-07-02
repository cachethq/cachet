<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Cachet\Models\Taggable;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MigrateComponentTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Start by migrating the data into the new taggables field.
        DB::table('component_tag')->get()->each(function ($tag) {
            Taggable::create([
                'tag_id'        => $tag->tag_id,
                'taggable_type' => 'components',
                'taggable_id'   => $tag->component_id,
            ]);
        });

        Schema::dropIfExists('component_tag');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('component_tag', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('component_id');
            $table->integer('tag_id');

            $table->index('component_id');
            $table->index('tag_id');
        });
    }
}
