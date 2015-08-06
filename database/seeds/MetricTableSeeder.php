<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Cachet\Models\Metric;
use Illuminate\Database\Seeder;

class MetricTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        $defaultMetrics = [
            [
                'name'          => 'Cups of coffee',
                'suffix'        => 'Cups',
                'description'   => 'How many cups of coffee we\'ve drank.',
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
