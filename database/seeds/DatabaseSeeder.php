<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        Model::unguard();

        $this->call('UsersTableSeeder');
        $this->call('SettingsTableSeeder');
        $this->call('IncidentTableSeeder');
        $this->call('ComponentTableSeeder');
    }
}
