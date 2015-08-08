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
            1 => 'crwdns265:0crwdne265:0',
            2 => 'crwdns293:0crwdne293:0',
            3 => 'crwdns294:0crwdne294:0',
            4 => 'crwdns295:0crwdne295:0',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'crwdns430:0crwdne430:0',
        'past'          => 'crwdns296:0crwdne296:0',
        'previous_week' => 'crwdns297:0crwdne297:0',
        'next_week'     => 'crwdns298:0crwdne298:0',
        'none'          => 'crwdns430:0crwdne430:0',
        'scheduled'     => 'crwdns438:0crwdne438:0',
        'scheduled_at'  => 'crwdns439:0crwdne439:0',
        'status'        => [
            0 => 'crwdns440:0crwdne440:0', // TODO: Hopefully remove this.
            1 => 'crwdns299:0crwdne299:0',
            2 => 'crwdns300:0crwdne300:0',
            3 => 'crwdns301:0crwdne301:0',
            4 => 'crwdns302:0crwdne302:0',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'crwdns9:0crwdne9:0',
        'bad'  => 'crwdns303:0crwdne303:0',
    ],

    'api' => [
        'regenerate' => 'crwdns271:0crwdne271:0',
        'revoke'     => 'crwdns304:0crwdne304:0',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'crwdns441:0crwdne441:0',
            'daily'   => 'crwdns442:0crwdne442:0',
            'monthly' => 'crwdns443:0crwdne443:0',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'crwdns489:0crwdne489:0',
        'button'    => 'crwdns490:0crwdne490:0',
        'email'     => [
            'subscribe'    => 'crwdns491:0crwdne491:0',
            'subscribed'   => 'crwdns492:0crwdne492:0',
            'verified'     => 'crwdns493:0crwdne493:0',
            'unsubscribe'  => 'crwdns494:0crwdne494:0',
            'unsubscribed' => 'crwdns495:0crwdne495:0',
            'failure'      => 'crwdns496:0crwdne496:0',
            'verify'       => [
                'text'           => "crwdns497:0crwdne497:0",
                'html-preheader' => 'crwdns498:0crwdne498:0',
                'html'           => 'crwdns520:0crwdne520:0',
            ],
            'maintenance' => [
                'text'           => "crwdns500:0crwdne500:0",
                'html-preheader' => 'crwdns501:0crwdne501:0',
                'html'           => 'crwdns521:0crwdne521:0',
            ],
            'incident' => [
                'text'           => "crwdns503:0crwdne503:0",
                'html-preheader' => 'crwdns504:0crwdne504:0',
                'html'           => 'crwdns505:0crwdne505:0',
            ],
        ],
    ],

    // Other
    'powered_by'      => 'crwdns11:0crwdne11:0',
    'about_this_site' => 'crwdns150:0crwdne150:0',
    'rss-feed'        => 'crwdns506:0crwdne506:0',
    'atom-feed'       => 'crwdns507:0crwdne507:0',
    'feed'            => 'crwdns275:0crwdne275:0',

];
