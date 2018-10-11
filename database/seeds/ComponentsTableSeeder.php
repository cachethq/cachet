<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use CachetHQ\Cachet\Models\Component;

class ComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(database_path("data/components.json"));
        $data = json_decode($json);
        foreach ($data as $obj) {

            if (!is_int($obj->status)) {
                $obj->status = array_search($obj->status, __('cachet.components.status'));
            }

            $component = Component::firstOrNew(array(
                'id' => $obj->id,
            ));
            $component->name = $obj->name;
            $component->description = $obj->description;
            $component->link = $obj->link;
            $component->status = $obj->status;
            $component->save();
        }
    }
}
