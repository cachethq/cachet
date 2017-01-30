<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\Incident;

use CachetHQ\Cachet\Bus\Commands\Component\UpdateComponentCommand;
use CachetHQ\Cachet\Bus\Commands\Incident\ReportIncidentCommand;
use CachetHQ\Cachet\Bus\Events\Incident\IncidentWasReportedEvent;
use CachetHQ\Cachet\Bus\Exceptions\Incident\InvalidIncidentTimestampException;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use CachetHQ\Cachet\Services\Dates\DateFactory;
use Carbon\Carbon;
use Twig_Environment;
use Twig_Loader_Array;

/**
 * This is the report incident command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ReportIncidentCommandHandler
{
    /**
     * The date factory instance.
     *
     * @var \CachetHQ\Cachet\Services\Dates\DateFactory
     */
    protected $dates;

    /**
     * Create a new report incident command handler instance.
     *
     * @param \CachetHQ\Cachet\Services\Dates\DateFactory $dates
     *
     * @return void
     */
    public function __construct(DateFactory $dates)
    {
        $this->dates = $dates;
    }

    /**
     * Handle the report incident command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Incident\ReportIncidentCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Incident
     */
    public function handle(ReportIncidentCommand $command)
    {
        $data = [
            'name'     => $command->name,
            'status'   => $command->status,
            'visible'  => $command->visible,
            'stickied' => $command->stickied,
        ];

        if ($template = IncidentTemplate::where('slug', '=', $command->template)->first()) {
            $data['message'] = $this->parseTemplate($template, $command);
        } else {
            $data['message'] = $command->message;
        }

        // Link with the component.
        if ($command->component_id) {
            $data['component_id'] = $command->component_id;
        }

        // The incident occurred at a different time.
        if ($occurredAt = $command->occurred_at) {
            if ($date = $this->dates->create('Y-m-d H:i', $occurredAt)) {
                $data['occurred_at'] = $date;
            } else {
                throw new InvalidIncidentTimestampException("Unable to pass timestamp {$occurredAt}");
            }
        } else {
            $data['occurred_at'] = Carbon::now();
        }

        // Create the incident
        $incident = Incident::create($data);

        // Update the component.
        if ($component = Component::find($command->component_id)) {
            dispatch(new UpdateComponentCommand(
                Component::find($command->component_id),
                null,
                null,
                $command->component_status,
                null,
                null,
                null,
                null,
                null
            ));
        }

        event(new IncidentWasReportedEvent($incident, (bool) $command->notify));

        return $incident;
    }

    /**
     * Compiles an incident template into an incident message.
     *
     * @param \CachetHQ\Cachet\Models\IncidentTemplate                     $template
     * @param \CachetHQ\Cachet\Bus\Commands\Incident\ReportIncidentCommand $command
     *
     * @return string
     */
    protected function parseTemplate(IncidentTemplate $template, ReportIncidentCommand $command)
    {
        $env = new Twig_Environment(new Twig_Loader_Array([]));
        $template = $env->createTemplate($template->template);

        $vars = array_merge($command->template_vars, [
            'incident' => [
                'name'             => $command->name,
                'status'           => $command->status,
                'message'          => $command->message,
                'visible'          => $command->visible,
                'notify'           => $command->notify,
                'stickied'         => $command->stickied,
                'occurred_at'      => $command->occurred_at,
                'component'        => Component::find($command->component_id) ?: null,
                'component_status' => $command->component_status,
            ],
        ]);

        return $template->render($vars);
    }
}
