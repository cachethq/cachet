<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Repositories\Metric;

use CachetHQ\Cachet\Models\Metric;
use Illuminate\Contracts\Config\Repository;

/**
 * This is the abstract metric repository class.
 *
 * @author Jams Brooks <james@alt-three.com>
 */
abstract class AbstractMetricRepository
{
    /**
     * The illuminate config repository.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * The name of the metrics table.
     *
     * @var string
     */
    protected $tableName;

    /**
     * Create a new abstract metric repository instance.
     *
     * @param \Illuminate\Contracts\Config\Repository $config
     *
     * @return void
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    /**
     * Get the metrics table name.
     *
     * @return string
     */
    protected function getTableName()
    {
        $driver = $this->config->get('database.default');
        $connection = $this->config->get('database.connections.'.$driver);
        $prefix = $connection['prefix'];

        return $prefix.'metrics';
    }
}
