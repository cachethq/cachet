<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Foundation\Exceptions\Filters;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiFilter
{
    /**
     * Filter and return the displayers.
     *
     * @param \GrahamCampbell\Exceptions\Displayers\DisplayerInterface[] $displayers
     * @param \Illuminate\Http\Request                                   $request
     * @param \Exception                                                 $original
     * @param \Exception                                                 $transformed
     * @param int                                                        $code
     *
     * @return \GrahamCampbell\Exceptions\Displayers\DisplayerInterface[]
     */
    public function filter(array $displayers, Request $request, Exception $original, Exception $transformed, int $code)
    {
        if ($request->is('api*')) {
            foreach ($displayers as $index => $displayer) {
                if (!Str::contains($displayer->contentType(), 'application/')) {
                    unset($displayers[$index]);
                }
            }
        }

        return array_values($displayers);
    }
}
