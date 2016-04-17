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
        'site_name'        => 'Sidenavn',
        'site_domain'      => 'Sidens domæne',
        'site_timezone'    => 'Vælg tidszone',
        'site_locale'      => 'Vælg sprog',
        'enable_google2fa' => 'Slå Google Two Factor Log ind til',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Session Driver',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Brugernavn eller email',
        'email'         => 'Email',
        'password'      => 'Adgangskode',
        '2fauth'        => 'Godkendelses kode',
        'invalid'       => 'Ugyldigt brugernavn eller adgangskode',
        'invalid-token' => 'Ugyldig kode',
        'cookies'       => 'Du skal tillade cookies for at kunne logge ind.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Name',
        'status'             => 'Status',
        'component'          => 'Component',
        'message'            => 'Message',
        'message-help'       => 'Du kan benytte Markdown.',
        'scheduled_at'       => 'Hvornår skal vedligeholdelses vinduet skeduleres til?',
        'incident_time'      => 'Hvornår skete hændelsen?',
        'notify_subscribers' => 'Underret abonnenter',
        'visibility'         => 'Hændelses synlighed',
        'public'             => 'Synlig for offentligheden',
        'logged_in_only'     => 'Kun synlig for brugere der er logget ind',
        'templates'          => [
            'name'     => 'Navn',
            'template' => 'Template',
            'twig'     => 'Hændelse skabeloner kan gøre brug af <a href="http://twig.sensiolabs.org/" target="_blank"> Twigs</a> skabelon sprog.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Navn',
        'status'      => 'Status',
        'group'       => 'Group',
        'description' => 'Description',
        'link'        => 'Link',
        'tags'        => 'Mærkat',
        'tags-help'   => 'Komma adskilt.',
        'enabled'     => 'Component enabled?',

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
        'suffix'           => 'Suffix',
        'description'      => 'Beskrivelse',
        'description-help' => 'Du kan også bruge Markdown.',
        'display-chart'    => 'Vis graf på statussiden?',
        'default-value'    => 'Default værdi',
        'calc_type'        => 'Beregning af grafer',
        'type_sum'         => 'Sum',
        'type_avg'         => 'Average',
        'places'           => 'Antal decimaler',
        'default_view'     => 'Standardvisning',

        'points' => [
            'value' => 'Value',
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
            'banner-help'            => "Det anbefales ikke at uploade billeder bredere end 930px.",
            'subscribers'            => 'Tillad at man kan tilmelde sig emailnotifikationer?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics kode',
            'analytics_gosquared'    => 'GoSquared Analytics kode',
            'analytics_piwik_url'    => 'URL til Piwik installation (uden http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s id',
        ],
        'localization' => [
            'site-timezone'          => 'Tidszone',
            'site-locale'            => 'Sprog',
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
        'username'       => 'Username',
        'email'          => 'Email',
        'password'       => 'Adgangskode',
        'api-token'      => 'API nøgle',
        'api-token-help' => 'Hvis du regenerere din API nøgle vil eksisterende applikationer ikke kunne tilgå API\'et.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'Brugertype',
        'levels'         => [
            'admin' => 'Administrator',
            'user'  => 'Bruger',
        ],
        '2fa' => [
            'help' => 'Brug Two-Factor login for større sikkerhed på din konto. Du skal så nok installere <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> eller lignende på din mobile enked for at kunne logge ind med nøgler fra appen.',
        ],
        'team' => [
            'description' => 'Invite your team members by entering their email addresses here.',
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => 'Tilføj',
    'save'   => 'Save',
    'update' => 'Opdatér',
    'create' => 'Create',
    'edit'   => 'Editér',
    'delete' => 'Delete',
    'submit' => 'Gem',
    'cancel' => 'Cancel',
    'remove' => 'Remove',
    'invite' => 'Invite',
    'signup' => 'Sign Up',

    // Other
    'optional' => '* ej påkrævet',
];
