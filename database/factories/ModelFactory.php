<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$factory->define('CachetHQ\Cachet\Models\User', function ($faker) {
    return [
        'username'       => $faker->userName,
        'email'          => $faker->email,
        'password'       => str_random(10),
        'remember_token' => str_random(10),
        'api_key'        => str_random(20),
        'active'         => true,
        'level'          => 1,
    ];
});

$factory->define('CachetHQ\Cachet\Models\Component', function ($faker) {
    return [
        'name'        => $faker->sentence(),
        'description' => $faker->paragraph(),
        'link'        => $faker->url(),
        'status'      => 1,
        'order'       => 0,
        'user_id'     => 1,
    ];
});
