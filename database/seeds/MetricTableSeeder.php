<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Cachet\Models\Metric;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class MetricTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        Model::unguard();

        $defaultMetrics = [
            [
                'name'          => 'Demo Metric',
                'suffix'        => 'rnd',
                'description'   => 'Random data points.',
                'default_value' => 0,
                'calc_type'     => 1,
                'display_chart' => 1,
            ],
        ];

        Metric::truncate();

        foreach ($defaultMetrics as $metric) {
            Metric::create($metric);
        }
    }
}
