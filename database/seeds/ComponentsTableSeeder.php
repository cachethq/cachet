<?php

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use CachetHQ\Cachet\Models\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            $json = Storage::disk('database-data')->get("components.json");
        } catch (FileNotFoundException $e) {
            Log::notice("Won't seed components, Data file not found at path " . Storage::disk('database-data')->path("components.json"));
            return;
        }
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

                        $component->name = $obj->name;
                        $component->description = $obj->description;
                        $component->link = $obj->link;
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


                $component = new Component;
                $component->id = $obj->id;
                $component->name = $obj->name;
                $component->description = $obj->description;
                $component->link = $obj->link;
                $component->status = 1; //Set status to "operational" since its just been added
                $component->group_id = $obj->group_id;
                $component->save();
            }
    }
}
