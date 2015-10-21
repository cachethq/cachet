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
        'email'            => 'Email',
        'username'         => 'Brugernavn',
        'password'         => 'Kodeord',
        'site_name'        => 'Sidens navn',
        'site_domain'      => 'Sidens domæne',
        'site_timezone'    => 'Vælg tidszone',
        'site_locale'      => 'Vælg sprog',
        'enable_google2fa' => 'Slå Google Two Factor Log ind til',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Session Driver',
    ],

    // Login form fields
    'login' => [
        'email'         => 'Email',
        'password'      => 'Kodeord',
        '2fauth'        => 'Godkendelses kode',
        'invalid'       => 'Ugyldig brugernavn eller kodeord',
        'invalid-token' => 'Ugyldig kode',
        'cookies'       => 'Du skal tillade cookies for at kunne logge ind.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Name',
        'status'             => 'Status',
        'component'          => 'Komponent',
        'message'            => 'Besked',
        'message-help'       => 'Du kan benytte Markdown.',
        'scheduled_at'       => 'Hvornår skal vedligeholdelses vinduet skeduleres til?',
        'incident_time'      => 'Hvornår skete hændelsen?',
        'notify_subscribers' => 'Underret abonnenter',
        'visibility'         => 'Synlig',
        'public'             => 'Synlig for offentligheden',
        'logged_in_only'     => 'Kun synlig for brugere der er logget ind',
        'templates'          => [
            'name'     => 'Navn',
            'template' => 'Skabelon',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Navn',
        'status'      => 'Status',
        'group'       => 'Gruppe',
        'description' => 'Beskrivelse',
        'link'        => 'Link',
        'tags'        => 'Tags',
        'tags-help'   => 'Komma adskilt.',

        'groups' => [
            'name' => 'Navn',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Navn',
        'suffix'           => 'Suffix',
        'description'      => 'Beskrivelse',
        'description-help' => 'Der kan benyttes Markdown.',
        'display-chart'    => 'Vis graf på statussiden?',
        'default-value'    => 'Default værdi',
        'calc_type'        => 'Beregning af grafer',
        'type_sum'         => 'Sum',
        'type_avg'         => 'Gennemsnit',
        'places'           => 'Antal decimaler',

        'points' => [
            'value' => 'Værdi',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Sidens navn',
            'site-url'               => 'Sidens URL',
            'site-timezone'          => 'Tidszone',
            'site-locale'            => 'Sprog',
            'date-format'            => 'Datoformat',
            'incident-date-format'   => 'Datoformat for hændelser',
            'display-graphs'         => 'Vis grafer på statussiden?',
            'about-this-page'        => 'Om',
            'days-of-incidents'      => 'Hvor mange dage skal der vises hændelser for?',
            'banner'                 => 'Bannerbillede',
            'banner-help'            => 'Det anbefales ikke at uploade billeder bredere end 930px.',
            'analytics_google'       => 'Google Analytics kode',
            'analytics_gosquared'    => 'GoSquared Analytics kode',
            'analytics_piwik_url'    => 'URL til Piwik installation (uden http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s id',
            'subscribers'            => 'Tillad at man kan tilmelde sig emailnotifikationer?',
        ],
        'security' => [
            'allowed-domains'      => 'Tilladte domæner',
            'allowed-domains-help' => 'Komma adskilt. Domænet ovenfor har automatisk adgang.',
        ],
        'stylesheet' => [
            'custom-css' => 'Tilpasset stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Baggrundsfarve',
            'background-fills'        => 'Baggrundsfyld (Komponenter, hændelser og footer)',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Tekstfarve',
            'dashboard-login'         => 'Vis oversigtsside ikon i bunden af siden?',
            'reds'                    => 'Rød (Brugt til fejl)',
            'blues'                   => 'Blå (Brugt til information)',
            'greens'                  => 'Grøn (Brugt til success)',
            'yellows'                 => 'Gul (Brugt til advarsler)',
            'oranges'                 => 'Orange (Brugt til noter)',
            'metrics'                 => 'Graffyld',
            'links'                   => 'Links',
        ],
    ],

    'user' => [
        'username'       => 'Brugernavn',
        'email'          => 'Email',
        'password'       => 'Kodeord',
        'api-token'      => 'API nøgle',
        'api-token-help' => 'Hvis du regenerere din API nøgle vil eksisterende applikationer ikke kunne tilgå API\'et.',
        'user_level'     => 'Brugertype',
        'levels'         => [
            'admin' => 'Administrator',
            'user'  => 'Bruger',
        ],
        '2fa' => [
            'help' => 'Brug Two-Factor login for større sikkerhed på din konto. Du skal så nok installere <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> eller lignende på din mobile enked for at kunne logge ind med nøgler fra appen.',
        ],
    ],

    // Buttons
    'add'    => 'Tilføj',
    'save'   => 'Gem',
    'update' => 'Opdatér',
    'create' => 'Opret',
    'edit'   => 'Editér',
    'delete' => 'Slet',
    'submit' => 'Gem',
    'cancel' => 'Afbryd',
    'remove' => 'Fjern',

    // Other
    'optional' => '* ej påkrævet',
];
