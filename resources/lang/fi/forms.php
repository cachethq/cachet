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
        'enable_google2fa' => 'Ota käyttöön Googlen kaksivaiheisen todennuksen',
        'cache_driver'     => 'Välimuistin ajuri',
        'session_driver'   => 'Istunnon ajuri',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Käyttäjänimi tai sähköpostiosoite',
        'email'         => 'Sähköposti',
        'password'      => 'Salasana',
        '2fauth'        => 'Todennuskoodi',
        'invalid'       => 'Virheellinen käyttäjätunnus tai salasana',
        'invalid-token' => 'Invalid token',
        'cookies'       => 'Ota käyttöön evästeet kirjautuaksesi.',
        'rate-limit'    => 'Rate limit exceeded.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nimi',
        'status'             => 'Tila',
        'component'          => 'Komponentti',
        'message'            => 'Vesti',
        'message-help'       => 'You may also use Markdown.',
        'scheduled_at'       => 'Milloin huolto aika alkaa?',
        'incident_time'      => 'Milloin tämä tapaus tapahtui?',
        'notify_subscribers' => 'Ilmoita tilaajille?',
        'visibility'         => 'Tapahtuman näkyvyys',
        'public'             => 'Näytetään julkisesti',
        'logged_in_only'     => 'Näytetään vain kirjautuneille käyttäjille',
        'templates'          => [
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
            'name'               => 'Nimi',
            'collapsing'         => 'Valitse ryhmän näkyvyys tilasivulla',
            'visible'            => 'Aina laajennettu',
            'collapsed'          => 'Tiivistä ryhmä oletuksena',
            'collapsed_incident' => 'Tiivistä ryhmä, mutta laajenna kun on tapahtumia',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Nimi',
        'suffix'           => 'Pääte',
        'description'      => 'Kuvaus',
        'description-help' => 'You may also use Markdown.',
        'display-chart'    => 'Näytetäänkö kaaviot tila-sivulla?',
        'default-value'    => 'Oletusarvo',
        'calc_type'        => 'Calculation of metrics',
        'type_sum'         => 'Summa',
        'type_avg'         => 'Keskiarvo',
        'places'           => 'Desimaalipilkun paikka',
        'default_view'     => 'Oletusnäkymä',
        'threshold'        => 'How many minutes of threshold between metric points?',

        'points' => [
            'value' => 'Arvo',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Sivuston Nimi',
            'site-url'               => 'Sivuston URL-osoite',
            'display-graphs'         => 'Näyttää kaaviot tila-sivulla?',
            'about-this-page'        => 'Tietoa tästä sivustosta',
            'days-of-incidents'      => 'How many days of incidents to show?',
            'banner'                 => 'Bannerikuva',
            'banner-help'            => "It's recommended that you upload files no bigger than 930px wide .",
            'subscribers'            => 'Salli käyttäjien tilata sähköpostitilaukset?',
            'automatic_localization' => 'Automatically localise your status page to your visitor\'s language?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics seurantakoodi',
            'analytics_gosquared'    => 'GoSquared Analytics-koodi',
            'analytics_piwik_url'    => 'URL Piwik hallintaan (ilman http(s)://)',
            'analytics_piwik_siteid' => 'Piwik sivun tunnus',
        ],
        'localization' => [
            'site-timezone'          => 'Sivuston aikavyöhyke',
            'site-locale'            => 'Sivuston kieli',
            'date-format'            => 'Päivämäärän muoto',
            'incident-date-format'   => 'Incident timestamp format',
        ],
        'security' => [
            'allowed-domains'      => 'Sallittu toimialueet',
            'allowed-domains-help' => 'Pilkulla erotettuna. Edellä olevat toimialueet sallitaan automaattisesti oletuksena.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Taustaväri',
            'background-fills'        => 'Background fills (components, incidents, footer)',
            'banner-background-color' => 'Bannerin taustaväri',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Tekstin väri',
            'dashboard-login'         => 'Näytetäänkö hallintanäkymän painike alatunnisteessa?',
            'reds'                    => 'Punainen (virheilmoituksia varten)',
            'blues'                   => 'Blue (used for information)',
            'greens'                  => 'Green (used for success)',
            'yellows'                 => 'Yellow (used for alerts)',
            'oranges'                 => 'Orange (used for notices)',
            'metrics'                 => 'Metrics fill',
            'links'                   => 'Linkit',
        ],
    ],

    'user' => [
        'username'       => 'Käyttäjätunnus',
        'email'          => 'Sähköposti',
        'password'       => 'Salasana',
        'api-token'      => 'API tunnus',
        'api-token-help' => 'Regenerating your API token will prevent existing applications from accessing Cachet.',
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

    // Buttons
    'add'    => 'Lisää',
    'save'   => 'Tallenna',
    'update' => 'Päivitä',
    'create' => 'Luo',
    'edit'   => 'Muokkaa',
    'delete' => 'Poista',
    'submit' => 'Lähetä',
    'cancel' => 'Peruuta',
    'remove' => 'Poista',
    'invite' => 'Kutsu',
    'signup' => 'Rekisteröidy',

    // Other
    'optional' => '* Valinnainen',
];
