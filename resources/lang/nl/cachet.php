<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'status' => [
            1 => 'Online',
            2 => 'Verminderde prestaties',
            3 => 'Gedeeltelijke storing',
            4 => 'Grote storing',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Geen incidenten gemeld.',
        'past'          => 'Eerdere incidenten',
        'previous_week' => 'Vorige week',
        'next_week'     => 'Volgende week',
        'none'          => 'Niets te melden.',
        'scheduled'     => 'Gepland onderhoud',
        'scheduled_at'  => ', gepland :timestamp',
        'status'        => [
            0 => 'Gepland', // TODO: Hopefully remove this.
            1 => 'Onderzoeken',
            2 => 'Geïdentificeerd',
            3 => 'Bekijken',
            4 => 'Opgelost',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Alle systemen zijn online',
        'bad'  => 'Sommige systemen hebben problemen',
    ],

    'api' => [
        'regenerate' => 'API-sleutel hergenereren',
        'revoke'     => 'API-sleutel intrekken',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Elk uur',
            'daily'   => 'Dagelijks',
            'monthly' => 'Maandelijks',
        ],
    ],

    // Other
    'powered_by'      => 'De statuspagina van :app is mogelijk gemaakt door <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'Over deze site',
    'rss-feed'        => 'RSS-feed',
    'atom-feed'       => 'Atom-feed',
    'feed'            => 'Statusfeed',

];
