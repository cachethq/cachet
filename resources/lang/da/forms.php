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
        'password'         => 'Adgangskode',
        'site_name'        => 'Sidenavn',
        'site_domain'      => 'Sidens domæne',
        'site_timezone'    => 'Vælg din tidszone',
        'site_locale'      => 'Vælg dit sprog',
        'enable_google2fa' => 'Aktiver Googles to-trins bekræftelse',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Session Driver',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Brugernavn eller email',
        'email'         => 'Email',
        'password'      => 'Adgangskode',
        '2fauth'        => 'Bekræftelseskode',
        'invalid'       => 'Ugyldigt brugernavn eller adgangskode',
        'invalid-token' => 'Ugyldig token',
        'cookies'       => 'Du skal tillade cookies for at logge ind.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Navn',
        'status'             => 'Status',
        'component'          => 'Komponent',
        'message'            => 'Besked',
        'message-help'       => 'Du kan benytte Markdown.',
        'scheduled_at'       => 'Hvornår vil du have vedligeholdelse?',
        'incident_time'      => 'Hvornår skete hændelsen?',
        'notify_subscribers' => 'Underret abonnenter',
        'visibility'         => 'Hændelses synlighed',
        'public'             => 'Kan ses af alle',
        'logged_in_only'     => 'Kun synlig for brugere der er logget ind',
        'templates'          => [
            'name'     => 'Navn',
            'template' => 'Skabelon',
            'twig'     => 'Hændelse skabeloner kan gøre brug af <a href="http://twig.sensiolabs.org/" target="_blank"> Twigs</a> skabelon sprog.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Navn',
        'status'      => 'Status',
        'group'       => 'Gruppe',
        'description' => 'Beskrivelse',
        'link'        => 'Link',
        'tags'        => 'Mærkat',
        'tags-help'   => 'Komma adskilt.',
        'enabled'     => 'Komponent er aktivt',

        'groups' => [
            'name'               => 'Navn',
            'collapsing'         => 'Vælg synlighed af gruppen',
            'visible'            => 'Altid åben',
            'collapsed'          => 'Minimer gruppen som standard',
            'collapsed_incident' => 'Minimer gruppen, men hold den åben hvis der er fejl',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Navn',
        'suffix'           => 'Endelse',
        'description'      => 'Beskrivelse',
        'description-help' => 'Du kan også bruge Markdown.',
        'display-chart'    => 'Vis graf på statussiden?',
        'default-value'    => 'Standard værdi',
        'calc_type'        => 'Beregning af grafer',
        'type_sum'         => 'Sum',
        'type_avg'         => 'Gennemsnit',
        'places'           => 'Antal decimaler',
        'default_view'     => 'Standardvisning',
        'threshold'        => 'How many minutes of threshold between metric points?',

        'points' => [
            'value' => 'Værdi',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Sidenavn',
            'site-url'               => 'Sidens URL',
            'display-graphs'         => 'Display graphs on status page?',
            'about-this-page'        => 'Om',
            'days-of-incidents'      => 'Hvor mange dage skal der vises hændelser for?',
            'banner'                 => 'Banner billede',
            'banner-help'            => 'Det anbefales ikke at uploade billeder bredere end 930px.',
            'subscribers'            => 'Tillad folk at tilmelde sig email underretninger?',
            'automatic_localization' => 'Automatically localise your status page to your visitor\'s language?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics kode',
            'analytics_gosquared'    => 'GoSquared Analytics kode',
            'analytics_piwik_url'    => 'URL til Piwik installation (uden http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s site id',
        ],
        'localization' => [
            'site-timezone'          => 'Tidszone',
            'site-locale'            => 'Sprog på siden',
            'date-format'            => 'Datoformat',
            'incident-date-format'   => 'Datoformat for hændelser',
        ],
        'security' => [
            'allowed-domains'      => 'Tilladte domæner',
            'allowed-domains-help' => 'Komma adskilt. Domænet ovenfor har automatisk adgang.',
        ],
        'stylesheet' => [
            'custom-css' => 'Tilpasset CSS',
        ],
        'theme' => [
            'background-color'        => 'Baggrundsfarve',
            'background-fills'        => 'Baggrundsfyld (Komponenter, hændelser og footer)',
            'banner-background-color' => 'Baggrundsfarve bag banneret',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Slå fuldbrede bannere til?',
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
        'password'       => 'Adgangskode',
        'api-token'      => 'API nøgle',
        'api-token-help' => 'Hvis du regenerere din API nøgle vil eksisterende applikationer ikke kunne tilgå API\'et.',
        'gravatar'       => 'Ændre dit profilbillede hos Gravatar.',
        'user_level'     => 'Brugertype',
        'levels'         => [
            'admin' => 'Administrator',
            'user'  => 'Bruger',
        ],
        '2fa' => [
            'help' => 'Brug totrinsbekræftelse for større sikkerhed på din konto. Du skal installere <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> eller en lignende app på din mobile enhed, for at kunne logge ind med nøgler fra appen.',
        ],
        'team' => [
            'description' => 'Inviter brugere, ved at indtaste dere email adresser her.',
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => 'Tilføj',
    'save'   => 'Gem',
    'update' => 'Opdatér',
    'create' => 'Opret',
    'edit'   => 'Rediger',
    'delete' => 'Slet',
    'submit' => 'Send',
    'cancel' => 'Afbryd',
    'remove' => 'Fjern',
    'invite' => 'Inviter',
    'signup' => 'Tilmeld',

    // Other
    'optional' => '* ikke påkrævet',
];
