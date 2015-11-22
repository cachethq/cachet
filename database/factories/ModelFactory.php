<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Carbon\Carbon;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Models\MetricPoint;
use CachetHQ\Cachet\Models\Subscriber;
use CachetHQ\Cachet\Models\User;

$factory->define(Component::class, function ($faker) {
    return [
        'name'        => $faker->sentence(),
        'description' => $faker->paragraph(),
        'link'        => $faker->url(),
        'status'      => 1,
        'order'       => 0,
    ];
});

$factory->define(ComponentGroup::class, function ($faker) {
    return [
        'name'  => $faker->words(2, true),
        'order' => 0,
    ];
});

$factory->define(Incident::class, function ($faker) {
    return [
        'name'    => $faker->sentence(),
        'message' => $faker->paragraph(),
        'status'  => 1,
        'visible' => 1,
    ];
});

$factory->define(IncidentTemplate::class, function ($faker) {
    return [
        'name'     => 'Test Template',
        'slug'     => 'test-template',
        'template' => "Name: {{ name }},\nMessage: {{ message }}",
    ];
});

$factory->define(Metric::class, function ($faker) {
    return [
        'name'          => $faker->sentence(),
        'suffix'        => $faker->word(),
        'description'   => $faker->paragraph(),
        'default_value' => 1,
        'calc_type'     => 1,
        'display_chart' => 1,
    ];
});

$factory->define(MetricPoint::class, function ($faker) {
    return [
        'metric_id' => 1,
        'value'     => random_int(1, 100),
    ];
});

$factory->define(Subscriber::class, function ($faker) {
    return [
        'email'       => $faker->email,
        'verify_code' => 'Mqr80r2wJtxHCW5Ep4azkldFfIwHhw98M9HF04dn0z',
        'verified_at' => Carbon::now(),
    ];
});

$factory->define(User::class, function ($faker) {
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
