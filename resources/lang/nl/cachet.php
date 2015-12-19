<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'status' => [
            1 => 'Operationeel',
            2 => 'Prestatieproblemen',
            3 => 'Gedeeltelijke storing',
            4 => 'Grote storing',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Geen incidenten gemeld.',
        'past'          => 'Incidenten in het verleden',
        'previous_week' => 'Vorige week',
        'next_week'     => 'Volgende week',
        'none'          => 'Geen incidenten gemeld.',
        'scheduled'     => 'Gepland onderhoud',
        'scheduled_at'  => ', gepland :timestamp',
        'status'        => [
            0 => 'Gepland', // TODO: Hopefully remove this.
            1 => 'In onderzoek',
            2 => 'Geïdentificeerd',
            3 => 'Aan het opvolgen',
            4 => 'Opgelost',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Alle systemen werken correct.',
        'bad'  => 'Sommige systemen ondervinden problemen.',
    ],

    'api' => [
        'regenerate' => 'Hergenereer API-sleutel',
        'revoke'     => 'API-sleutel intrekken',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Laatste 12 uren',
            'weekly'  => 'Week',
            'monthly' => 'Maand',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Abonneer voor de meest recente updates.',
        'button'    => 'Abonneer',
        'email'     => [
            'subscribe'          => 'Abonneren op e-mail updates.',
            'subscribed'         => 'U bent geabonneerd op e-mailmeldingen, controleer uw e-mail om uw abonnement te bevestigen.',
            'verified'           => 'Uw e-mail abonnement is bevestigd. Bedankt!',
            'unsubscribe'        => 'Afmelden voor e-mail updates.',
            'unsubscribed'       => 'Uw e-mail abonnement is opgezegd.',
            'failure'            => 'Er ging iets fout tijdens het aanmelden.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => 'Bevestig uw e-mail abonnement op :app_name status updates.\\n:link\\nBedankt, :app_name',
                'html-preheader' => 'Bevestig uw e-mail abonnement op :app_name status updates.',
                'html'           => '',
            ],
            'maintenance' => [
                'text'           => 'Nieuwe onderhoud is gepland voor :app_name.\\nBedankt, :app_name',
                'html-preheader' => 'Nieuw onderhoud is gepland voor :app_name.',
                'html'           => '',
            ],
            'incident' => [
                'text'           => 'Nieuw incident is aangemeld op :app_name.\\nBedankt, :app_name',
                'html-preheader' => 'Nieuw incident aangemeld op :app_name.',
                'html'           => '<p>Nieuw incident aangemeld op :app_name.</p><p>Bedankt, :app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => ': app statuspagina wordt mogelijk gemaakt door <a href="https://cachethq.github.io"> Cachet</a>.',
    'about_this_site' => 'Over deze site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
