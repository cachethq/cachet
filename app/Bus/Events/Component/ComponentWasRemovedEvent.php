<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Events\Component;

use App\Bus\Events\ActionInterface;
use App\Models\Component;
use App\Models\User;

/**
 * This is the component was removed event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class ComponentWasRemovedEvent implements ActionInterface, ComponentEventInterface
{
    /**
     * The user who removed the component.
     *
     * @var \App\Models\User
     */
    public $user;

    /**
     * The component that was removed.
     *
     * @var \App\Models\Component
     */
    public $component;

    /**
     * Create a new component was removed event instance.
     *
     * @param \App\Models\User      $user
     * @param \App\Models\Component $component
     *
     * @return void
     */
    public function __construct(User $user, Component $component)
    {
        $this->user = $user;
        $this->component = $component;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Component was removed.';
    }

    /**
     * Get the event action.
     *
     * @return array
     */
    public function getAction()
    {
        return [
            'user'        => $this->user,
            'description' => (string) $this,
        ];
    }
}
