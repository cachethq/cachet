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
        'last_updated' => 'Viimeksi päivitetty :timestamp',
        'status'       => [
            0 => 'Tuntematon',
            1 => 'Toiminnassa',
            2 => 'Suorituskykyyn liittyviä ongelmia',
            3 => 'Osittainen katkos',
            4 => 'Merkittävä katkos',
        ],
        'group' => [
            'other' => 'Muut komponentit',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Ei raportoitavia tapauksia',
        'past'         => 'Aikaisemmat tapahtumat',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Ajastettu tapahtuma',
        'scheduled_at' => ', ajoitettu :timestamp',
        'posted'       => 'Posted :timestamp',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => 'Tutkitaan',
            2 => 'Tunnistettu',
            3 => 'Valvotaan',
            4 => 'Korjattu',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Tulossa',
            1 => 'In Progress',
            2 => 'Valmis',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] järjestelmät ovat toiminnassa| [2, Inf] Kaikki järjestelmät ovat toiminnassa',
        'bad'   => '[0,1] järjestelmässä on tällä hetkellä ongelmia| [2, Inf] Joissakin järjestelmissä on ongelmia',
        'major' => '[0,1] Palvelussa on merkittävä katkos| [2, Inf] Joissakin järjestelmissä on merkittävä katkoksia',
    ],

    'api' => [
        'regenerate' => 'Luo API-avain',
        'revoke'     => 'Peruuta API-avain',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Viimeisen tunnin',
            'hourly'    => 'Viimeisen 12 tunnin',
            'weekly'    => 'Viikko',
            'monthly'   => 'Kuukausi',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'   => 'Tilaa uusimmat päivitykset',
        'unsubscribe' => 'Unsubscribe at :link',
        'button'      => 'Tilaa',
        'manage'      => [
            'no_subscriptions' => 'Olet tällä hetkellä tilannut kaikki ilmoitukset.',
            'my_subscriptions' => 'Olet tällä hetkellä tilannut seuraavat ilmoitukset.',
        ],
        'email' => [
            'subscribe'          => 'Tilaa sähköpostiin päivitykset.',
            'subscribed'         => 'Olet tilannut sähköposti-ilmoitukset, tarkista sähköpostisi vahvistaaksesi tilauksen.',
            'verified'           => 'Sähköpostitilauksesi on vahvistettu. Kiitos!',
            'manage'             => 'Hallinnoi tilaustasi',
            'unsubscribe'        => 'Lopeta sähköpostitilaus.',
            'unsubscribed'       => 'Sähköpostitilauksesi on peruutettu.',
            'failure'            => 'Jokin meni vikaan sähköpostitilauksen käsittelyssä.',
            'already-subscribed' => 'Ei voida tilata ilmoituksia sähköpostilla :email koska on jo tilattu.',
        ],
    ],

    'signup' => [
        'title'    => 'Rekisteröidy',
        'username' => 'Käyttäjätunnus',
        'email'    => 'Sähköposti',
        'password' => 'Salasana',
        'success'  => 'Tilisi on luotu.',
        'failure'  => 'Jokin meni vikaan sähköpostitilauksen käsittelyssä.',
    ],

    'system' => [
        'update' => 'Cachetistä on saatavilla uudempi versio. Katso miten päivitetään uudempaan versioon <a href="https://docs.cachethq.io/docs/updating-cachet">täältä</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Sulje',
        'subscribe' => [
            'title'  => 'Tilaa sähköpostiin ilmoituksia komponenttien tilasta',
            'body'   => 'Kirjoita sähköpostiosoitteesi tilaaksesi päivitykset tästä komponetista. Jos olet jo tilaaja, saat jo sähköposti ilmoituksia tästä komponetista.',
            'button' => 'Tilaa',
        ],
    ],

    // Other
    'home'            => 'Etusivu',
    'description'     => 'Pysy ajan tasalla tilaamalla uusimmat päivitykset :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links"> Cachet</a>.',
    'timezone'        => 'Aika näytetään :timezone.',
    'about_this_site' => 'Tietoa sivustosta',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Statussyöte',

];
