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
use CachetHQ\Cachet\Bus\Exceptions\Incident\InvalidIncidentTimestampException;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use CachetHQ\Cachet\Services\Dates\DateFactory;
use Illuminate\Contracts\Auth\Guard;
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
     * The authentication guard instance.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * The date factory instance.
     *
     * @var \CachetHQ\Cachet\Services\Dates\DateFactory
     */
    protected $dates;

    /**
     * Create a new update incident command handler instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard            $auth
     * @param \CachetHQ\Cachet\Services\Dates\DateFactory $dates
     *
     * @return void
     */
    public function __construct(Guard $auth, DateFactory $dates)
    {
        $this->auth = $auth;
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
        if ($template = IncidentTemplate::where('slug', '=', $command->template)->first()) {
            $command->message = $this->parseTemplate($template, $command);
        }

        $incident = $command->incident;
        $incident->fill($this->filter($command));

        // The incident occurred at a different time.
        if ($occurredAt = $command->occurred_at) {
            if ($date = $this->dates->create('Y-m-d H:i', $occurredAt)) {
                $incident->fill(['occurred_at' => $date]);
            } else {
                throw new InvalidIncidentTimestampException("Unable to pass timestamp {$occurredAt}");
            }
        }

        // Rather than making lots of updates, just fill and save.
        $incident->save();

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

        event(new IncidentWasUpdatedEvent($this->auth->user(), $incident));

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
                'occurred_at'      => $command->occurred_at,
                'component'        => Component::find($command->component_id) ?: null,
                'component_status' => $command->component_status,
            ],
        ]);

        return $template->render($vars);
    }
}
