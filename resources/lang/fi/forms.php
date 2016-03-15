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
        '2fauth'        => 'Authentication Code',
        'invalid'       => 'Virheellinen käyttäjätunnus tai salasana',
        'invalid-token' => 'Invalid token',
        'cookies'       => 'Ota käyttöön evästeet kirjautuaksesi.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nimi',
        'status'             => 'Tila',
        'component'          => 'Komponentti',
        'message'            => 'Vesti',
        'message-help'       => 'You may also use Markdown.',
        'scheduled_at'       => 'When to schedule the maintenance for?',
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
        'tags-help'   => 'Comma separated.',
        'enabled'     => 'Komponentti käytössä?',

        'groups' => [
            'name'      => 'Nimi',
            'collapsed' => 'Collapse the group by default?',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Nimi',
        'suffix'           => 'Pääte',
        'description'      => 'Kuvaus',
        'description-help' => 'You may also use Markdown.',
        'display-chart'    => 'Display chart on status page?',
        'default-value'    => 'Oletusarvo',
        'calc_type'        => 'Calculation of metrics',
        'type_sum'         => 'Summa',
        'type_avg'         => 'Keskiarvo',
        'places'           => 'Decimal places',
        'default_view'     => 'Default view',

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
            'banner'                 => 'Otsikkokuvan kuva',
            'banner-help'            => "It's recommended that you upload files no bigger than 930px wide .",
            'subscribers'            => 'Salli käyttäjien tilata sähköpostitilaukset?',
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
            'custom-css' => 'Mukautettu tyylisivu',
        ],
        'theme' => [
            'background-color'        => 'Taustaväri',
            'background-fills'        => 'Background fills (components, incidents, footer)',
            'banner-background-color' => 'Banner background color',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Tekstin väri',
            'dashboard-login'         => 'Show dashboard button in the footer?',
            'reds'                    => 'Red (used for errors)',
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
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'Käyttäjätaso',
        'levels'         => [
            'admin' => 'Ylläpito',
            'user'  => 'Käyttäjä',
        ],
        '2fa' => [
            'help' => 'Enabling two factor authentication increases security of your account. You will need to download <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> or a similar app on to your mobile device. When you login you will be asked to provide a token generated by the app.',
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
