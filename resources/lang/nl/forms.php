<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    // Setup form fields
    'setup' => [
        'email'            => 'E-mailadres',
        'username'         => 'Gebruikersnaam',
        'password'         => 'Wachtwoord',
        'site_name'        => 'Nama site',
        'site_domain'      => 'Domein site',
        'site_timezone'    => 'Selecteer je tijdzone',
        'site_locale'      => 'Selecteer je taal',
        'enable_google2fa' => 'Google\'\s authenticatie in twee stappen inschakelen',
    ],

    // Login form fields
    'login' => [
        'email'         => 'E-mailadres',
        'password'      => 'Wachtwoord',
        '2fauth'        => 'Authenticatiecode',
        'invalid'       => 'Ongeldig e-mailadres of wachtwoord',
        'invalid-token' => 'Ongeldige token',
        'cookies'       => 'You must enable cookies to login.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'         => 'Naam',
        'status'       => 'Status',
        'component'    => 'Component',
        'message'      => 'Bericht',
        'message-help' => 'Je mag ook Markdown gebruiken.',
        'scheduled_at' => 'Voor wanneer is het onderhoud gepland?',

        'templates' => [
            'name'     => 'Naam',
            'template' => 'Sjabloon',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Naam',
        'status'      => 'Status',
        'group'       => 'Groep',
        'description' => 'Beschrijving',
        'link'        => 'Link',
        'tags'        => 'Tags',
        'tags-help'   => 'Komma gescheiden.',

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
            'site-name'           => 'Naam site',
            'site-url'            => 'URL site',
            'site-timezone'       => 'Tijdzone site',
            'site-locale'         => 'Taal site',
            'date-format'         => 'Datumformaat',
            'display-graphs'      => 'Grafieken tonen op statuspagina?',
            'about-this-page'     => 'Over deze pagina',
            'days-of-incidents'   => 'Hoeveel dagen van incidenten tonen?',
            'banner'              => 'Bannerafbeelding',
            'banner-help'         => 'Het wordt aangeraden om geen bestanden groter dan 930px breed te uploaden.',
            'analytics_google'    => 'Google Analytics code',
            'analytics_gosquared' => 'GoSquared Analytics code',
        ],
        'security' => [
            'allowed-domains'      => 'Toegestane domeinen',
            'allowed-domains-help' => 'Komma gescheiden. Het domein dat hierboven is ingesteld wordt standaard automatisch toegestaan.',
        ],
        'stylesheet' => [
            'custom-css' => 'Aangepaste stylesheet',
        ],
        'theme' => [
            'background-color' => 'Achtergrondkleur',
            'text-color'       => 'Tekstkleur',
        ],
    ],

    'user' => [
        'username'       => 'Gebruikersnaam',
        'email'          => 'E-mailadres',
        'password'       => 'Wachtwoord',
        'api-token'      => 'API-token',
        'api-token-help' => 'Het opnieuw genereren van je API-token zorgt ervoor dat bestaande applicaties geen toegang meer hebben tot Cachet.',
        '2fa'            => [
            'help' => 'Het inschakelen van authenticatie in twee stappen verbetert de beveiliging van je account. Je zult <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> of een soortgelijke app op je mobiele apparaat moeten downloaden. Wanneer je inlogt, zal je worden gevraagd om een token op te geven die gegenereerd is door de app.',
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
