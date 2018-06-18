<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\Tag;

use CachetHQ\Cachet\Models\Tag;
use Illuminate\Database\Eloquent\Model;

/**
 * This is the apply tag coommand class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class ApplyTagCommand
{
    /**
     * The model to apply the tag to.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $model;

    /**
     * The tag to apply.
     *
     * @var \CachetHQ\Cachet\Models\Tag
     */
    public $tag;

    /**
     * Create a new apply tag command instance.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param \CachetHQ\Cachet\Models\Tag         $tag
     *
     * @return void
     */
    public function __construct(Model $model, Tag $tag)
    {
        $this->model = $model;
        $this->tag = $tag;
    }
}
