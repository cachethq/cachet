<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\Component;

use CachetHQ\Cachet\Annotations\HandlerAnnotation;
use CachetHQ\Cachet\Models\Component;

/**
 * This is the component was removed event class.
 *
 * @HandlerAnnotation("CachetHQ\Cachet\Bus\Handlers\Events\Component\CleanupComponentSubscriptionsHandler")
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
final class ComponentWasRemovedEvent implements ComponentEventInterface
{
    /**
     * The component that was removed.
     *
     * @var \CachetHQ\Cachet\Models\Component
     */
    public $component;

    /**
     * Create a new component was removed event instance.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return void
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }
}
