<?php

use CachetHQ\Cachet\Bus\Commands\Component\RemoveComponentCommand;
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
        if ($data == null)
            return;

        $componentsInDb = Component::all();

        //only run the foreach if there are components in the db to process
        if ($componentsInDb) foreach ($componentsInDb as $component) {
            $exists = false;
            if ($data) {
                foreach ($data as $key => $obj) {
                    if ($obj->id == $component->id) {
                        $exists = true;

                        if (!is_int($obj->status)) {
                            $obj->status = array_search($obj->status, __('cachet.components.status'));
                        }

                        $component->name = $obj->name;
                        $component->description = $obj->description;
                        $component->link = $obj->link;
                        $component->status = $obj->status;
                        $component->group_id = $obj->group_id;
                        $component->save();

                        // We have dealt with this entry in the json file so we can remove it from the "queue"
                        unset($data[$key]);

                        break;
                    }
                }
            }

            //This database object is not in the json file anymore, so we delete it
            if (!$exists) {
                $component->incidents()->forceDelete();
                $component->meta()->forceDelete();
                $component->forceDelete();
            }
        }

        if ($data)
            //Whatever is left in the $data array from the file must be new, so we create it
            foreach ($data as $obj) {

                if (!is_int($obj->status)) {
                    $obj->status = array_search($obj->status, __('cachet.components.status'));
                }

                $component = new Component;
                $component->id = $obj->id;
                $component->name = $obj->name;
                $component->description = $obj->description;
                $component->link = $obj->link;
                $component->status = $obj->status;
                $component->group_id = $obj->group_id;
                $component->save();
            }
    }
}
