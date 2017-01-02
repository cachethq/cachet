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
        'title'                    => 'Incidents &amp; Schedule',
        'incidents'                => 'Incidenty',
        'logged'                   => '{0} Nejsou hlášeny žádné incidenty, dobrá práce. | Zapsali jste jeden incident. | Nahlásili jste <strong>:count</strong> incident(y).',
        'incident-create-template' => 'Vytvořit šablonu',
        'incident-templates'       => 'Šablony incidentů',
        'updates'                  => '{0} Zero Updates|One Update|:count Updates',
        'add'                      => [
            'title'   => 'Nahlásit incident',
            'success' => 'Incident byl přidán.',
            'failure' => 'There was an error adding the incident, please try again.',
        ],
        'edit' => [
            'title'   => 'Upravit incident',
            'success' => 'Incident aktualizován.',
            'failure' => 'There was an error editing the incident, please try again.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted, please try again.',
        ],
        'update' => [
            'title'    => 'Create new incident update',
            'subtitle' => 'Add an update to <strong>:incident</strong>',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Šablony incidentů',
            'add'   => [
                'title'   => 'Vytvořit šablonu incidentu',
                'message' => 'You should add an incident template.',
                'success' => 'Your new incident template has been created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'Upravit šablonu',
                'success' => 'The incident template has been updated.',
                'failure' => 'Something went wrong updating the incident template',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted, please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Plánovaná odstávka',
        'logged'       => '{0} Žádná údržba není v plánu, skvělá práce.|Je v plánu jedna údržba.|Je v plánu <strong>:count</strong> údržb.',
        'scheduled_at' => 'Naplánováno na :timestamp',
        'add'          => [
            'title'   => 'Přidat plánovanou údržbu',
            'success' => 'Údržba byla přidána.',
            'failure' => 'Něco se pokazilo při přidávání údržby, zkus to znova.',
        ],
        'edit' => [
            'title'   => 'Upravit naplánovanou údržbu',
            'success' => 'Údržba byla aktualizovaná!',
            'failure' => 'Něco se pokazilo při úpravě údržby, zkus to znova.',
        ],
        'delete' => [
            'success' => 'Plánovaná údržba byla smazána a nebude se zobrazovat na hlavní stránce.',
            'failure' => 'Plánovaná údržba nemohla být smazána, zkus to znova.',
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
            'failure' => 'The component could not be deleted, please try again.',
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
                'success' => 'Component group has been deleted!',
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
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted, please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Odběratelé',
        'description'      => 'Odběratelé obdrží aktualizace e-mailem, pokuď dojde ke vzniku incidentu.',
        'verified'         => 'Ověřeno',
        'not_verified'     => 'Neověřeno',
        'subscriber'       => ': e-mail, přihlášen: datum',
        'no_subscriptions' => 'Přihlášeno k zasílání všech aktualizací',
        'add'              => [
            'title'   => 'Přidat nového odběratele',
            'success' => 'Odběratel přidán.',
            'failure' => 'Something went wrong adding the subscriber, please try again.',
            'help'    => 'Enter each subscriber on a new line.',
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
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
        'add'         => [
            'title'   => 'Přidat nového člena týmu',
            'success' => 'Nový člen týmu byl přidán.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'edit' => [
            'title'   => 'Aktualizovat profil',
            'success' => 'Profil byl aktualizován.',
            'failure' => 'Něco se pokazilo při aktualizaci profilu, zkus to znova.',
        ],
        'delete' => [
            'success' => 'Člen týmu byl smazán a již nebude mít přístup do řídícího panelu!',
            'failure' => 'The team member could not be added, please try again.',
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
            'analytics' => 'Analytiky',
        ],
        'log' => [
            'log' => 'Záznamy',
        ],
        'localization' => [
            'localization' => 'Lokalizace',
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
            'theme' => 'Motiv vzhledu',
        ],
        'edit' => [
            'success' => 'Nastavení uložena.',
            'failure' => 'Nastavení nelze uložit.',
        ],
        'credits' => [
            'credits'       => 'Autoři',
            'contributors'  => 'Přispěvatelé',
            'license'       => 'Cachet is a BSD-3-licensed open source project, released by <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Backers & Sponsors',
            'backers'       => 'If you\'d like to support future development, check out the <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> campaign.',
            'thank-you'     => 'Thank you to each and every one of the :count contributors.',
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

    // Widgets
    'widgets' => [
        'support'          => 'Podpořit Cachet',
        'support_subtitle' => 'Check out our <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> page!',
        'news'             => 'Poslední novinky',
        'news_subtitle'    => 'Získat nejnovější aktualizace',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Vítej na tvé nové Status stránce!',
        'message' => 'Vaše stavová stránka je téměř připravena! Možná budete chtít upravit další nastavení',
        'close'   => 'Přejít rovnou do řídícího panelu',
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