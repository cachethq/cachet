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

use CachetHQ\Cachet\Bus\Commands\Incident\UpdateIncidentCommand;
use CachetHQ\Cachet\Bus\Events\Incident\IncidentWasUpdatedEvent;
use CachetHQ\Cachet\Dates\DateFactory;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use Twig_Loader_String;
use TwigBridge\Bridge;

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
     * The twig bridge instance.
     *
     * @var \TwigBridge\Bridge
     */
    protected $twig;

    /**
     * Create a new update incident command handler instance.
     *
     * @param \CachetHQ\Cachet\Dates\DateFactory $dates
     * @param \TwigBridge\Bridge                 $twig
     *
     * @return void
     */
    public function __construct(DateFactory $dates, Bridge $twig)
    {
        $this->dates = $dates;
        $this->twig = $twig;
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
        if ($command->template) {
            $command->message = $this->parseIncidentTemplate($command->template, $command->template_vars);
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
        if ($command->component_id) {
            Component::find($command->component_id)->update([
                'status' => $command->component_status,
            ]);
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
     * @param string $templateSlug
     * @param array  $vars
     *
     * @return string
     */
    protected function parseIncidentTemplate($templateSlug, $vars)
    {
        $this->twig->setLoader(new Twig_Loader_String());
        $template = IncidentTemplate::forSlug($templateSlug)->first();

        return $this->twig->render($template->template, $vars);
    }
}
