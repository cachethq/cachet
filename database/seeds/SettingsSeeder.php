<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Cachet\Models\Setting;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            $json = Storage::disk('database-data')->get('settings.json');
        } catch (FileNotFoundException $e) {
            Log::notice("Won't seed settings, Data file not found at path ".Storage::disk('database-data')->path('settings.json'));

            return;
        }
        $data = json_decode($json);
        if ($data == null) {
            return;
        }

        $settingsInDb = Setting::all();

        if ($settingsInDb) {
            foreach ($settingsInDb as $setting) {
                $exists = false;
                if ($data) {
                    foreach ($data as $key => $obj) {
                        if ($setting->name == $obj->name) {
                            $exists = true;

                            $setting->value = $obj->value;
                            $setting->save();

                            unset($data[$key]);
                            break;
                        }
                    }
                }
                if (!$exists) {
                    $setting->forceDelete();
                }
            }
        }

        if ($data) {
            //Whatever is left in the $data array from the file must be new, so we create it
            foreach ($data as $obj) {
                echo $obj->name;
                $setting = new Setting();
                $setting->name = $obj->name;
                $setting->value = $obj->value;
                $setting->save();
            }
        }
    }
}
