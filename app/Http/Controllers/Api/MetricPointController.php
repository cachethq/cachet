<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Api;

use CachetHQ\Cachet\Bus\Commands\Metric\CreateMetricPointCommand;
use CachetHQ\Cachet\Bus\Commands\Metric\RemoveMetricPointCommand;
use CachetHQ\Cachet\Bus\Commands\Metric\UpdateMetricPointCommand;
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Models\MetricPoint;
use GrahamCampbell\Binput\Facades\Binput;
use App\Http\Controllers\Input;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Illuminate\Http\Request;

class MetricPointController extends AbstractApiController
{
    /**
     * Get a single metric point.
     *
     * @param \CachetHQ\Cachet\Models\Metric      $metric
     * @param \CachetHQ\Cachet\Models\MetricPoint $metricPoint
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Metric $metric, MetricPoint $metricPoint)
    {
        $points = $metric->points()->paginate(Binput::get('per_page', 20));

        return $this->paginator($points, Request::instance());
    }

    /**
     * Create a new metric point.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param $json
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Metric $metric, $json)
    {
       

        if($json!=null){
            $c = sizeof($json);
            
            try {
                    for($i=0; $i<$c; $i++){
                        
                        $metricPoint = new MetricPoint;
                        $metricPoint->value = floatval($json[$i]->value);
                        $metricPoint->created_at = $json[$i]->timestamp;
                        $metricPoint->metric_id = $metric->id;
                        $metricPoint->save();
                    }
            } catch (QueryException $e) {
                
                throw new BadRequestHttpException('error post mettic points');
            }
        }
        else {
             try {
                $metricPoint = dispatch(new AddMetricPointCommand(
                                $metric,
                                Binput::get('value'),
                                Binput::get('timestamp')
                                ));
                 } catch (QueryException $e) {
            throw new BadRequestHttpException();
            }
            
        }
        
       return $this->item($metricPoint);
    }

   

     
    /**
     * Updates a metric point.
     *
     * @param \CachetHQ\Cachet\Models\Metric      $metric
     * @param \CachetHQ\Cachet\Models\MetircPoint $metricPoint
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Metric $metric, MetricPoint $metricPoint)
    {
        $metricPoint = dispatch(new UpdateMetricPointCommand(
            $metricPoint,
            $metric,
            Binput::get('value'),
            Binput::get('timestamp')
        ));

        return $this->item($metricPoint);
    }

    /**
     * Destroys a metric point.
     *
     * @param \CachetHQ\Cachet\Models\Metric      $metric
     * @param \CachetHQ\Cachet\Models\MetricPoint $metricPoint
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Metric $metric, MetricPoint $metricPoint)
    {
        dispatch(new RemoveMetricPointCommand($metricPoint));

        return $this->noContent();
    }
}
