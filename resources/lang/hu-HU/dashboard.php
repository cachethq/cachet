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

    'dashboard' => 'Irányítópult',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidents &amp; Schedule',
        'incidents'                => 'Incidensek',
        'logged'                   => '{0} Nincs semmilyen incidens, szép munka.|Ön egy incidenst jelentett.|Ön összesen <strong>:count</strong> incidenst jelentett.',
        'incident-create-template' => 'Sablon létrehozása',
        'incident-templates'       => 'Incidens Sablonok',
        'add'                      => [
            'title'   => 'Incidens jelentése',
            'success' => 'Incidens létrehozva.',
            'failure' => 'Hiba történt az incidens létrehozása közben, kérjük próbálja újra.',
        ],
        'edit' => [
            'title'   => 'Incidens szerkesztése',
            'success' => 'Incidens frissítve.',
            'failure' => 'Hiba történt az incidens szerkesztése közben, kérjük próbálja újra.',
        ],
        'delete' => [
            'success' => 'Az incidens törölve lett és nem fog többé megjelenni.',
            'failure' => 'Az incidenst nem lehetett törölni, kérjük próbálja újra.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Incidens Sablonok',
            'add'   => [
                'title'   => 'Incidens sablon készítése',
                'message' => 'Létre kell hozni egy incidens sablont.',
                'success' => 'Incidens sablon létrehozva.',
                'failure' => 'Hiba történt az incidens sablon létrehozása során.',
            ],
            'edit' => [
                'title'   => 'Sablon szerkesztése',
                'success' => 'Az incidens sablon frissítve lett.',
                'failure' => 'Hiba történt az incidens sablon frissítése során',
            ],
            'delete' => [
                'success' => 'Az incidens sablon törölve lett.',
                'failure' => 'Az incidens sablont nem lehetett törölni, kérjük próbálja újra.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Ütemezett Karbantartás',
        'logged'       => '{0} Nincs semmilyen ütemterv, szép munka.|Ön egy ütemtervet regisztrált.|Ön összesen <strong>:count</strong> ütemtervet regisztrált.',
        'scheduled_at' => 'Ütemezve: :timestamp',
        'add'          => [
            'title'   => 'Ütemezett Karbantartás létrehozása',
            'success' => 'Ütemterv létrehozva.',
            'failure' => 'Hiba történt az ütemterv létrehozásakor, kérjük próbálja újra.',
        ],
        'edit' => [
            'title'   => 'Ütemezett Karbantartás szerkesztése',
            'success' => 'Ütemterv frissítve!',
            'failure' => 'Hiba történt az ütemterv szerkesztésekor, kérjük próbálja újra.',
        ],
        'delete' => [
            'success' => 'Az ütemterv törölve lett és nem fog többé megjelenni.',
            'failure' => 'Az ütemzett karbantartást nem lehetett törölni, kérjük próbálja újra.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponensek',
        'component_statuses' => 'Komponens állapotok',
        'listed_group'       => ':name alá csoportosítva',
        'add'                => [
            'title'   => 'Komponens hozzáadása',
            'message' => 'Létre kell hozni egy komponenst.',
            'success' => 'Komponens létrehozva.',
            'failure' => 'Valami hiba történt a komponens csoporttal, kérjük próbálja újra.',
        ],
        'edit' => [
            'title'   => 'Komponens szerkesztése',
            'success' => 'Komponens frissítve.',
            'failure' => 'Valami hiba történt a komponens csoporttal, kérjük próbálja újra.',
        ],
        'delete' => [
            'success' => 'Komponens törölve!',
            'failure' => 'A komponenst nem lehetett törölni, kérjük próbálja újra.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponens csoport|Komponens csoportok',
            'no_components' => 'Létre kell hozni egy komponens csoportot.',
            'add'           => [
                'title'   => 'Komponens csoport hozzáadása',
                'success' => 'Komponens csoport létrehozva.',
                'failure' => 'Valami hiba történt a komponens csoporttal, kérjük próbálja újra.',
            ],
            'edit' => [
                'title'   => 'Komponens csoport szerkesztése',
                'success' => 'Komponens csoport frissítve.',
                'failure' => 'Valami hiba történt a komponens csoporttal, kérjük próbálja újra.',
            ],
            'delete' => [
                'success' => 'A komponens csoport törlése sikeres!',
                'failure' => 'A komponens csoportot nem lehetett törölni, kérjük próbálja újra.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Mérőszámok',
        'add'     => [
            'title'   => 'Merőszám létrehozása',
            'message' => 'Létre kell hozni egy mérőszámot.',
            'success' => 'Mérőszám létrehozva.',
            'failure' => 'Hiba történt ezzel a mérőszámmal, kérjük próbálja újra.',
        ],
        'edit' => [
            'title'   => 'Mérőszám szerkesztése',
            'success' => 'Mérőszám frissítve.',
            'failure' => 'Hiba történt ezzel a mérőszámmal, kérjük próbálja újra.',
        ],
        'delete' => [
            'success' => 'Ez a mérőszám törölve lett és nem fog többé megjelenni.',
            'failure' => 'A mérőszámot nem lehetett kitörölni, kérjük próbálja újra.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Feliratkozók',
        'description'      => 'A feliratkozók email értesítést kapnak ha incidensek lesznek létrehozva vagy komponensek lesznek frissítve.',
        'verified'         => 'Megerősítve',
        'not_verified'     => 'Nincs megerősítve',
        'subscriber'       => ':email, feliratkozott: :date',
        'no_subscriptions' => 'Feliratkozva az összes frissítésre',
        'add'              => [
            'title'   => 'Új feliratkozó hozzáadása',
            'success' => 'Feliratkozó létrehozva!',
            'failure' => 'Hiba történt a feliratkozó hozzáadásakor, kérjük próbálja újra.',
            'help'    => 'Kérjük írja mindegyik feliratkozót külön sorba.',
        ],
        'edit' => [
            'title'   => 'Feliratkozó frissítése',
            'success' => 'Feliratkozó frissítve!',
            'failure' => 'Hiba történt a feliratkozó szerkesztésekor, kérjük próbálja újra.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Csapat',
        'member'      => 'Tag',
        'profile'     => 'Profil',
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
        'add'         => [
            'title'   => 'Új csapattag hozzáadása',
            'success' => 'Csapattag hozzáadva.',
            'failure' => 'A csapattagot nem lehetett létrehozni, kérjük próbálja újra.',
        ],
        'edit' => [
            'title'   => 'Profil frissítése',
            'success' => 'Profil frissítve.',
            'failure' => 'Hiba történt a profil szerkesztésekor, kérjük próbálja újra.',
        ],
        'delete' => [
            'success' => 'Csapattag törölve és többé nincs joga a műszerfalhoz!',
            'failure' => 'A csapattagot nem lehetett létrehozni, kérjük próbálja újra.',
        ],
        'invite' => [
            'title'   => 'Új csapattag meghívása',
            'success' => 'Egy meghívás elküldve',
            'failure' => 'A meghívást nem sikerült elküldeni, kérjük próbálja újra.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Beállítások',
        'app-setup' => [
            'app-setup'   => 'Applikáció beállítása',
            'images-only' => 'Csak képeket lehet feltölteni.',
            'too-big'     => 'A feltöltött fájl túl nagy. A fájl nem lehet nagyobb mint :size',
        ],
        'analytics' => [
            'analytics' => 'Analízis',
        ],
        'localization' => [
            'localization' => 'Lokalizáció',
        ],
        'customization' => [
            'customization' => 'Testreszabás',
            'header'        => 'Egyéni fejléc HTML',
            'footer'        => 'Egyéni lábjegyzet HTML',
        ],
        'security' => [
            'security'   => 'Biztonság',
            'two-factor' => 'Felhasználók két faktoros hitelesítés nélkül',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Téma',
        ],
        'edit' => [
            'success' => 'Beállítások mentve.',
            'failure' => 'Beállításokat nem lehetett menteni.',
        ],
        'credits' => [
            'credits'       => 'Készítők',
            'contributors'  => 'Közreműködők',
            'license'       => 'A Cachet egy, a BSD-3 alatt licenszelt nyílt forráskódú projekt, <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a> által kiadva.',
            'backers-title' => 'Támogatók & Szponzorok',
            'backers'       => 'If you\'d like to support future development, check out the CrowdIn and GitHub.',
            'thank-you'     => 'Köszönjük mind a(z) :count közreműködőnek a segítséget.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Belépés',
        'logged_in'  => 'Bejelentkezve.',
        'welcome'    => 'Welcome Back!',
        'two-factor' => 'Kérem adja meg a jelét.',
    ],

    // Sidebar footer
    'help'        => 'Súgó',
    'status_page' => 'Állapot Oldal',
    'logout'      => 'Kijelentkezés',

    // Notifications
    'notifications' => [
        'notifications' => 'Értesítések',
        'awesome'       => 'Kitűnő.',
        'whoops'        => 'Hoppá.',
    ],

    // Widgets
    'widgets' => [
        'news'             => 'Legfrissebb hírek',
        'news_subtitle'    => 'Legújabb hírek',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your new Status page!',
        'message' => 'Your status page is almost ready! You might want to configure these extra settings',
        'close'   => 'Take me straight to my dashboard',
        'steps'   => [
            'component'  => 'Create components',
            'incident'   => 'Create incidents',
            'customize'  => 'Customize',
            'team'       => 'Add users',
            'api'        => 'Generate API token',
            'two-factor' => 'Two Factor Authentication',
        ],
    ],

];
