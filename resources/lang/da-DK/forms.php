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
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'Session Driver',
        'mail_driver'      => 'Mail driver',
        'mail_host'        => 'Mail server',
        'mail_address'     => 'Mail afsender adresse',
        'mail_username'    => 'Mail brugernavn',
        'mail_password'    => 'Mail adgangskode',
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
        'rate-limit'    => 'Grænsen er overskredet.',
        'remember_me'   => 'Husk mig',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Navn',
        'status'             => 'Status',
        'component'          => 'Komponent',
        'message'            => 'Besked',
        'message-help'       => 'Du kan benytte Markdown.',
        'occurred_at'        => 'Hvornår skete hændelsen?',
        'notify_subscribers' => 'Underret abonnenter',
        'visibility'         => 'Hændelses synlighed',
        'stick_status'       => 'Lås hændelse',
        'stickied'           => 'Låst',
        'not_stickied'       => 'Ikke låst',
        'public'             => 'Kan ses af alle',
        'logged_in_only'     => 'Kun synlig for brugere der er logget ind',
        'templates'          => [
            'name'     => 'Navn',
            'template' => 'Skabelon',
            'twig'     => 'Hændelse skabeloner kan gøre brug af <a href="http://twig.sensiolabs.org/" target="_blank"> Twigs</a> skabelon sprog.',
        ],
    ],

    'schedules' => [
        'name'         => 'Navn',
        'status'       => 'Status',
        'message'      => 'Besked',
        'message-help' => 'Du kan benytte Markdown.',
        'scheduled_at' => 'Hvornår er denne vedligeholdelse planlagt til?',
        'completed_at' => 'Hvornår denne vedligeholdelse udført?',
        'templates'    => [
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
            'name'                     => 'Navn',
            'collapsing'               => 'Udvid/skjul indstillinger',
            'visible'                  => 'Altid åben',
            'collapsed'                => 'Minimer gruppen som standard',
            'collapsed_incident'       => 'Minimer gruppen, men hold den åben hvis der er fejl',
            'visibility'               => 'Synlighed',
            'visibility_public'        => 'Synligt for alle',
            'visibility_authenticated' => 'Synligt kun brugere logget ind',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Navn',
        'description'        => 'Beskrivelse',
        'start_at'           => 'Tidsplan starttidspunkt',
        'timezone'           => 'Tidszone',
        'schedule_frequency' => 'Planlægge frekvens (i sekunder)',
        'completion_latency' => 'Færdiggørelse ventetid (i sekunder)',
        'group'              => 'Gruppe',
        'active'             => 'Aktiv?',
        'groups'             => [
            'name' => 'Gruppenavn',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Navn',
        'suffix'                   => 'Endelse',
        'description'              => 'Beskrivelse',
        'description-help'         => 'Du kan benytte Markdown.',
        'display-chart'            => 'Vis graf på statussiden?',
        'default-value'            => 'Standard værdi',
        'calc_type'                => 'Beregning af grafer',
        'type_sum'                 => 'Sum',
        'type_avg'                 => 'Gennemsnit',
        'places'                   => 'Antal decimaler',
        'default_view'             => 'Standardvisning',
        'threshold'                => 'Hvor mange minutter på tærsklen mellem metriske point?',
        'visibility'               => 'Synlighed',
        'visibility_authenticated' => 'Synlig for godkendte brugere',
        'visibility_public'        => 'Synlig for alle',
        'visibility_hidden'        => 'Altid skjult',

        'points' => [
            'value' => 'Værdi',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                    => 'Sidenavn',
            'site-url'                     => 'Sidens URL',
            'display-graphs'               => 'Display graphs on status page?',
            'about-this-page'              => 'Om',
            'days-of-incidents'            => 'Hvor mange dage skal der vises hændelser for?',
            'time_before_refresh'          => 'Status page refresh rate (in seconds).',
            'banner'                       => 'Banner billede',
            'banner-help'                  => 'Det anbefales ikke at uploade billeder bredere end 930px.',
            'subscribers'                  => 'Tillad folk at tilmelde sig email underretninger?',
            'skip_subscriber_verification' => 'Spring verificering af brugere over? (Husk på, du kan blive spammet)',
            'automatic_localization'       => 'Sæt automatisk sproget på din statusside til den besøgendes sprog?',
            'enable_external_dependencies' => 'Aktiverer tredjeparts afhængigheder (Google skrifttyper, Trackere, osv...)',
            'show_timezone'                => 'Vis tidszonenen statussiden kører i.',
            'only_disrupted_days'          => 'Vis kun dage indeholdende hændelser i tidslinjen?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics kode',
            'analytics_gosquared'    => 'GoSquared Analytics kode',
            'analytics_piwik_url'    => 'URL til Piwik installation (uden http(s)://)',
            'analytics_piwik_siteid' => 'Piwik\'s site id',
        ],
        'localization' => [
            'site-timezone'        => 'Tidszone',
            'site-locale'          => 'Sprog på siden',
            'date-format'          => 'Datoformat',
            'incident-date-format' => 'Datoformat for hændelser',
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

    'general' => [
        'timezone' => 'Vælg Tidszone',
    ],

    // Buttons
    'add'            => 'Tilføj',
    'save'           => 'Gem',
    'update'         => 'Opdatér',
    'create'         => 'Opret',
    'edit'           => 'Rediger',
    'delete'         => 'Slet',
    'submit'         => 'Send',
    'cancel'         => 'Afbryd',
    'remove'         => 'Fjern',
    'invite'         => 'Inviter',
    'signup'         => 'Tilmeld',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* ikke påkrævet',
];
