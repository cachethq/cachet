<?php

namespace CachetHQ\Cachet\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class AbstractController extends BaseController
{
    use DispatchesCommands, ValidatesRequests;
}
