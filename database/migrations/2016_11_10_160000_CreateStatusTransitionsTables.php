<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\ComponentStatusTransition;
use CachetHQ\Cachet\Models\GroupStatusTransition;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusTransitionsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_status_transitions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('component_id')->unsigned();
            $table->integer('status');
            $table->timestamps();

            $table->index('component_id');
            $table->index('created_at');
        });

        // Populate status transitions for existent component.
        foreach (Component::query()->get() as $component) {
            ComponentStatusTransition::create([
                'component_id' => $component->id,
                'status'       => $component->status,
            ]);
        }

        Schema::create('group_status_transitions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('component_group_id')->unsigned();
            $table->integer('status');
            $table->text('offending_components');
            $table->timestamps();

            $table->index('component_group_id');
            $table->index('created_at');
        });

        // Populate status transitions for existent component groups.
        foreach (ComponentGroup::query()->get() as $group) {
            $componentsStatuses = [];
            foreach ($group->enabled_components_lowest()->get() as $component) {
                $componentsStatuses[] = [
                    'name'   => $component->name,
                    'status' => $component->status,
                ];
            }

            GroupStatusTransition::create([
                'component_group_id'   => $group->id,
                'status'               => $group->enabled_components_lowest()->first() ? $group->enabled_components_lowest()->first()->status : 0,
                'offending_components' => json_encode($componentsStatuses),
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
        Schema::drop('component_status_transitions');
        Schema::drop('group_status_transitions');
    }
}
