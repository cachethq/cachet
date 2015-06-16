<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Cachet\Models\MetricPoint;
use Illuminate\Database\Seeder;

class MetricPointSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        $metric = [
            'metric_id' => 1,
            'value'     => rand(1, 100),
        ];

        MetricPoint::create($metric);
    }
}
