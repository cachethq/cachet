<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
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

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates.',
        'button'    => 'Subscribe',
        'email'     => [
            'subscribe'    => 'Subscribe to email updates.',
            'subscribed'   => 'You\'ve been subscribed to email notifications, please check your email to confirm your subscription.',
            'verified'     => 'Your email subscription has been confirmed. Thank you!',
            'unsubscribe'  => 'Unsuscribe from email updates.',
            'unsubscribed' => 'Your email subscription has been cancelled.',
            'failure'      => 'Something went wrong with the subscription.',
            'verify'       => [
                'text'           => "Please confirm your email subscription to :app_name status updates.\n:link\nThank you, :app_name",
                'html-preheader' => 'Please confirm your email subscription to :app_name status updates.',
                'html'           => '<p>Please confirm your email subscription to :app_name status updates.</p><p>:link</p><p>Thank you, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "New maintenance has been scheduled on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New maintenance has been scheduled on :app_name.',
                'html'           => '<p>New maintenance has been scheduled on :app_name.</p><p>Thank you, :app_name</p>',
            ],
            'incident' => [
                'text'           => "New incident has been reported on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New incident has been reported on :app_name.',
                'html'           => '<p>New incident has been reported on :app_name.</p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => 'De statuspagina van :app is mogelijk gemaakt door <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'Over deze site',
    'rss-feed'        => 'RSS-feed',
    'atom-feed'       => 'Atom-feed',
    'feed'            => 'Statusfeed',

];
