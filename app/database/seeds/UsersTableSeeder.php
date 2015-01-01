<?php

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

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
