<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    // Setup form fields
    'setup' => [
        'email'            => 'crwdns212:0crwdne212:0',
        'username'         => 'crwdns374:0crwdne374:0',
        'password'         => 'crwdns375:0crwdne375:0',
        'site_name'        => 'crwdns376:0crwdne376:0',
        'site_domain'      => 'crwdns377:0crwdne377:0',
        'site_timezone'    => 'crwdns378:0crwdne378:0',
        'site_locale'      => 'crwdns379:0crwdne379:0',
        'enable_google2fa' => 'crwdns380:0crwdne380:0',
    ],

    // Login form fields
    'login' => [
        'email'         => 'crwdns217:0crwdne217:0',
        'password'      => 'crwdns381:0crwdne381:0',
        '2fauth'        => 'crwdns382:0crwdne382:0',
        'invalid'       => 'crwdns383:0crwdne383:0',
        'invalid-token' => 'crwdns384:0crwdne384:0',
        'cookies'       => 'crwdns480:0crwdne480:0',
    ],

    // Incidents form fields
    'incidents' => [
        'name'           => 'crwdns219:0crwdne219:0',
        'status'         => 'crwdns385:0crwdne385:0',
        'component'      => 'crwdns386:0crwdne386:0',
        'message'        => 'crwdns387:0crwdne387:0',
        'message-help'   => 'crwdns388:0crwdne388:0',
        'scheduled_at'   => 'crwdns464:0crwdne464:0',
        'incident_time'  => 'crwdns481:0crwdne481:0',
        'visibility'     => 'crwdns482:0crwdne482:0',
        'public'         => 'crwdns483:0crwdne483:0',
        'logged_in_only' => 'crwdns484:0crwdne484:0',
        'templates'      => [
            'name'     => 'crwdns389:0crwdne389:0',
            'template' => 'crwdns390:0crwdne390:0',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'crwdns225:0crwdne225:0',
        'status'      => 'crwdns391:0crwdne391:0',
        'group'       => 'crwdns392:0crwdne392:0',
        'description' => 'crwdns393:0crwdne393:0',
        'link'        => 'crwdns394:0crwdne394:0',
        'tags'        => 'crwdns395:0crwdne395:0',
        'tags-help'   => 'crwdns396:0crwdne396:0',

        'groups' => [
            'name' => 'crwdns397:0crwdne397:0',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'crwdns465:0crwdne465:0',
        'suffix'           => 'crwdns466:0crwdne466:0',
        'description'      => 'crwdns467:0crwdne467:0',
        'description-help' => 'crwdns468:0crwdne468:0',
        'display-chart'    => 'crwdns469:0crwdne469:0',
        'default-value'    => 'crwdns470:0crwdne470:0',
        'calc_type'        => 'crwdns475:0crwdne475:0',
        'type_sum'         => 'crwdns476:0crwdne476:0',
        'type_avg'         => 'crwdns477:0crwdne477:0',

        'points' => [
            'value' => 'crwdns471:0crwdne471:0',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'            => 'crwdns233:0crwdne233:0',
            'site-url'             => 'crwdns398:0crwdne398:0',
            'site-timezone'        => 'crwdns399:0crwdne399:0',
            'site-locale'          => 'crwdns400:0crwdne400:0',
            'date-format'          => 'crwdns401:0crwdne401:0',
            'incident-date-format' => 'crwdns485:0crwdne485:0',
            'display-graphs'       => 'crwdns472:0crwdne472:0',
            'about-this-page'      => 'crwdns402:0crwdne402:0',
            'days-of-incidents'    => 'crwdns403:0crwdne403:0',
            'banner'               => 'crwdns404:0crwdne404:0',
            'banner-help'          => "crwdns405:0crwdne405:0",
            'analytics_google'     => 'crwdns486:0crwdne486:0',
            'analytics_gosquared'  => 'crwdns487:0crwdne487:0',
        ],
        'security' => [
            'allowed-domains'      => 'crwdns407:0crwdne407:0',
            'allowed-domains-help' => 'crwdns408:0crwdne408:0',
        ],
        'stylesheet' => [
            'custom-css' => 'crwdns409:0crwdne409:0',
        ],
        'theme' => [
            'background-color' => 'crwdns410:0crwdne410:0',
            'text-color'       => 'crwdns411:0crwdne411:0',
        ],
    ],

    'user' => [
        'username'       => 'crwdns244:0crwdne244:0',
        'email'          => 'crwdns412:0crwdne412:0',
        'password'       => 'crwdns413:0crwdne413:0',
        'api-token'      => 'crwdns414:0crwdne414:0',
        'api-token-help' => 'crwdns436:0crwdne436:0',
        '2fa'            => [
            'help' => 'crwdns416:0crwdne416:0',
        ],
    ],

    // Buttons
    'add'    => 'crwdns249:0crwdne249:0',
    'save'   => 'crwdns250:0crwdne250:0',
    'update' => 'crwdns251:0crwdne251:0',
    'create' => 'crwdns252:0crwdne252:0',
    'edit'   => 'crwdns253:0crwdne253:0',
    'delete' => 'crwdns254:0crwdne254:0',
    'submit' => 'crwdns255:0crwdne255:0',
    'cancel' => 'crwdns256:0crwdne256:0',
    'remove' => 'crwdns257:0crwdne257:0',

    // Other
    'optional' => 'crwdns417:0crwdne417:0',
];
