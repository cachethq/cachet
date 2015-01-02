<?php

use CachetHQ\Cachet\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $users = [
            [
                "username" => "admin",
                "password" => "admin",
                "email"    => "admin@example.com",
                "level"    => "1",
            ],
            [
                "username" => "user",
                "password" => "user",
                "email"    => "user@example.com"
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
