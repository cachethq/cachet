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

    // Setup form fields
    'setup' => [
        'email'            => 'Sähköposti',
        'username'         => 'Käyttäjätunnus',
        'password'         => 'Salasana',
        'site_name'        => 'Sivuston Nimi',
        'site_domain'      => 'Sivuston verkkotunnus',
        'site_timezone'    => 'Valitse aikavyöhykkeesi',
        'site_locale'      => 'Valitse kielesi',
        'enable_google2fa' => 'Ota käyttöön Googlen kaksivaiheisen todennus',
        'cache_driver'     => 'Välimuistin ajuri',
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'Istunnon ajuri',
        'mail_driver'      => 'Sähköposti ajuri',
        'mail_host'        => 'Sähköposti isäntä',
        'mail_address'     => 'Sähköpostin lähettäjäosoite',
        'mail_username'    => 'Sähköpostin käyttäjänimi',
        'mail_password'    => 'Sähköpostin salasana',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Käyttäjänimi tai sähköpostiosoite',
        'email'         => 'Sähköposti',
        'password'      => 'Salasana',
        '2fauth'        => 'Todennuskoodi',
        'invalid'       => 'Virheellinen käyttäjätunnus tai salasana',
        'invalid-token' => 'Istuntokohtainen avain ei kelpaa',
        'cookies'       => 'Ota käyttöön evästeet kirjautuaksesi.',
        'rate-limit'    => 'Rate limit exceeded.',
        'remember_me'   => 'Remember me',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nimi',
        'status'             => 'Tila',
        'component'          => 'Komponentti',
        'message'            => 'Viesti',
        'message-help'       => 'You may also use Markdown.',
        'occurred_at'        => 'When did this incident occur?',
        'notify_subscribers' => 'Ilmoita tilaajille?',
        'visibility'         => 'Tapahtuman näkyvyys',
        'stick_status'       => 'Stick Incident',
        'stickied'           => 'Stickied',
        'not_stickied'       => 'Not Stickied',
        'public'             => 'Näytetään julkisesti',
        'logged_in_only'     => 'Näytetään vain kirjautuneille käyttäjille',
        'templates'          => [
            'name'     => 'Nimi',
            'template' => 'Malli',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    'schedules' => [
        'name'         => 'Nimi',
        'status'       => 'Tila',
        'message'      => 'Viesti',
        'message-help' => 'You may also use Markdown.',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
            'name'     => 'Nimi',
            'template' => 'Malli',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nimi',
        'status'      => 'Tila',
        'group'       => 'Ryhmä',
        'description' => 'Kuvaus',
        'link'        => 'Linkki',
        'tags'        => 'Tunnisteet',
        'tags-help'   => 'Erottele pilkuilla.',
        'enabled'     => 'Komponentti käytössä?',

        'groups' => [
            'name'                     => 'Nimi',
            'collapsing'               => 'Laajenna tai tiivistä asetukset',
            'visible'                  => 'Aina laajennettu',
            'collapsed'                => 'Tiivistä ryhmä oletuksena',
            'collapsed_incident'       => 'Tiivistä ryhmä, mutta laajenna kun on tapahtumia',
            'visibility'               => 'Näkyvyys',
            'visibility_public'        => 'Julkinen näkyvyys',
            'visibility_authenticated' => 'Näkyvissä vain kirjautuneille käyttäjille',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Nimi',
        'description'        => 'Kuvaus',
        'start_at'           => 'Ajasta alkamisaika',
        'timezone'           => 'Aikavyöhyke',
        'schedule_frequency' => 'Schedule frequency (in seconds)',
        'completion_latency' => 'Completion latency (in seconds)',
        'group'              => 'Ryhmä',
        'active'             => 'Aktiivinen?',
        'groups'             => [
            'name' => 'Ryhmänimi',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Nimi',
        'suffix'                   => 'Pääte',
        'description'              => 'Kuvaus',
        'description-help'         => 'You may also use Markdown.',
        'display-chart'            => 'Näytetäänkö kaaviot tila-sivulla?',
        'default-value'            => 'Oletusarvo',
        'calc_type'                => 'Calculation of metrics',
        'type_sum'                 => 'Summa',
        'type_avg'                 => 'Keskiarvo',
        'places'                   => 'Desimaalipilkun paikka',
        'default_view'             => 'Oletusnäkymä',
        'threshold'                => 'How many minutes of threshold between metric points?',
        'visibility'               => 'Näkyvyys',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => 'Arvo',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                    => 'Sivuston Nimi',
            'site-url'                     => 'Sivuston URL-osoite',
            'display-graphs'               => 'Näyttää kaaviot tila-sivulla?',
            'about-this-page'              => 'Tietoa tästä sivustosta',
            'days-of-incidents'            => 'Monenko päivän ajalta tapaukset näytetään?',
            'time_before_refresh'          => 'Status page refresh rate (in seconds).',
            'banner'                       => 'Bannerikuva',
            'banner-help'                  => "On suositeltavaa, ettet lataa yli 930px leveitä kuvia.",
            'subscribers'                  => 'Salli käyttäjien tilata sähköpostitilaukset?',
            'skip_subscriber_verification' => 'Skip verifying of users? (Be warned, you could be spammed)',
            'automatic_localization'       => 'Lokalisoidaanko statussivu automaattisesti kävijän kielen mukaan?',
            'enable_external_dependencies' => 'Enable Third Party Dependencies (Google Fonts, Trackers, etc...)',
            'show_timezone'                => 'Näytä aikavyöhyke tilat sivulla.',
            'only_disrupted_days'          => 'Only show days containing incidents in the timeline?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics seurantakoodi',
            'analytics_gosquared'    => 'GoSquared Analytics-koodi',
            'analytics_piwik_url'    => 'URL Piwik hallintaan (ilman http(s)://)',
            'analytics_piwik_siteid' => 'Piwik sivun tunnus',
        ],
        'localization' => [
            'site-timezone'        => 'Sivuston aikavyöhyke',
            'site-locale'          => 'Sivuston kieli',
            'date-format'          => 'Päivämäärän muoto',
            'incident-date-format' => 'Tapauksen aikaleiman muoto',
        ],
        'security' => [
            'allowed-domains'      => 'Sallittu toimialueet',
            'allowed-domains-help' => 'Pilkulla erotettuna. Edellä olevat toimialueet sallitaan automaattisesti oletuksena.',
        ],
        'stylesheet' => [
            'custom-css' => 'Mukautettu tyylisivu',
        ],
        'theme' => [
            'background-color'        => 'Taustaväri',
            'background-fills'        => 'Taustaväri (komponentit, tapaukset, alatunniste)',
            'banner-background-color' => 'Bannerin taustaväri',
            'banner-padding'          => 'Bannerin tyhjä tila',
            'fullwidth-banner'        => 'Käytetäänkö täyslevyistä banneria?',
            'text-color'              => 'Tekstin väri',
            'dashboard-login'         => 'Näytetäänkö hallintanäkymän linkki alatunnisteessa?',
            'reds'                    => 'Punainen (virheilmoituksia varten)',
            'blues'                   => 'Sininen (käytetään infoteksteissä)',
            'greens'                  => 'Vihreä (käytetään onnistumisen merkiksi)',
            'yellows'                 => 'Keltainen (käytetään varoituksissa)',
            'oranges'                 => 'Oranssi (käytetään huomautuksissa)',
            'metrics'                 => 'Metrics fill',
            'links'                   => 'Linkit',
        ],
    ],

    'user' => [
        'username'       => 'Käyttäjätunnus',
        'email'          => 'Sähköposti',
        'password'       => 'Salasana',
        'api-token'      => 'API tunnus',
        'api-token-help' => 'API-avaimen uudelleenluominen estää olemassa olevia sovelluksia käyttämästä Cachetia.',
        'gravatar'       => 'Muuta profiilikuvaa Gravatar palvelussa.',
        'user_level'     => 'Käyttäjätaso',
        'levels'         => [
            'admin' => 'Ylläpito',
            'user'  => 'Käyttäjä',
        ],
        '2fa' => [
            'help' => 'Ottamalla kaksivaiheisen todennuksen käyttöön parantaaksesi turvallisuutta käyttäjätilillesi. Sinun tulee ladata <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> sovellus tai vastaava puhelimeesi. Kun kirjaudut, sinua pyydetään antamaan koodi sovelluksesta.',
        ],
        'team' => [
            'description' => 'Kutsu ryhmääsi jäseniä antamalla heidän sähköpostiosoitteensa täällä.',
            'email'       => 'Sähköposti #:id',
        ],
    ],

    'general' => [
        'timezone' => 'Valitse aikavyöhyke',
    ],

    // Buttons
    'add'            => 'Lisää',
    'save'           => 'Tallenna',
    'update'         => 'Päivitä',
    'create'         => 'Luo',
    'edit'           => 'Muokkaa',
    'delete'         => 'Poista',
    'submit'         => 'Lähetä',
    'cancel'         => 'Peruuta',
    'remove'         => 'Poista',
    'invite'         => 'Kutsu',
    'signup'         => 'Rekisteröidy',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* Valinnainen',
];
