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
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => 'Ajastettu tapahtuma',
        'scheduled_at'  => ', ajoitettu :timestamp',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
            1 => 'Tutkitaan',
            2 => 'Tunnistettu',
            3 => 'Valvotaan',
            4 => 'Korjattu',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] järjestelmät ovat toiminnassa| [2, Inf] Kaikki järjestelmät ovat toiminnassa',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
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
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Tilaa',
        'manage'    => [
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
            'verify'             => [
                'text'   => "Ole hyvä ja varmista sähköpostitilauksesi :app_name tilanneraportteihin.\n:link",
                'html'   => '<p>Ole hyvä ja varmista sähköpostitilauksesi :app_name tilanneraportteihin.</p>',
                'button' => 'Vahvista tilaus',
            ],
            'maintenance' => [
                'subject' => '[Määräaikaishuolto] :name',
            ],
            'incident' => [
                'subject' => '[Uuden tapahtuman] :status:: nimi',
            ],
            'component' => [
                'subject'       => 'Komponentin tilan päivitys',
                'text'          => 'Komponentin :component_name status on vaihtunut. Komponentin status on nyt :component_human_status.\nTerveisin, :app:name',
                'html'          => '<p>Komponentin :component_name status on vaihtunut. Komponentin status on nyt :component_human_status.</p><p>Terveisin, :app:name</p>',
                'tooltip-title' => 'Tilaa ilmoitukset :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Sinut on kutsuttu ryhmään :app_name tila sivulle, rekisteröi tästä: \n:link\n. Kiitos, :app_name",
                'html' => '<p>Sinut on kutsttu ryhmään :app_name statussivulle. Rekisteröidy oheisesta linkistä.</p><p><a href=":link">:link</a></p><p>Terveisin, :app_name</p>',
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
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links"> Cachet</a>.',
    'about_this_site' => 'Tietoa sivustosta',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Statussyöte',

];
