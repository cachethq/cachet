<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Console\Commands;

use CachetHQ\Cachet\Models\MetricPoint;
use DateInterval;
use DateTime;
use Illuminate\Console\Command;
use Illuminate\Console\ConfirmableTrait;
use Symfony\Component\Console\Input\InputOption;

/**
 * This is the demo seeder of metric points command.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DemoMetricPointSeederCommand extends Command
{
    use ConfirmableTrait;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cachet:metrics';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seeds the demo Cachet metrics with points';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        if (!$this->confirmToProceed()) {
            return;
        }

        $this->seedMetricPoints();

        $this->info('Demo metric seeded with demo data successfully!');
    }

    /**
     * Seed the metric points table.
     *
     * @return void
     */
    protected function seedMetricPoints()
    {
        MetricPoint::truncate();

        // Generate 11 hours of metric points
        for ($i = 0; $i < 11; $i++) {
            $metricTime = (new DateTime())->sub(new DateInterval('PT'.$i.'H'));

            MetricPoint::create([
                'metric_id'  => 1,
                'value'      => random_int(1, 10),
                'created_at' => $metricTime,
                'updated_at' => $metricTime,
            ]);
        }
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['force', null, InputOption::VALUE_NONE, 'Force the operation to run when in production.'],
        ];
    }
}
