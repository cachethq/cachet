<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

/**
 * This is the abstract controller class.
 *
 * @author James Brooks <james@alt-three.com>
 */
abstract class AbstractController extends Controller
{
    use ValidatesRequests;
}
