<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Cachet\Models\ComponentGroup;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ComponentGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            $json = Storage::disk('database-data')->get('componentGroups.json');
        } catch (FileNotFoundException $e) {
            Log::notice("Won't seed component groups, Data file not found at path ".Storage::disk('database-data')->path('componentGroups.json'));

            return;
        }
        $data = json_decode($json);

        foreach ($data as $obj) {
            $componentGroup = ComponentGroup::firstOrNew([
                'id' => $obj->id,
            ]);
            $componentGroup->name = $obj->name;
            $componentGroup->visible = $obj->visible;
            $componentGroup->save();
        }
    }
}
