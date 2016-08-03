<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Annotations;

/**
 * This is the handler annotation class.
 *
 * @Annotation
 *
 * @author James Brooks <james@alt-three.com>
 */
final class HandlerAnnotation
{
    public $handler;

    public function __construct(array $values)
    {
        $this->handler = $values['value'];
    }
}
