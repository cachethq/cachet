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

    'dashboard'          => 'Řídicí panel',
    'writeable_settings' => 'The Cachet settings directory is not writeable. Please make sure that <code>./bootstrap/cachet</code> is writeable by the web server.',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidents & Maintenance',
        'incidents'                => 'Incidenty',
        'logged'                   => '{0}There are no incidents, good work.|[1]You have logged one incident.|[2,*]You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'Vytvořit šablonu',
        'incident-templates'       => 'Šablony incidentů',
        'updates'                  => [
            'title'   => 'Incident updates for :incident',
            'count'   => '{0}Zero Updates|[1]One Update|[2]Two Updates|[3,*]Several Updates',
            'add'     => [
                'title'   => 'Create new incident update',
                'success' => 'Your new incident update has been created.',
                'failure' => 'Something went wrong with the incident update.',
            ],
            'edit' => [
                'title'   => 'Edit incident update',
                'success' => 'The incident update has been updated.',
                'failure' => 'Something went wrong updating the incident update',
            ],
        ],
        'reported_by'              => 'Reported :timestamp by :user',
        'add'                      => [
            'title'   => 'Nahlásit incident',
            'success' => 'Incident byl přidán.',
            'failure' => 'Došlo k chybě při přidávání události, opakujte akci.',
        ],
        'edit' => [
            'title'   => 'Upravit incident',
            'success' => 'Incident aktualizován.',
            'failure' => 'Došlo k chybě při editaci události, opakujte akci.',
        ],
        'delete' => [
            'success' => 'Událost byla odstraněna a už se nebude zobrazovat na stavové stránce.',
            'failure' => 'Událost se nepodařilo smazat, opakujte akci.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Šablony incidentů',
            'add'   => [
                'title'   => 'Vytvořit šablonu incidentu',
                'message' => 'Create your first incident template.',
                'success' => 'Byla vytvořena nová šablona události.',
                'failure' => 'Se šablonou události se něco pokazilo.',
            ],
            'edit' => [
                'title'   => 'Upravit šablonu',
                'success' => 'Šablona události byla aktualizována.',
                'failure' => 'Při aktualizaci šablony incidentu se něco pokazilo',
            ],
            'delete' => [
                'success' => 'Šablona události byla smazána.',
                'failure' => 'Šablonu události se nepodařilo smazat, opakujte akci.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Maintenance',
        'logged'       => '{0}There has been no Maintenance, good work.|[1]You have logged one schedule.|[2,*]You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Naplánováno na :timestamp',
        'add'          => [
            'title'   => 'Add Maintenance',
            'success' => 'Maintenance added.',
            'failure' => 'Something went wrong adding the Maintenance, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit Maintenance',
            'success' => 'Maintenance has been updated!',
            'failure' => 'Something went wrong editing the Maintenance, please try again.',
        ],
        'delete' => [
            'success' => 'The Maintenance has been deleted and will not show on your status page.',
            'failure' => 'The Maintenance could not be deleted, please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Služby',
        'component_statuses' => 'Stavy služeb',
        'listed_group'       => 'Seskupeno podle :name',
        'add'                => [
            'title'   => 'Přidat službu',
            'message' => 'Měli byste přidat službu.',
            'success' => 'Služba vytvořena.',
            'failure' => 'Něco se pokazilo se skupinou služby, zkus to znova.',
        ],
        'edit' => [
            'title'   => 'Upravit službu',
            'success' => 'Služba byla aktualizována.',
            'failure' => 'Něco se pokazilo se skupinou služby, zkus to znova.',
        ],
        'delete' => [
            'success' => 'Služba byla smazána!',
            'failure' => 'Služba nemůže být odstraněna, opakujte akci.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Skupina služeb|Skupiny služeb',
            'no_components' => 'Můžete přidat skupinu služeb.',
            'add'           => [
                'title'   => 'Přidat skupinu služeb',
                'success' => 'Skupina služeb byla přidána.',
                'failure' => 'Něco se pokazilo se skupinou služby, zkus to znova.',
            ],
            'edit' => [
                'title'   => 'Upravit skupinu komponent',
                'success' => 'Skupina služeb byla aktualizována.',
                'failure' => 'Něco se pokazilo se skupinou služby, zkus to znova.',
            ],
            'delete' => [
                'success' => 'Skupina služeb byla smazána!',
                'failure' => 'Skupina komponent nemohla být smazána, zkus to znova.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metriky',
        'add'     => [
            'title'   => 'Vytvořit metriku',
            'message' => 'Měli byste přidat metriku.',
            'success' => 'Metrika vytvořena.',
            'failure' => 'Něco se pokazilo s metrikou, zkus to znova.',
        ],
        'edit' => [
            'title'   => 'Upravit metriku',
            'success' => 'Metrika aktualizována.',
            'failure' => 'Něco se pokazilo s metrikou, zkus to znova.',
        ],
        'delete' => [
            'success' => 'Měření bylo smazáno a už se nebude zobrazovat na stavové stránce.',
            'failure' => 'Měření nemohlo být odstraněno, opakujte akci.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'          => 'Odběratelé',
        'description'          => 'Pokud dojde ke vzniku incidentu nebo služby, odběratelé obdrží aktualizace e-mailem.',
        'description_disabled' => 'To use this feature, you need allow people to signup for notifications.',
        'verified'             => 'Ověřeno',
        'not_verified'         => 'Neověřeno',
        'subscriber'           => ': e-mail, přihlášen: datum',
        'no_subscriptions'     => 'Přihlášeno k zasílání všech aktualizací',
        'global'               => 'Globally subscribed',
        'add'                  => [
            'title'   => 'Přidat nového odběratele',
            'success' => 'Odběratel přidán.',
            'failure' => 'Něco se pokazilo při přidávání odběratele, opakujte akci.',
            'help'    => 'Zadejte každého odběratele na nový řádek.',
        ],
        'edit' => [
            'title'   => 'Aktualizovat odeběratele',
            'success' => 'Odběratel aktualizován.',
            'failure' => 'Něco se pokazilo při úpravě odběratele, zkus to znova.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Tým',
        'member'      => 'Člen',
        'profile'     => 'Profil',
        'description' => 'Team Members will be able to add, modify & edit components and incidents.',
        'add'         => [
            'title'   => 'Přidat nového člena týmu',
            'success' => 'Nový člen týmu byl přidán.',
            'failure' => 'Člena týmu se nezdařilo přidat, opakujte akci.',
        ],
        'edit' => [
            'title'   => 'Aktualizovat profil',
            'success' => 'Profil byl aktualizován.',
            'failure' => 'Něco se pokazilo při aktualizaci profilu, zkus to znova.',
        ],
        'delete' => [
            'success' => 'Člen týmu byl smazán a již nebude mít přístup do řídícího panelu!',
            'failure' => 'Člena týmu se nezdařilo přidat, opakujte akci.',
        ],
        'invite' => [
            'title'   => 'Pozvat nového člena týmu',
            'success' => 'Pozvánka byla odeslána',
            'failure' => 'Pozvánka nemohla být odeslána, zkus to znova.',
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
            'analytics' => 'Monitoring přístupů',
        ],
        'log' => [
            'log' => 'Log',
        ],
        'localization' => [
            'localization' => 'Lokální nastavení',
        ],
        'customization' => [
            'customization' => 'Vlastní nastavení',
            'header'        => 'Vlastní hlavička HTML',
            'footer'        => 'Vlastní zápatí HTML',
        ],
        'mail' => [
            'mail'  => 'Mail',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Test notification from Cachet',
                'body'    => 'This is a test notification from Cachet.',
            ],
        ],
        'security' => [
            'security'   => 'Zabezpečení',
            'two-factor' => 'Uživatelé bez dvoufaktorového ověřování',
        ],
        'stylesheet' => [
            'stylesheet' => 'Šablona stylů',
        ],
        'theme' => [
            'theme' => 'Nastavení vzhledu',
        ],
        'edit' => [
            'success' => 'Nastavení uložena.',
            'failure' => 'Nastavení nelze uložit.',
        ],
        'credits' => [
            'credits'       => 'Autoři',
            'contributors'  => 'Přispěvatelé',
            'license'       => 'Cachet je open-sourcový projekt pod BSD-3-licencí, vydávaný <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Podporovatelé a sponzoři',
            'backers'       => 'If you\'d like to support future development, check out the <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> campaign.',
            'thank-you'     => 'Děkujeme každému z :count přispěvatelů.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Přihlášení',
        'logged_in'  => 'Jste přihlášeni.',
        'welcome'    => 'Welcome back!',
        'two-factor' => 'Zadejte prosím váš token.',
    ],

    // Sidebar footer
    'help'        => 'Nápověda',
    'status_page' => 'Stavová stránka',
    'logout'      => 'Odhlásit',

    // Notifications
    'notifications' => [
        'notifications' => 'Oznámení',
        'awesome'       => 'Vynikající.',
        'whoops'        => 'Jejda.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Support Cachet',
        'support_subtitle' => 'Check out our <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> page!',
        'news'             => 'Poslední novinky',
        'news_subtitle'    => 'Získat nejnovější aktualizace',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your new status page, :username!',
        'message' => 'You\'re almost ready but you might want to configure these extra settings first...',
        'close'   => 'I\'m good thanks!',
        'steps'   => [
            'component'  => 'Add your components',
            'incident'   => 'Create an incident',
            'customize'  => 'Customize your page',
            'team'       => 'Add your team',
            'api'        => 'Generate an API token',
            'two-factor' => 'Setup Two Factor Authentication',
        ],
    ],

];
