<?php

use CachetHQ\Cachet\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(database_path("data/users.json"));
        $data = json_decode($json);
        if ($data == null)
            return;

        $settingsInDb = User::all();

        if ($settingsInDb) foreach ($settingsInDb as $user) {
            $exists = false;
            if ($data) foreach ($data as $key => $obj) {
                if ($user->username == $obj->username) {
                    $exists = true;

                    $user->setPasswordAttribute($obj->password);

                    unset($data[$key]);
                    break;
                }
            }
            if (!$exists) {
                $user->forceDelete();
            }
        }

        if ($data)
            //Whatever is left in the $data array from the file must be new, so we create it
            foreach ($data as $obj) {
                $user = new User;
                $user->username = $obj->username;
                $user->setPasswordAttribute($obj->password);
                $user->api_key = User::generateApiKey();
                $user->email = $obj->email;
                $user->welcomed = 1;
                $user->save();
            }
    }
}
