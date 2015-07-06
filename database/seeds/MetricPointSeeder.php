<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
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
        MetricPoint::truncate();

        // Generate 11 hours of metric points
        for ($i = 0; $i < 11; $i++) {
            $metricTime = (new DateTime())->sub(new DateInterval('PT'.$i.'H'));

            $point = MetricPoint::create([
                'metric_id'  => 1,
                'value'      => rand(1, 100),
                'created_at' => $metricTime,
            ]);

            $point->update([
                'created_at' => $metricTime,
            ]);
        }
    }
}
