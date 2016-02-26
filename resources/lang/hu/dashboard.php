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

    'dashboard' => 'Műszerfal',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidensek &amp; Ütemezés',
        'incidents'                => 'Incidensek',
        'logged'                   => '{0} Nincsenek incidensek, szép munka!|Egy incidenst regisztráltál|<strong>:count</strong> incidenst regisztráltál',
        'incident-create-template' => 'Sablon létrehozása',
        'incident-templates'       => 'Incidens Sablonok',
        'add'                      => [
            'title'   => 'Incidens regisztrálása',
            'success' => 'Incidens létrehozva.',
            'failure' => 'Hiba történt az incidens létrehozása során.',
        ],
        'edit' => [
            'title'   => 'Incidens szerkesztése',
            'success' => 'Incidens frissítve.',
            'failure' => 'Hiba történt az incidens szerkesztése során.',
        ],
        'delete' => [
            'success' => 'Az incidens törölve, így nem fog megjelenni a státusz oldalon',
            'failure' => 'Hiba történt az incidens törlésekor, próbáld újra!',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Incidens Sablonok',
            'add'   => [
                'title'   => 'Incidens sablon létrehozása',
                'message' => 'Adj hozzá egy incidens sablont!',
                'success' => 'Sablon létrehozva.',
                'failure' => 'Hiba történt az incidens sablon létrehozása során.',
            ],
            'edit' => [
                'title'   => 'Sablon szerkesztése',
                'success' => 'Sablon frissítve!',
                'failure' => 'Hiba történt az incidens sablon szerkesztése során',
            ],
            'delete' => [
                'success' => 'Incidens sablon törölve.',
                'failure' => 'Hiba történt az incidens sablon törlésekor, próbáld újra!',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Ütemezett Karbantartás',
        'logged'       => '{0} Nincs ütemezett karbantartás, szép munka!|Egy ütemezett karbantást regisztráltál|<strong>:count</strong> ütemezett karbantartást regisztráltál.',
        'scheduled_at' => 'Ütemezett karbantartás időpontja: :timestamp',
        'add'          => [
            'title'   => 'Ütemezett karbantartás hozzáadása',
            'success' => 'Az ütemezett karbantartás hozzáadása sikeres!',
            'failure' => 'Hiba történt az ütemezett karbantartás hozzáadásakor, próbáld újra!',
        ],
        'edit' => [
            'title'   => 'Ütemezett karbantartás szerkesztése',
            'success' => 'Ütemezett karbantartás szerkesztése sikeres!',
            'failure' => 'Hiba történt az ütemezett karbantartás szerkesztésekor, próbáld újra!',
        ],
        'delete' => [
            'success' => 'Ütemezett karbantartás törölve',
            'failure' => 'Hiba történt az ütemezett karbantartás törlésekor, próbáld újra!',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponensek',
        'component_statuses' => 'Komponensek Státusza',
        'listed_group'       => ':name csoport',
        'add'                => [
            'title'   => 'Komponens hozzáadása',
            'message' => 'Adj hozzá egy komponenst!',
            'success' => 'Komponens hozzáadása sikeres!',
            'failure' => 'Hiba történt a komponens hozzáadásakor, próbáld újra!',
        ],
        'edit' => [
            'title'   => 'Komponens szerkesztése',
            'success' => 'Komponens szerkesztése sikeres!',
            'failure' => 'Hiba történt a komponens szerkesztésekor, próbáld újra!',
        ],
        'delete' => [
            'success' => 'Komponens törlése sikeres.',
            'failure' => 'Hiba történt a komponens törlésekor, próbáld újra!',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponens csoport|Komponens csoportok',
            'no_components' => 'Adj hozzá egy komponens csoportot!',
            'add'           => [
                'title'   => 'Komponens csoport hozzáadása',
                'success' => 'Komponens csoport hozzáadása sikeres!',
                'failure' => 'Hiba történt a komponens csoport hozzáadásakor, próbáld újra!',
            ],
            'edit' => [
                'title'   => 'Komponens csoport szerkesztése',
                'success' => 'Komponens csoport szerkesztése sikeres!',
                'failure' => 'Hiba történt a komponens csoport szerkesztésekor, próbáld újra!',
            ],
            'delete' => [
                'success' => 'Komponens csoport törlése sikeres.',
                'failure' => 'Hiba történt a komponens csoport törlésekor, próbáld újra!',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrika',
        'add'     => [
            'title'   => 'Metrika hozzáadása',
            'message' => 'Adj hozzá egy metrikát!',
            'success' => 'Metrika hozzáadása sikeres!',
            'failure' => 'Hiba történt a metrika hozzáadásakor, próbáld újra!',
        ],
        'edit' => [
            'title'   => 'Metrika szerkesztése',
            'success' => 'Metrika szerkesztése sikeres!',
            'failure' => 'Hiba történt a metrika szerkesztésekor, próbáld újra!',
        ],
        'delete' => [
            'success' => 'A metrika törölve, így nem fog megjelenni a státusz oldalon.',
            'failure' => 'Hiba történt a metrika törlésekor, próbáld újra!',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Feliratkozók',
        'description'  => 'Akik feliratkoztak értesítést fognak kapni ha incidens történik',
        'verified'     => 'Ellenőrzött',
        'not_verified' => 'Nem ellenőrzött',
        'add'          => [
            'title'   => 'Új feliratkozó',
            'success' => 'Feliratkozó hozzáadása sikeres!',
            'failure' => 'Hiba történt a feliratkozó hozzáadásakor, próbáld újra!',
        ],
        'edit' => [
            'title'   => 'Feliratkozó szerkesztése',
            'success' => 'Feliratkozó szerkesztése sikeres!',
            'failure' => 'Hiba történt a feliratkozó szerkesztésekor, próbáld újra!',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Csapat',
        'member'      => 'Csapattag',
        'profile'     => 'Profil',
        'description' => 'A csapat tagjai hozzáadhatnak és szerkeszthetnek komponenseket és incidenseket.',
        'add'         => [
            'title'   => 'Új csapattag hozzáadása',
            'success' => 'Csapattag hozzáadása sikeres!',
            'failure' => 'Hiba történt a csapattag hozzáadásakor, próbáld újra!',
        ],
        'edit' => [
            'title'   => 'Profil szerkesztése',
            'success' => 'Profil szerkesztés sikeres!',
            'failure' => 'Hiba történt a profil szerkesztésekor, próbáld újra!',
        ],
        'delete' => [
            'success' => 'Csapattag törlése sikeres, mostantól fogva nem fog hozzáférni a műszerfalhoz!',
            'failure' => 'Hiba történt a csapattag törlésekor, próbáld újra!',
        ],
        'invite' => [
            'title'   => 'Új tag meghívása',
            'success' => 'Meghívó elküldve',
            'failure' => 'Hiba történt a meghívó küldésekor, próbáld újra!',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Beállítások',
        'app-setup' => [
            'app-setup'   => 'Alkalmazás Beállítások',
            'images-only' => 'Csak kép tölthető fel',
            'too-big'     => 'A feltöltött fájl mérete túl nagy, tölts fel ennél kisebbet: :size',
        ],
        'analytics' => [
            'analytics' => 'Analitika',
        ],
        'localization' => [
            'localization' => 'Területi és nyelvi beállítások',
        ],
        'security' => [
            'security'   => 'Biztonság',
            'two-factor' => '2-faktoros autentikáció nélküli felhasználók',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stíluslap',
        ],
        'theme' => [
            'theme' => 'Téma',
        ],
        'edit' => [
            'success' => 'Beállítások mentése sikeres',
            'failure' => 'Hiba történt a beállítás mentésekor!',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Bejelentkezés',
        'logged_in'  => 'Bejelentkeztél!',
        'welcome'    => 'Üdv újra!',
        'two-factor' => 'Írd be a token kódot',
    ],

    // Sidebar footer
    'help'        => 'Segítség',
    'status_page' => 'Státusz Oldal',
    'logout'      => 'Kijelentkezés',

    // Notifications
    'notifications' => [
        'notifications' => 'Értesítések',
        'awesome'       => 'Király.',
        'whoops'        => 'Hupsz.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Üdv a státusz oldaladon!',
        'message' => 'A státusz oldalad már majdnem kész! Alább találsz még pár extra beállítást amit módosíthatsz',
        'close'   => 'Vigyél egyenesen a műszerfalhoz',
        'steps'   => [
            'component'  => 'Komponens létrehozása',
            'incident'   => 'Incidens regisztrálása',
            'customize'  => 'Testreszabás',
            'team'       => 'Felhasználók hozzáadása',
            'api'        => 'API kulcs generálása',
            'two-factor' => '2-faktoros autentikáció',
        ],
    ],

];
