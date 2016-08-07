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

use CachetHQ\Cachet\Models\Component;

/**
 * This is the component status was updated event.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class ComponentStatusWasUpdatedEvent implements ComponentEventInterface
{
    /**
     * The component that was updated.
     *
     * @var \CachetHQ\Cachet\Models\Component
     */
    public $component;

    /**
     * The original status of the component.
     *
     * @var int
     */
    public $original_status;

    /**
     * The new status of the component.
     *
     * @var int
     */
    public $new_status;

    /**
     * Create a new component was updated event instance.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     * @param int                               $original_status
     * @param int                               $new_status
     *
     * @return void
     */
    public function __construct(Component $component, $original_status, $new_status)
    {
        $this->component = $component;
        $this->original_status = $original_status;
        $this->new_status = $new_status;
    }
}
