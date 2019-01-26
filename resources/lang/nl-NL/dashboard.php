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

    'dashboard'          => 'Dashboard',
    'writeable_settings' => 'De Cachet instellingen-map is niet schrijfbaar. Zorg er voor dat <code>./bootstrap/cachet</code> schrijfbaar is voor de webserver.',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidenten & Onderhoud',
        'incidents'                => 'Incidenten',
        'logged'                   => '{0}Top, er zijn geen incidenten.|[1]Je hebt één incident gerapporteerd.|[2,*]Je hebt <strong>:count</strong> incidenten gerapporteerd.',
        'incident-create-template' => 'Maak template',
        'incident-templates'       => 'Incident Sjablonen',
        'updates'                  => [
            'title'   => 'Incident updates voor :incident',
            'count'   => '{0}Geen updates|[1]Één update|[2]Twee updates|[3,*]Meerdere updates',
            'add'     => [
                'title'   => 'Maak een nieuwe incident update',
                'success' => 'Je nieuwe incident update is aangemaakt.',
                'failure' => 'Er is iets misgegaan met de incident update.',
            ],
            'edit' => [
                'title'   => 'Incident update bewerken',
                'success' => 'De incident update is bijgewerkt.',
                'failure' => 'Er is een fout opgetreden bij het wijzigen van de incident update',
            ],
        ],
        'reported_by'              => 'Gemeld door :user',
        'add'                      => [
            'title'   => 'Meld een incident',
            'success' => 'Incident toegevoegd.',
            'failure' => 'Er is een fout opgetreden tijdens het toevoegen van het incident, probeer het opnieuw.',
        ],
        'edit' => [
            'title'   => 'Wijzig een incident',
            'success' => 'Incident bijgewerkt.',
            'failure' => 'Er is een fout opgetreden bij het wijzigen van het incident, probeer het opnieuw.',
        ],
        'delete' => [
            'success' => 'Het incident is verwijderd en zal niet meer worden weergegeven op de statuspagina.',
            'failure' => 'Het incident kon niet worden verwijderd, probeer het opnieuw.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Incident Sjablonen',
            'add'   => [
                'title'   => 'Creëer een incident template',
                'message' => 'Voeg een incident template toe.',
                'success' => 'Je nieuwe incident template is aangemaakt.',
                'failure' => 'Er is iets misgegaan met de incident template.',
            ],
            'edit' => [
                'title'   => 'Wijzig template',
                'success' => 'De incident template is bijgewerkt.',
                'failure' => 'Er is een fout opgetreden bij het wijzigen van het incident template',
            ],
            'delete' => [
                'success' => 'De incident template is verwijderd.',
                'failure' => 'De incident template kon niet worden verwijderd, probeer het opnieuw.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Gepland onderhoud',
        'logged'       => '{0}Er zijn geen geplande onderhoudsmomenten.|[1]Er is één onderhoudsmoment gepland.|[2,*]Er zijn <strong>:count</strong> geplande onderhoudsmomenten.',
        'scheduled_at' => 'Gepland op :timestamp',
        'add'          => [
            'title'   => 'Gepland onderhoud toevoegen',
            'success' => 'Onderhoud toegevoegd.',
            'failure' => 'Er ging iets mis met het toevoegen van het geplande onderhoud, probeer het opnieuw.',
        ],
        'edit' => [
            'title'   => 'Gepland onderhoud bewerken',
            'success' => 'Gepland onderhoud is bijgewerkt!',
            'failure' => 'Er ging iets mis met het wijzigen van het geplande onderhoud, probeer het opnieuw.',
        ],
        'delete' => [
            'success' => 'Het geplande onderhoud is verwijderd en zal niet worden getoond op de statuspagina.',
            'failure' => 'Het geplande onderhoud kon niet worden verwijderd, probeer het opnieuw.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Componenten',
        'component_statuses' => 'Onderdeel statussen',
        'listed_group'       => 'Gegroepeerd onder :name',
        'add'                => [
            'title'   => 'Voeg een component toe',
            'message' => 'Gelieve een onderdeel toe te voegen.',
            'success' => 'Onderdeel aangemaakt.',
            'failure' => 'Er ging iets mis met de component group, probeer het opnieuw.',
        ],
        'edit' => [
            'title'   => 'Wijzig een component',
            'success' => 'Onderdeel bijgewerkt.',
            'failure' => 'Er ging iets mis met de component group, probeer het opnieuw.',
        ],
        'delete' => [
            'success' => 'Het component is verwijderd!',
            'failure' => 'Het component kon niet worden verwijderd, probeer het opnieuw.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Onderdeel groep|Onderdeel groepen',
            'no_components' => 'U moet een componentgroep toevoegen.',
            'add'           => [
                'title'   => 'Componentgroep toevoegen',
                'success' => 'Componentengroep toegevoegd.',
                'failure' => 'Er ging iets mis met de component group, probeer het opnieuw.',
            ],
            'edit' => [
                'title'   => 'Componentgroep bewerken',
                'success' => 'Componentengroep bijgewerkt.',
                'failure' => 'Er ging iets mis met de component group, probeer het opnieuw.',
            ],
            'delete' => [
                'success' => 'De componentgroep is verwijderd!',
                'failure' => 'De componentengroep kon niet worden verwijderd, probeer het opnieuw.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Statistieken',
        'add'     => [
            'title'   => 'Meting aanmaken',
            'message' => 'Voeg een meting toe.',
            'success' => 'Meting aangemaakt.',
            'failure' => 'Er ging iets mis met de metingen, probeer het opnieuw.',
        ],
        'edit' => [
            'title'   => 'Meting bewerken',
            'success' => 'Meting bijgewerkt.',
            'failure' => 'Er ging iets mis met de metingen, probeer het opnieuw.',
        ],
        'delete' => [
            'success' => 'De meting is verwijderd en zal niet meer worden weergegeven op de statuspagina.',
            'failure' => 'De meting kon niet verwijderd worden, probeer het opnieuw.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'          => 'Abonnees',
        'description'          => 'Abonnees ontvangen een email update wanneer er incidenten zijn gemaakt of componenten worden bijgewerkt.',
        'description_disabled' => 'Om deze functie te gebruiken, moet u mensen aanmelden voor meldingen toestaan.',
        'verified'             => 'Geverifiëerd',
        'not_verified'         => 'Niet geverifiëerd',
        'subscriber'           => ':email, geabonneerd op :date',
        'no_subscriptions'     => 'Geabonneerd op alle updates',
        'global'               => 'Globaal geabonneerd',
        'add'                  => [
            'title'   => 'Voeg een nieuwe abonnee toe',
            'success' => 'Abonnee is toegevoegd!',
            'failure' => 'Er ging iets mis met het toevoegen van de abonnee, probeer het opnieuw.',
            'help'    => 'Vul elke abonnee in op een nieuwe regel.',
        ],
        'edit' => [
            'title'   => 'Abonnee bijwerken',
            'success' => 'Abonnee is gewijzigd!',
            'failure' => 'Er ging iets verkeerd met bewerken van de abonnee, probeer het opnieuw.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Lid',
        'profile'     => 'Profiel',
        'description' => 'Teamleden zullen onderdelen en incidenten kunnen aanpassen &amp; toevoegen.',
        'add'         => [
            'title'   => 'Voeg een nieuw teamlid toe',
            'success' => 'Teamlid toegevoegd.',
            'failure' => 'Het teamlid kon niet worden toegevoegd, probeer het opnieuw.',
        ],
        'edit' => [
            'title'   => 'Profiel bijwerken',
            'success' => 'Profiel bijgewerkt.',
            'failure' => 'Er ging iets mis met het bijwerken van het profiel, probeer het opnieuw.',
        ],
        'delete' => [
            'success' => 'Het teamlid is verwijderd en heeft geen toegang meer tot het dashboard!',
            'failure' => 'Het teamlid kon niet worden toegevoegd, probeer het opnieuw.',
        ],
        'invite' => [
            'title'   => 'Nodig een nieuw teamlid uit',
            'success' => 'De uitnodiging is verzonden',
            'failure' => 'De uitnodiging kon niet verzonden worden, probeer het opnieuw.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Instellingen',
        'app-setup' => [
            'app-setup'   => 'Applicatie Installatie',
            'images-only' => 'Alleen afbeeldingen kunnen worden geüpload.',
            'too-big'     => 'Het bestand dat u heeft geüpload is te groot. Upload een afbeelding kleiner dan :size',
        ],
        'analytics' => [
            'analytics' => 'Analyses',
        ],
        'log' => [
            'log' => 'Log',
        ],
        'localization' => [
            'localization' => 'Lokalisatie',
        ],
        'customization' => [
            'customization' => 'Aanpassing',
            'header'        => 'Aangepaste Header HTML',
            'footer'        => 'Aangepaste voettekst HTML',
        ],
        'mail' => [
            'mail'  => 'E-mail',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Test notificatie van Cachet',
                'body'    => 'Dit is een test notificatie van Cachet.',
            ],
        ],
        'security' => [
            'security'   => 'Beveiliging',
            'two-factor' => 'Gebruikers zonder authenticatie in twee stappen',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Thema',
        ],
        'edit' => [
            'success' => 'Instellingen bewaard.',
            'failure' => 'Instellingen kunnen niet worden opgeslagen.',
        ],
        'credits' => [
            'credits'       => 'Credits',
            'contributors'  => 'Bijdragers',
            'license'       => 'Cachet is een open source product onder de BSD-3 licentie, uitgebracht door <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Donateurs & Sponsoren',
            'backers'       => 'Als u de toekomstige ontwikkeling wilt ondersteunen, bezoek de <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> campagne.',
            'thank-you'     => 'Onze dank gaat uit naar elk van de :count verschillende bijdragers.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Login',
        'logged_in'  => 'U bent ingelogd.',
        'welcome'    => 'Welkom Terug!',
        'two-factor' => 'Voer uw token in.',
    ],

    // Sidebar footer
    'help'        => 'Help',
    'status_page' => 'Status Pagina',
    'logout'      => 'Uitloggen',

    // Notifications
    'notifications' => [
        'notifications' => 'Notificaties',
        'awesome'       => 'Geweldig.',
        'whoops'        => 'Oepsie.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Steun Cachet',
        'support_subtitle' => 'Bekijk onze <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> pagina!',
        'news'             => 'Laatste nieuws',
        'news_subtitle'    => 'Ontvang de laatste updates',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welkom op je statuspagina!',
        'message' => 'Uw statuspagina is bijna klaar! U kunt deze extra instellingen configureren',
        'close'   => 'Stuur me direct naar mijn dashboard',
        'steps'   => [
            'component'  => 'Onderdelen maken',
            'incident'   => 'Incidenten aanmaken',
            'customize'  => 'Aanpassen',
            'team'       => 'Gebruikers toevoegen',
            'api'        => 'API-token genereren',
            'two-factor' => 'Authenticatie in twee stappen',
        ],
    ],

];
