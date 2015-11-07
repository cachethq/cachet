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
        'cache_driver'     => '',
        'session_driver'   => 'Sessie Driver',
    ],

    // Login form fields
    'login' => [
        'email'         => 'E-mail',
        'password'      => 'Wachtwoord',
        '2fauth'        => 'Authenticatie Code',
        'invalid'       => 'Ongeldig e-mailadres of wachtwoord',
        'invalid-token' => 'Ongeldig token',
        'cookies'       => 'U moet cookies inschakelen om in te loggen.',
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
        'notify_subscribers' => 'Houd abonnees op de hoogte',
        'visibility'         => 'Incident Zichtbaarheid',
        'public'             => 'Zichtbaar voor publiek',
        'logged_in_only'     => 'Alleen zichtbaar voor ingelogde gebruikers',
        'templates'          => [
            'name'     => 'Naam',
            'template' => 'Sjabloon',
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
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name' => 'Naam',
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
        'calc_type'        => 'Berekening van metingen',
        'type_sum'         => 'Som',
        'type_avg'         => 'Gemiddelde',

        'points' => [
            'value' => 'Waarde',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Site Naam',
            'site-url'               => 'Site URL',
            'display-graphs'         => 'Grafieken tonen op statuspagina?',
            'about-this-page'        => 'Over deze pagina',
            'days-of-incidents'      => 'Hoeveel dagen moeten incidenten getoond worden?',
            'banner'                 => 'Banner afbeelding',
            'banner-help'            => 'Het wordt aanbevolen dat u geen bestanden upload die breeder zijn dan 930px.',
            'subscribers'            => 'Bezoekers toestaan om te abonneren op e-mail notificaties?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics-code',
            'analytics_gosquared'    => 'GoSquared Analytics-code',
            'analytics_piwik_url'    => 'URL van uw Piwik exemplaar (zonder http(s)://)',
            'analytics_piwik_siteid' => 'Site-id van Piwik',
        ],
        'localization' => [
            'site-timezone'          => 'Site tijdzone',
            'site-locale'            => 'Taal van de site',
            'date-format'            => 'Datum formaat',
            'incident-date-format'   => 'Incident Tijdsaanduiding Formaat',
        ],
        'security' => [
            'allowed-domains'      => 'Toegestane domeinen',
            'allowed-domains-help' => 'Door komma\'s gescheiden. Het hierboven ingestelde domein is automatisch standaard toegelaten.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Achtergrondkleur',
            'text-color'              => 'Tekstkleur',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
        ],
    ],

    'user' => [
        'username'       => 'Gebruikersnaam',
        'email'          => 'E-mail',
        'password'       => 'Wachtwoord',
        'api-token'      => 'API-token',
        'api-token-help' => 'Het opnieuw genereren van je API-token zorgt ervoor dat bestaande applicaties geen toegang meer hebben tot Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        '2fa'            => [
            'help' => 'Het inschakelen van two-factor authenticatie verhoogt de veiligheid van uw account. U zult een applicatie zoals <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> of een vergelijkbare applicatie moeten downloaden op uw mobiele apparaat. Wanneer u inlogt wordt u gevraagd om een token in te voeren welke door de applicatie wordt gegenereerd.',
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

    // Other
    'optional' => '* Optioneel',
];
