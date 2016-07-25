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
        'email'            => 'E-mail',
        'username'         => 'Gebruikersnaam',
        'password'         => 'Wachtwoord',
        'site_name'        => 'Site naam',
        'site_domain'      => 'Site Domein',
        'site_timezone'    => 'Selecteer uw tijdzone',
        'site_locale'      => 'Selecteer uw taal',
        'enable_google2fa' => 'Schakel Google twee factor authenticatie in',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Sessie Driver',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Gebruikersnaam of e-mail',
        'email'         => 'E-mail',
        'password'      => 'Wachtwoord',
        '2fauth'        => 'Authenticatie Code',
        'invalid'       => 'Ongeldige gebruikersnaam of wachtwoord',
        'invalid-token' => 'Ongeldig token',
        'cookies'       => 'U moet cookies inschakelen om in te loggen.',
        'rate-limit'    => 'Snelheids limiet overschreden.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Naam',
        'status'             => 'Status',
        'component'          => 'Onderdeel',
        'message'            => 'Boodschap',
        'message-help'       => 'U kan ook gebruik maken van Markdown.',
        'scheduled_at'       => 'Voor wanneer is het onderhoud gepland?',
        'incident_time'      => 'Wanneer heeft dit incident plaatsgevonden?',
        'notify_subscribers' => 'Houd abonnees op de hoogte?',
        'visibility'         => 'Incident Zichtbaarheid',
        'public'             => 'Zichtbaar voor publiek',
        'logged_in_only'     => 'Alleen zichtbaar voor ingelogde gebruikers',
        'templates'          => [
            'name'     => 'Naam',
            'template' => 'Sjabloon',
            'twig'     => 'Incident Templates kunnen gebruik maken van de <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> template taal.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Naam',
        'status'      => 'Status',
        'group'       => 'Groep',
        'description' => 'Omschrijving',
        'link'        => 'Link',
        'tags'        => 'Tags',
        'tags-help'   => 'Komma gescheiden.',
        'enabled'     => 'Component ingeschakeld?',

        'groups' => [
            'name'               => 'Naam',
            'collapsing'         => 'Kies de zichtbaarheid van de groep',
            'visible'            => 'Altijd uitgevouwen',
            'collapsed'          => 'Vouw de groep standaard samen',
            'collapsed_incident' => 'De groep samenvouwen, maar uitklappen als er problemen zijn.',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Naam',
        'suffix'           => 'Achtervoegsel',
        'description'      => 'Beschrijving',
        'description-help' => 'Je mag ook Markdown gebruiken.',
        'display-chart'    => 'Grafiek tonen op statuspagina?',
        'default-value'    => 'Standaardwaarde',
        'calc_type'        => 'Berekening van de metingen',
        'type_sum'         => 'Som',
        'type_avg'         => 'Gemiddelde',
        'places'           => 'Decimalen',
        'default_view'     => 'Standaardweergave',
        'threshold'        => 'Hoeveel minuten tussen de metrische punten?',

        'points' => [
            'value' => 'Waarde',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Site naam',
            'site-url'               => 'Site URL',
            'display-graphs'         => 'Grafieken tonen op statuspagina?',
            'about-this-page'        => 'Over deze pagina',
            'days-of-incidents'      => 'Hoeveel dagen moeten incidenten getoond worden?',
            'banner'                 => 'Banner afbeelding',
            'banner-help'            => 'Het wordt aanbevolen dat u geen bestanden upload die breeder zijn dan 930px.',
            'subscribers'            => 'Bezoekers toestaan om te abonneren op e-mail notificaties?',
            'automatic_localization' => 'Stel de taal van de bezoeker in als standaardtaal voor deze bezoeker?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics-code',
            'analytics_gosquared'    => 'GoSquared Analytics-code',
            'analytics_piwik_url'    => 'URL van je Piwik installatie (zonder http(s)://)',
            'analytics_piwik_siteid' => 'Site-id van Piwik',
        ],
        'localization' => [
            'site-timezone'          => 'Website tijdzone',
            'site-locale'            => 'Taal van de site',
            'date-format'            => 'Datum formaat',
            'incident-date-format'   => 'Incident tijdsaanduiding',
        ],
        'security' => [
            'allowed-domains'      => 'Toegestane domeinen',
            'allowed-domains-help' => 'Door komma\'s gescheiden. Het hierboven ingestelde domein is automatisch standaard toegelaten.',
        ],
        'stylesheet' => [
            'custom-css' => 'Aangepaste Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Achtergrondkleur',
            'background-fills'        => 'Achtergrond opvulling (components, incidents, footer)',
            'banner-background-color' => 'Banner achtergrond kleur',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Volledige breedte van de banner aanzetten?',
            'text-color'              => 'Tekstkleur',
            'dashboard-login'         => 'Laat dashboard knop zien in de footer?',
            'reds'                    => 'Rood (voor errors)',
            'blues'                   => 'Blauw (voor informatie)',
            'greens'                  => 'Groen (voor succes)',
            'yellows'                 => 'Geel (voor waarschuwingen)',
            'oranges'                 => 'Oranje (voor notificaties)',
            'metrics'                 => 'Metrics opvulling',
            'links'                   => 'Links',
        ],
    ],

    'user' => [
        'username'       => 'Gebruikersnaam',
        'email'          => 'E-mail',
        'password'       => 'Wachtwoord',
        'api-token'      => 'API-token',
        'api-token-help' => 'Het opnieuw genereren van je API-token zorgt ervoor dat bestaande applicaties geen toegang meer hebben tot Cachet.',
        'gravatar'       => 'Verander je profielfoto op Gravatar.',
        'user_level'     => 'Gebruikersniveau',
        'levels'         => [
            'admin' => 'Beheerder',
            'user'  => 'Gebruiker',
        ],
        '2fa' => [
            'help' => 'Het inschakelen van two-factor authenticatie verhoogt de veiligheid van uw account. U zult een applicatie zoals <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> of een vergelijkbare applicatie moeten downloaden op uw mobiele apparaat. Wanneer u inlogt wordt u gevraagd om een token in te voeren welke door de applicatie wordt gegenereerd.',
        ],
        'team' => [
            'description' => 'Nodig je teamleden uit door hier hun e-mailadres in te vullen.',
            'email'       => 'E-mail #:id',
        ],
    ],

    // Buttons
    'add'    => 'Toevoegen',
    'save'   => 'Opslaan',
    'update' => 'Bijwerken',
    'create' => 'Aanmaken',
    'edit'   => 'Bewerken',
    'delete' => 'Verwijderen',
    'submit' => 'Versturen',
    'cancel' => 'Annuleren',
    'remove' => 'Verwijderen',
    'invite' => 'Uitnodigen',
    'signup' => 'Registreer',

    // Other
    'optional' => '* Optioneel',
];
