<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
