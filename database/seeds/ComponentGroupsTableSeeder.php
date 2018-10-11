<?php

use Illuminate\Database\Seeder;
use CachetHQ\Cachet\Models\ComponentGroup;
use Illuminate\Support\Facades\File;

class ComponentGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(database_path("data/componentGroups.json"));
        $data = json_decode($json);

        foreach ($data as $obj) {
            $componentGroup = ComponentGroup::firstOrNew(array(
                'id' => $obj->id,
            ));
            $componentGroup->name = $obj->name;
            $componentGroup->save();
        }
    }
}
