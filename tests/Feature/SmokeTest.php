<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use App\Models\User;
use Cachet\Cachet;

it('has Cachet installed', function () {
    expect(Cachet::version())->not->toBeEmpty();

    $this->artisan('cachet:version')
        ->expectsOutputToContain('is installed')
        ->assertSuccessful();
});

it('serves the status page at the root path', function () {
    $this->get('/')->assertOk();
});

it('redirects guests from the dashboard to the login page', function () {
    $this->get('/dashboard')->assertRedirect('/dashboard/login');
});

it('serves the dashboard login page', function () {
    $this->get('/dashboard/login')->assertOk();
});

it('serves the dashboard to authenticated users', function () {
    $user = User::forceCreate([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'is_admin' => true,
    ]);

    $this->actingAs($user)
        ->get('/dashboard')
        ->assertOk();
});
