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
        'email'            => 'E-mail cím',
        'username'         => 'Felhasználónév',
        'password'         => 'Jelszó',
        'site_name'        => 'Webhely neve',
        'site_domain'      => 'Webhely címe',
        'site_timezone'    => 'Időzóna kiválasztása',
        'site_locale'      => 'Nyelv kiválasztása',
        'enable_google2fa' => 'Google Two Factor Authentication engedélyezése',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Session Driver',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Username or Email',
        'email'         => 'E-mail cím',
        'password'      => 'Jelszó',
        '2fauth'        => 'Hitelesítési kód',
        'invalid'       => 'Érvénytelen felhasználói név vagy jelszó',
        'invalid-token' => 'Érvénytelen kulcs',
        'cookies'       => 'A bejelentkezéshez engedélyezni kell a sütiket.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Név',
        'status'             => 'Státusz',
        'component'          => 'Komponens',
        'message'            => 'Üzenet',
        'message-help'       => 'Markdown formázás támogatott.',
        'scheduled_at'       => 'Mikorra ütemezzük a karbantartást?',
        'incident_time'      => 'Mikor történt az incidens?',
        'notify_subscribers' => 'Feliratkozók értesítése?',
        'visibility'         => 'Incidens láthatósága',
        'public'             => 'Nyilvános',
        'logged_in_only'     => 'Csak bejelentkezett felhasználók',
        'templates'          => [
            'name'     => 'Név',
            'template' => 'Sablon',
            'twig'     => 'Az incidens sablonok készítésekor használható a <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> sablon nyelv.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Név',
        'status'      => 'Státusz',
        'group'       => 'Csoport',
        'description' => 'Leírás',
        'link'        => 'Link',
        'tags'        => 'Cimkék',
        'tags-help'   => 'Vesszővel elválasztva.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'      => 'Név',
            'collapsed' => 'Legyen alapállapotban összecsukva?',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Név',
        'suffix'           => 'Előtag',
        'description'      => 'Leírás',
        'description-help' => 'Markdown formázás használható',
        'display-chart'    => 'Diagram megjelenítése a státusz oldalon?',
        'default-value'    => 'Alapértelmezett érték',
        'calc_type'        => 'Metrika számolása',
        'type_sum'         => 'Összeg',
        'type_avg'         => 'Átlag',
        'places'           => 'Tizedes jegyek száma',
        'default_view'     => 'Alapértelmezett nézet',

        'points' => [
            'value' => 'Érték',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Webhely neve',
            'site-url'               => 'Webhely címe',
            'display-graphs'         => 'Grafikonok megjelenítése a státusz oldalon?',
            'about-this-page'        => 'Az oldalról',
            'days-of-incidents'      => 'Hány nap incidenseit mutassuk?',
            'banner'                 => 'Banner',
            'banner-help'            => "Ajánlott kép szélesség: 930 pixel alatt",
            'subscribers'            => 'Fel lehet iratkozni e-mail értesítésekre?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics kód',
            'analytics_gosquared'    => 'GoSquared Analytics kód',
            'analytics_piwik_url'    => 'Piwik URL (http(s):// nélkül)',
            'analytics_piwik_siteid' => 'Piwik oldal azonosító',
        ],
        'localization' => [
            'site-timezone'          => 'Időzóna',
            'site-locale'            => 'Nyelv',
            'date-format'            => 'Dátumformátum',
            'incident-date-format'   => 'Incidens dátumformátum',
        ],
        'security' => [
            'allowed-domains'      => 'Engedélyezett domain-ek',
            'allowed-domains-help' => 'Vesszővel elválasztva. A fenti domainok automatikusan engedélyezettek alapértelmezés szerint.',
        ],
        'stylesheet' => [
            'custom-css' => 'Egyedi stíluslap (CSS)',
        ],
        'theme' => [
            'background-color'        => 'Háttérszín',
            'background-fills'        => 'Háttér kitöltés (komponensek, incidensek, élőláb)',
            'banner-background-color' => 'Banner háttérszín',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Teljes szélességű banner engedélyezése?',
            'text-color'              => 'Szövegszín',
            'dashboard-login'         => 'Dashboard gomb megjelenítése az oldal alján?',
            'reds'                    => 'Piros (hiba)',
            'blues'                   => 'Kék (információ)',
            'greens'                  => 'Zöld (OK)',
            'yellows'                 => 'Sárga (figyelmeztetések)',
            'oranges'                 => 'Narancs (értesítésekhez)',
            'metrics'                 => 'Metrika kitöltő szín',
            'links'                   => 'Linkek',
        ],
    ],

    'user' => [
        'username'       => 'Felhasználónév',
        'email'          => 'E-mail cím',
        'password'       => 'Jelszó',
        'api-token'      => 'API Kulcs',
        'api-token-help' => 'Az API kulcs újragenerálása után a jelenlegi alkalmazások nem fognak tudni hozzáférni a Cachet-hez.',
        'gravatar'       => 'Gravatar profilkép használata.',
        'user_level'     => 'Felhasználói szintek',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'User',
        ],
        '2fa' => [
            'help' => 'A 2-faktoros autentikáció engedélyezése biztonságosabbá teszi belépési folyamatot. Ehhez le kell tölteni a <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a>-t vagy egy hasonló alkalmazást a mobil eszközödre. Belépéskor az alkalmazás által generált kódot is meg kell adnod.',
        ],
        'team' => [
            'description' => 'Csapattagok meghívása e-mail címmel.',
            'email'       => 'E-mail #:id',
        ],
    ],

    // Buttons
    'add'    => 'Hozzáadás',
    'save'   => 'Mentés',
    'update' => 'Módosít',
    'create' => 'Létrehoz',
    'edit'   => 'Szerkeszt',
    'delete' => 'Törlés',
    'submit' => 'Elküld',
    'cancel' => 'Mégsem',
    'remove' => 'Törlés',
    'invite' => 'Invite',
    'signup' => 'Sign Up',

    // Other
    'optional' => '* Opcionális',
];
