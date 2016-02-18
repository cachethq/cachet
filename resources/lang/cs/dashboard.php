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

    'dashboard' => 'Řídicí panel',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidenty &amp; Plán',
        'incidents'                => 'Incidenty',
        'logged'                   => '{0} Nejsou hlášeny žádné incidenty, dobrá práce. | Zapsali jste jeden incident. | Nahlásili jste <strong>:count</strong> incident(y).',
        'incident-create-template' => 'Vytvořit šablonu',
        'incident-templates'       => 'Šablony incidentů',
        'add'                      => [
            'title'   => 'Report an incident',
            'success' => 'Incident přidán.',
            'failure' => 'Na incidentu se něco pokazilo.',
        ],
        'edit' => [
            'title'   => 'Edit an incident',
            'success' => 'Incident aktualizován.',
            'failure' => 'S incidentem se něco pokazilo.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted. Please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Šablony incidentů',
            'add'   => [
                'title'   => 'Create an incident template',
                'message' => 'You should add an incident template.',
                'success' => 'Šablona vytvořena.',
                'failure' => 'Na šabloně incidentu se něco se pokazilo.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
                'success' => 'Šablona byla aktualizována!',
                'failure' => 'Při aktualizaci šablony incidentu se něco pokazilo',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted. Please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Plánovaná odstávka',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Naplánováno na :timestamp',
        'add'          => [
            'title'   => 'Přidat plánovanou odstávku',
            'success' => 'Plán byl přidán.',
            'failure' => 'Něco se pokazilo při přidávání plánu.',
        ],
        'edit' => [
            'title'   => 'Upravit plánované odstávky',
            'success' => 'Plán byl aktualizován!',
            'failure' => 'Něco se pokazilo při úpravě plánu.',
        ],
        'delete' => [
            'success' => 'Plán byl vymazán a nebude se zobrazovat na vaší stavové stránce.',
            'failure' => 'Plán se nepodařilo smazat. Zkuste to prosím znovu.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Služby',
        'component_statuses' => 'Stavy služeb',
        'listed_group'       => 'Seskupeno podle :name',
        'add'                => [
            'title'   => 'Add a component',
            'message' => 'Měli byste přidat službu.',
            'success' => 'Služba vytvořena.',
            'failure' => 'Na službě se objevila chyba.',
        ],
        'edit' => [
            'title'   => 'Edit a component',
            'success' => 'Služba byla aktualizována.',
            'failure' => 'Na službě se objevila chyba.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'The component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Skupina služeb|Skupiny služeb',
            'no_components' => 'Můžete přidat skupinu služeb.',
            'add'           => [
                'title'   => 'Add a component group',
                'success' => 'Skupina služeb byla přidána.',
                'failure' => 'Vyskytla se chyba skupiny služeb.',
            ],
            'edit' => [
                'title'   => 'Edit a component group',
                'success' => 'Skupina služeb byla aktualizována.',
                'failure' => 'Vyskytla se chyba skupiny služeb.',
            ],
            'delete' => [
                'success' => 'Component group has been deleted!',
                'failure' => 'The component group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metriky',
        'add'     => [
            'title'   => 'Create a metric',
            'message' => 'You should add a metric.',
            'success' => 'Metrika vytvořena.',
            'failure' => 'Něco se stalo s metrikou.',
        ],
        'edit' => [
            'title'   => 'Edit a metric',
            'success' => 'Metrika aktualizována.',
            'failure' => 'Něco se stalo s metrikou.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Odběratelé',
        'description'  => 'Odběratelé obdrží aktualizace e-mailem v okamžiku, kdy dojde ke vzniku incidentu.',
        'verified'     => 'Ověřeno',
        'not_verified' => 'Neověřeno',
        'add'          => [
            'title'   => 'Add a new subscriber',
            'success' => 'Odběratel přidán.',
            'failure' => 'Na službě se objevila chyba.',
        ],
        'edit' => [
            'title'   => 'Update subscriber',
            'success' => 'Odběratel aktualizován.',
            'failure' => 'Něco se pokazilo při aktualizaci.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Tým',
        'member'      => 'Člen',
        'profile'     => 'Profil',
        'description' => 'Členové týmu budou schopni přidat nebo upravit komponenty a incidenty.',
        'add'         => [
            'title'   => 'Add a new team member',
            'success' => 'Nový člen týmu byl přidán.',
            'failure' => 'Nastala chyba při mazání uživatele.',
        ],
        'edit' => [
            'title'   => 'Update profile',
            'success' => 'Profil byl aktualizován.',
            'failure' => 'Něco se pokazilo při aktualizaci.',
        ],
        'delete' => [
            'success' => 'Team member has been deleted and will no longer have access to the dashboard!',
            'failure' => 'Nastala chyba při mazání uživatele.',
        ],
        'invite' => [
            'title'   => 'Invite a new team member',
            'success' => 'An invite has been sent',
            'failure' => 'The invite could not be sent. Please try again.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Nastavení',
        'app-setup' => [
            'app-setup'   => 'Nastavení aplikace',
            'images-only' => 'Nahrány mohou být pouze obrázky.',
            'too-big'     => 'Soubor, který nahráváte, je příliš velký. Nahrajte obrázek menší než :velikost',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'security' => [
            'security'   => 'Zabezpečení',
            'two-factor' => 'Uživatelé bez dvoufaktorového ověřování',
        ],
        'stylesheet' => [
            'stylesheet' => 'Šablona stylů',
        ],
        'theme' => [
            'theme' => 'Motiv vzhledu',
        ],
        'edit' => [
            'success' => 'Nastavení uložena.',
            'failure' => 'Nastavení nelze uložit.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Přihlášení',
        'logged_in'  => 'Jste přihlášeni.',
        'welcome'    => 'Vítejte zpátky!',
        'two-factor' => 'Zadejte prosím váš token.',
    ],

    // Sidebar footer
    'help'        => 'Nápověda',
    'status_page' => 'Stavová stránka',
    'logout'      => 'Odhlásit',

    // Notifications
    'notifications' => [
        'notifications' => 'Ozmámení',
        'awesome'       => 'Vynikající.',
        'whoops'        => 'Jejda.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your status page!',
        'message' => 'Vaše stavová stránka je téměř připravena! Možná budete chtít upravit další nastavení',
        'close'   => 'Přejděte do řídicího panelu',
        'steps'   => [
            'component'  => 'Vytvoření komponent',
            'incident'   => 'Vytvoření incidentů',
            'customize'  => 'Přizpůsobit',
            'team'       => 'Přidat uživatele',
            'api'        => 'Vygenerovat API token',
            'two-factor' => 'Dvoufaktorové ověření',
        ],
    ],

];
