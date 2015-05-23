<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Cachet\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        Model::unguard();

        $users = [
            [
                'username' => 'test',
                'password' => 'test123',
                'email'    => 'test@test.com',
                'level'    => 1,
                'api_key'  => '9yMHsdioQosnyVK4iCVR',
            ],
        ];

        User::truncate();

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
