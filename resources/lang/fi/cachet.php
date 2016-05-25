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
        'none'          => 'Ei raportoitavia tapauksia',
        'past'          => 'Aikaisemmat tapahtumat',
        'previous_week' => 'Edellinen viikko',
        'next_week'     => 'Seuraava viikko',
        'scheduled'     => 'Määräaikaishuolto',
        'scheduled_at'  => ', ajoitettu :timestamp',
        'status'        => [
            0 => 'Ajoitettu', // TODO: Hopefully remove this.
            1 => 'Tutkitaan',
            2 => 'Tunnistettu',
            3 => 'Valvotaan',
            4 => 'Korjattu',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] järjestelmät ovat toiminnassa| [2, Inf] Kaikki järjestelmät ovat toiminnassa',
        'bad'   => '[0,1] järjestelmä on tällä hetkellä ongelmia| [2, Inf] Joissakin järjestelmissä on ongelmia',
        'major' => '[0,1] Palveluissa on katkoksia| [2, Inf] Joissakin järjestelmissä on merkittävä katkoksia',
    ],

    'api' => [
        'regenerate' => 'Luo API-avain',
        'revoke'     => 'Peruuttaa API avain',
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
        'subscribe' => 'Tilaa uusimmat päivitykset',
        'button'    => 'Tilaa',
        'manage'    => [
            'no_subscriptions' => 'Olet tällä hetkellä tilannut kaikki ilmoitukset.',
            'my_subscriptions' => 'Olet tällä hetkellä tilannut seuraavat ilmoitukset.',
        ],
        'email' => [
            'subscribe'          => 'Tilaa sähköpostiin päivitykset.',
            'subscribed'         => 'Olet tilannut sähköposti-ilmoitukset, tarkista sähköpostisi vahvistaaksesi tilauksen.',
            'verified'           => 'Sinun sähköposti tilaus on vahvistettu. Kiitos!',
            'manage'             => 'Hallinnoi tilaustasi.',
            'unsubscribe'        => 'Poista sähköposti tilauksesi.',
            'unsubscribed'       => 'Sähköpostitilauksesi on peruuttu.',
            'failure'            => 'Jokin meni vikaan sähköpostitilauksen käsittelyssä.',
            'already-subscribed' => 'Ei voida tilata ilmoituksia sähköpostilla :email koska on jo tilattu.',
            'verify'             => [
                'text'           => "Ole hyvä ja vahvista :app_name tilasivun sähköpostitilauksille.\n:link\nKiittäen, :app_name",
                'html-preheader' => 'Vahvista sähköposti tilaus :app_name tila-päivityksiä.',
                'html'           => '<p>Vahvista sähköposti tilaus :app_name Status Page.</p> <p><a href=":link">: link</a></p> <p>Kiitos,: app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Uusi huolto on ajastettu :app_name.\n Kiitos, :app_name",
                'html-preheader' => 'Uusi huolto on ajastettu :app_name.',
                'html'           => '<p>Uusi huolto on ajastettu :app_name.</p>',
            ],
            'incident' => [
                'text'           => "Uusi tapahtuma on raportoitu
: app_name.\nKiitos, :app_name",
                'html-preheader' => 'Uusi tapahtuma on ilmoitettu :app_name.',
                'html'           => '<p>Uusi tapahtuma on raportoitu
:app_name.</p> <p>Kiitos,: app_name</p>',
            ],
            'component' => [
                'subject'        => 'Komponentin tilan päivitys',
                'text'           => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html-preheader' => 'Component Update from :app_name',
                'html'           => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
                'tooltip-title'  => 'Tilaa ilmoitukset :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "Sinut on kutsuttu ryhmään :app_name tila sivulle, rekisteröi tästä: \n:link\n. Kiitos, :app_name",
                'html-preheader' => 'You have been invited to the team :app_name.',
                'html'           => '<p>You have been invited to the team :app_name status page, to sign up follow the next link.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
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
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Tietoa sivustosta',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
