<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run()
    {
        $this->infraAsCodeSeeder();
    }

    private function infraAsCodeSeeder() {
        if (config('database.fileDriven')) {
            $this->call(UsersSeeder::class);
            $this->call(SettingsSeeder::class);
            $this->call(ComponentGroupsTableSeeder::class);
            $this->call(ComponentsTableSeeder::class);
        }
    }
}
