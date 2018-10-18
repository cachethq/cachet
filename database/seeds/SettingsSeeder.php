<?php

use CachetHQ\Cachet\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(database_path("data/settings.json"));
        $data = json_decode($json);
        if ($data == null)
            return;

        $settingsInDb = Setting::all();

        if ($settingsInDb) foreach ($settingsInDb as $setting) {
            $exists = false;
            if ($data) foreach ($data as $key => $obj) {
                if ($setting->name == $obj->name) {
                    $exists = true;

                    $setting->value = $obj->value;

                    unset($data[$key]);
                    break;
                }
            }
            if (!$exists) {
                $setting->forceDelete();
            }
        }

        if ($data)
            //Whatever is left in the $data array from the file must be new, so we create it
            foreach ($data as $obj) {
                echo $obj->name;
                $setting = new Setting;
                $setting->name = $obj->name;
                $setting->value = $obj->value;
                $setting->save();
            }
    }

}
