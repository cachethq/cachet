<?php

use CachetHQ\Cachet\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            $json = Storage::disk('database-data')->get("users.json");
        } catch (\Illuminate\Contracts\Filesystem\FileNotFoundException $e) {
            Log::notice("Won't seed users, Data file not found at path " . Storage::disk('database-data')->path("users.json"));
            return;
        }
        $data = json_decode($json);
        if ($data == null)
            return;

        $settingsInDb = User::all();

        if ($settingsInDb) foreach ($settingsInDb as $user) {
            $exists = false;
            if ($data) foreach ($data as $key => $obj) {
                if ($user->username == $obj->username) {
                    $exists = true;

                    $user->setPasswordAttribute($this->fromEnvOrVal($obj->password));
                    $this->level = ($obj->isAdmin) ? User::LEVEL_ADMIN : User::LEVEL_USER;
                    $user->email = $obj->email;

                    $user->save();

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
                $user->username = $this->fromEnvOrVal($obj->username);
                $user->setPasswordAttribute($this->fromEnvOrVal($obj->password));
                $user->api_key = User::generateApiKey();
                $user->email = $obj->email;
                $user->welcomed = 1;
                $this->level = ($obj->isAdmin) ? User::LEVEL_ADMIN : User::LEVEL_USER;
                $user->save();
            }
    }

    /**
     * Gets the value from the environment variable name given, of the form env:VAR_NAME, else returns the value passed.
     *
     * @param string $value
     * @return string
     */
    private function fromEnvOrVal(string $value)
    {
        if (preg_match("/^env:[a-zA-Z_]+[a-zA-Z0-9_]*$/", $value) && strlen(getenv(explode(":", $value)[1]))) {
            return getenv(explode(":", $value)[1]);
        } else {
            return $value;
        }
    }
}
