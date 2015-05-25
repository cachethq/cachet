<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joe@cachethq.io>
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'status' => [
            1 => 'Działa',
            2 => 'Problemy wydajnościowe',
            3 => 'Częściowa niedostępność',
            4 => 'Poważna awaria',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Brak incydentów.',
        'past'          => 'Poprzednie incydenty',
        'previous_week' => 'Poprzedni tydzień',
        'next_week'     => 'Następny tydzień',
        'none'          => 'Brak incydentów',
        'scheduled'     => 'Zapowiedziane prace',
        'scheduled_at'  => ', scheduled :timestamp',
        'status'        => [
            0 => 'Planowy', // TODO: Hopefully remove this.
            1 => 'Szukanie',
            2 => 'Zidentyfikowany',
            3 => 'Obserwacja',
            4 => 'Naprawiony',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Wszystkie systemy sprawne.',
        'bad'  => 'Część systemów ma problemy.',
    ],

    'api' => [
        'regenerate' => 'Przegeneruj klucz API',
        'revoke'     => 'Odwołaj klucz API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Godzinowo',
            'daily'   => 'Dziennie',
            'monthly' => 'Miesięcznie',
        ],
    ],

    // Other
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'O tej stronie',
    'rss-feed'        => 'RSS Feed',
    'atom-feed'       => 'Atom Feed',
    'feed'            => 'Status Feed',

];
