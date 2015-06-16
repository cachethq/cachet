<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        $this->call('UsersTableSeeder');
        $this->call('SettingsTableSeeder');
        $this->call('IncidentTableSeeder');
        $this->call('ComponentTableSeeder');
        $this->call('MetricTableSeeder');
    }
}
