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
        'last_updated' => 'crwdns721:0crwdne721:0',
        'status'       => [
            1 => 'crwdns265:0crwdne265:0',
            2 => 'crwdns293:0crwdne293:0',
            3 => 'crwdns294:0crwdne294:0',
            4 => 'crwdns295:0crwdne295:0',
        ],
        'group' => [
            'other' => 'crwdns659:0crwdne659:0',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'crwdns657:0crwdne657:0',
        'past'          => 'crwdns542:0crwdne542:0',
        'previous_week' => 'crwdns543:0crwdne543:0',
        'next_week'     => 'crwdns544:0crwdne544:0',
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
        'good'  => 'crwdns622:0crwdne622:0',
        'bad'   => 'crwdns623:0crwdne623:0',
        'major' => 'crwdns624:0crwdne624:0',
    ],

    'api' => [
        'regenerate' => 'crwdns271:0crwdne271:0',
        'revoke'     => 'crwdns304:0crwdne304:0',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'crwdns625:0crwdne625:0',
            'hourly'    => 'crwdns548:0crwdne548:0',
            'weekly'    => 'crwdns549:0crwdne549:0',
            'monthly'   => 'crwdns550:0crwdne550:0',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'crwdns551:0crwdne551:0',
        'button'    => 'crwdns490:0crwdne490:0',
        'manage'    => [
            'no_subscriptions' => 'crwdns660:0crwdne660:0',
            'my_subscriptions' => 'crwdns661:0crwdne661:0',
        ],
        'email' => [
            'subscribe'          => 'crwdns491:0crwdne491:0',
            'subscribed'         => 'crwdns492:0crwdne492:0',
            'verified'           => 'crwdns493:0crwdne493:0',
            'manage'             => 'crwdns662:0crwdne662:0',
            'unsubscribe'        => 'crwdns552:0crwdne552:0',
            'unsubscribed'       => 'crwdns495:0crwdne495:0',
            'failure'            => 'crwdns496:0crwdne496:0',
            'already-subscribed' => 'crwdns626:0crwdne626:0',
            'verify'             => [
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
            'component' => [
                'subject'        => 'crwdns627:0crwdne627:0',
                'text'           => 'crwdns628:0crwdne628:0',
                'html-preheader' => 'crwdns629:0crwdne629:0',
                'html'           => 'crwdns630:0crwdne630:0',
                'tooltip-title'  => 'crwdns631:0crwdne631:0',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "crwdns553:0crwdne553:0",
                'html-preheader' => 'crwdns554:0crwdne554:0',
                'html'           => 'crwdns555:0crwdne555:0',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'crwdns556:0crwdne556:0',
        'username' => 'crwdns557:0crwdne557:0',
        'email'    => 'crwdns558:0crwdne558:0',
        'password' => 'crwdns559:0crwdne559:0',
        'success'  => 'crwdns560:0crwdne560:0',
        'failure'  => 'crwdns561:0crwdne561:0',
    ],

    'system' => [
        'update' => 'crwdns632:0crwdne632:0',
    ],

    // Modal
    'modal' => [
        'close'     => 'crwdns633:0crwdne633:0',
        'subscribe' => [
            'title'  => 'crwdns634:0crwdne634:0',
            'body'   => 'crwdns658:0crwdne658:0',
            'button' => 'crwdns636:0crwdne636:0',
        ],
    ],

    // Other
    'home'            => 'crwdns722:0crwdne722:0',
    'description'     => 'crwdns663:0crwdne663:0',
    'powered_by'      => 'crwdns723:0crwdne723:0',
    'about_this_site' => 'crwdns563:0crwdne563:0',
    'rss-feed'        => 'crwdns506:0crwdne506:0',
    'atom-feed'       => 'crwdns507:0crwdne507:0',
    'feed'            => 'crwdns275:0crwdne275:0',

];
