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
use CachetHQ\Cachet\Bus\Commands\Incident\UpdateIncidentCommand;
use CachetHQ\Cachet\Bus\Events\Incident\IncidentWasUpdatedEvent;
use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use Twig_Environment;
use Twig_Loader_Array;

/**
 * This is the update incident command handler.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateIncidentCommandHandler
{
    /**
     * The date factory instance.
     *
     * @var \CachetHQ\Cachet\Dates\DateFactory
     */
    protected $dates;

    /**
     * Create a new update incident command handler instance.
     *
     * @param \CachetHQ\Cachet\Dates\DateFactory $dates
     *
     * @return void
     */
    public function __construct(DateFactory $dates)
    {
        $this->dates = $dates;
    }

    /**
     * Handle the update incident command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Incident\UpdateIncidentCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Incident
     */
    public function handle(UpdateIncidentCommand $command)
    {
        if ($template = IncidentTemplate::where('slug', $command->template)->first()) {
            $command->message = $this->parseTemplate($template, $command);
        }

        $incident = $command->incident;
        $incident->update($this->filter($command));

        // The incident occurred at a different time.
        if ($command->incident_date) {
            $incidentDate = $this->dates->create('d/m/Y H:i', $command->incident_date);

            $incident->update([
                'created_at' => $incidentDate,
                'updated_at' => $incidentDate,
            ]);
        }

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
                null
            ));
        }

        event(new IncidentWasUpdatedEvent($incident));

        return $incident;
    }

    /**
     * Filter the command data.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Incident\UpdateIncidentCommand $command
     *
     * @return array
     */
    protected function filter(UpdateIncidentCommand $command)
    {
        $params = [
            'name'             => $command->name,
            'status'           => $command->status,
            'message'          => $command->message,
            'visible'          => $command->visible,
            'stickied'         => $command->stickied,
            'component_id'     => $command->component_id,
            'component_status' => $command->component_status,
            'notify'           => $command->notify,
        ];

        return array_filter($params, function ($val) {
            return $val !== null;
        });
    }

    /**
     * Compiles an incident template into an incident message.
     *
     * @param \CachetHQ\Cachet\Models\IncidentTemplate                     $template
     * @param \CachetHQ\Cachet\Bus\Commands\Incident\UpdateIncidentCommand $command
     *
     * @return string
     */
    protected function parseTemplate(IncidentTemplate $template, UpdateIncidentCommand $command)
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
                'incident_date'    => $command->incident_date,
                'component'        => Component::find($command->component_id) ?: null,
                'component_status' => $command->component_status,
            ],
        ]);

        return $template->render($vars);
    }
}
