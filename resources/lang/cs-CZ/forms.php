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
        'username'         => 'Uživatelské jméno',
        'password'         => 'Heslo',
        'site_name'        => 'Název webu',
        'site_domain'      => 'Doména webu',
        'site_timezone'    => 'Vyberte vaše časové pásmo',
        'site_locale'      => 'Vyberte svůj jazyk',
        'enable_google2fa' => 'Povolit dvoufaktorové ověřování Google',
        'cache_driver'     => 'Ovladač cache',
        'queue_driver'     => 'Řadič fronty',
        'session_driver'   => 'Ovladač sezení',
        'mail_driver'      => 'Ovladač pro e-mail',
        'mail_host'        => 'Host pro Mail',
        'mail_address'     => 'Adresa Mailu',
        'mail_username'    => 'Uživatelské jméno pro Mail účet',
        'mail_password'    => 'Heslo pro Mail účet',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Uživatelské jméno nebo e-mail',
        'email'         => 'E-mail',
        'password'      => 'Heslo',
        '2fauth'        => 'Ověřovací kód',
        'invalid'       => 'Nesprávné uživatelské jméno nebo heslo',
        'invalid-token' => 'Neplatný token',
        'cookies'       => 'Pro přihlášení je třeba povolit soubory cookie.',
        'rate-limit'    => 'Překročen limit.',
        'remember_me'   => 'Zůstat přihlášený',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Jméno',
        'status'             => 'Stav',
        'component'          => 'Komponenta',
        'component_status'   => 'Stavy služeb',
        'message'            => 'Zpráva',
        'message-help'       => 'Můžete také použít Markdown.',
        'occurred_at'        => 'Kdy došlo k incidentu?',
        'notify_subscribers' => 'Oznámit odběratelům?',
        'notify_disabled'    => 'Z důvodu plánované údržby budou oznámení o tomto incidentu nebo jeho součástech potlačena.',
        'visibility'         => 'Viditelnost incidentu',
        'stick_status'       => 'Připnout událost',
        'stickied'           => 'Připnuté',
        'not_stickied'       => 'Nepřipnuté',
        'public'             => 'Viditelné veřejnosti',
        'logged_in_only'     => 'Viditelné pouze pro přihlášené uživatele',
        'templates'          => [
            'name'     => 'Jméno',
            'template' => 'Šablona',
            'twig'     => 'Šablony pro incidenty mohou používat šablonovací jazyk <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    'schedules' => [
        'name'         => 'Jméno',
        'status'       => 'Stav',
        'message'      => 'Zpráva',
        'message-help' => 'Můžete také použít Markdown.',
        'scheduled_at' => 'Na kdy je naplánovaná údržba?',
        'completed_at' => 'Kdy bude údržba hotová?',
        'templates'    => [
            'name'     => 'Jméno',
            'template' => 'Šablona',
            'twig'     => 'Šablony pro incidenty mohou používat šablonovací jazyk <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Jméno',
        'status'      => 'Stav',
        'group'       => 'Skupina',
        'description' => 'Popis',
        'link'        => 'Odkaz',
        'tags'        => 'Štítky',
        'tags-help'   => 'Oddělené čárkou.',
        'enabled'     => 'Je služba povolena?',

        'groups' => [
            'name'                     => 'Jméno',
            'collapsing'               => 'Rozbalit nebo sbalit možnosti',
            'visible'                  => 'Vždy rozbalené',
            'collapsed'                => 'Sbalit skupinu ve výchozím nastavení',
            'collapsed_incident'       => 'Sbalit skupinu, ale rozšířit, pokud existují problémy',
            'visibility'               => 'Viditelnost',
            'visibility_public'        => 'Viditelné pro veřejnost',
            'visibility_authenticated' => 'Viditelné pouze pro přihlášené uživatele',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Jméno',
        'description'        => 'Popis',
        'start_at'           => 'Naplánovat čas spuštění',
        'timezone'           => 'Časová zóna',
        'schedule_frequency' => 'Naplánovat frekvenci (ve vteřinách)',
        'completion_latency' => 'Prodleva dokončení (ve vteřinách)',
        'group'              => 'Skupina',
        'active'             => 'Aktivní?',
        'groups'             => [
            'name' => 'Název skupiny',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Jméno',
        'suffix'                   => 'Přípona',
        'description'              => 'Popis',
        'description-help'         => 'Můžete také použít Markdown.',
        'display-chart'            => 'Zobrazovat graf na stavové stránce?',
        'default-value'            => 'Výchozí hodnota',
        'calc_type'                => 'Výpočet metrik',
        'type_sum'                 => 'Celkem',
        'type_avg'                 => 'Průměr',
        'places'                   => 'Počet desetinných míst',
        'default_view'             => 'Výchozí zobrazení',
        'threshold'                => 'Jak často se mají snímat metrické body?',
        'visibility'               => 'Viditelnost',
        'visibility_authenticated' => 'Viditelné přihlášeným uživatelům',
        'visibility_public'        => 'Viditelný všem',
        'visibility_hidden'        => 'Vždy skrýt',

        'points' => [
            'value' => 'Hodnota',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'Název webu',
            'site-url'                              => 'URL adresa webu',
            'display-graphs'                        => 'Zobrazit grafy na stavové stránce?',
            'about-this-page'                       => 'O této stránce',
            'days-of-incidents'                     => 'Kolik dní incidentů zobrazovat?',
            'time_before_refresh'                   => 'Obnovovací frekvence status stránky (v sekundách)',
            'major_outage_rate'                     => 'Hlavní doba výpadků (v %)',
            'banner'                                => 'Obrázek banneru',
            'banner-help'                           => 'Doručuje se nenahrávat soubory větší než 930 pixelů na šířku',
            'subscribers'                           => 'Umožnit lidem, aby se přihlašovali k odběru e-mailových upozornění?',
            'suppress_notifications_in_maintenance' => 'Potlačit oznámení dojde-li k události během během času údržby?',
            'skip_subscriber_verification'          => 'Přestat ověřovat uživatele? (Pozor na spammery)',
            'automatic_localization'                => 'Automaticky lokalizovat stránku do jazyka návštěvníka?',
            'enable_external_dependencies'          => 'Povolit závislosti třetích stran (Google písma, Trackery, atd...)',
            'show_timezone'                         => 'Zobrazit časové pásmo, ve které je zobrazena stavová stránka',
            'only_disrupted_days'                   => 'Zobrazit na časové ose pouze dny, kdy došlo k incidentu?',
        ],
        'analytics' => [
            'analytics_google'       => 'Kód pro Google Analytics',
            'analytics_gosquared'    => 'Kód pro GoSquared Analytics',
            'analytics_piwik_url'    => 'URL vaší instance Piwik',
            'analytics_piwik_siteid' => 'Id webu Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'Časové pásmo webu',
            'site-locale'          => 'Jazyk webu',
            'date-format'          => 'Formát datumu',
            'incident-date-format' => 'Formát času pro incident',
        ],
        'security' => [
            'allowed-domains'           => 'Povolené domény',
            'allowed-domains-help'      => 'Oddělené čárkami. Výše uvedené domény jsou ve výchozím nastavení automaticky povoleny.',
            'always-authenticate'       => 'Vždy ověřovat',
            'always-authenticate-help'  => 'Požadovat přihlášení k zobrazení jakékoli Cachet stránky',
        ],
        'stylesheet' => [
            'custom-css' => 'Vlastní šablona stylů',
        ],
        'theme' => [
            'background-color'        => 'Barva pozadí',
            'background-fills'        => 'Pozadí výplně (komponenty, incidenty, zápatí)',
            'banner-background-color' => 'Barva pozadí banneru',
            'banner-padding'          => 'Odsazení banneru',
            'fullwidth-banner'        => 'Povolit banner přes celou obrazovku?',
            'text-color'              => 'Barva textu',
            'dashboard-login'         => 'Zobrazit tlačítko Řídící panel v zápatí?',
            'reds'                    => 'Červená (používané pro chyby)',
            'blues'                   => 'Modrá (používané pro informace)',
            'greens'                  => 'Zelená (používá se pro vyřešení problémů)',
            'yellows'                 => 'Žlutá (používá se pro upozornění)',
            'oranges'                 => 'Oranžová (slouží k oznámení)',
            'metrics'                 => 'Vyplnění metrik',
            'links'                   => 'Odkazy',
        ],
    ],

    'user' => [
        'username'       => 'Uživatelské jméno',
        'email'          => 'E-mail',
        'password'       => 'Heslo',
        'api-token'      => 'API Token',
        'api-token-help' => 'Přegenerování vašeho API tokenu zabrání současným aplikacím přistupovat ke Cachet.',
        'gravatar'       => 'Profilový obrázek si změn na Gravatar.',
        'user_level'     => 'Úroveň uživatele',
        'levels'         => [
            'admin' => 'Správce',
            'user'  => 'Uživatel',
        ],
        '2fa' => [
            'help' => 'Zapnutí dvoufaktorového ověřování zvýší zabezpečení vašeho účtu. Budete muset stáhnout <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> nebo podobnou aplikaci pro mobilní zařízení. Po přihlášení budete vyzváni k zadání tokenu vygenerovaného aplikací.',
        ],
        'team' => [
            'description' => 'Pozvi uživatele do týmu zadáním emailové adresy.',
            'email'       => 'Email #:id',
        ],
    ],

    'general' => [
        'timezone' => 'Vybrat časové pásmo',
    ],

    'seo' => [
        'title'        => 'SEO titulek',
        'description'  => 'Popis SEO',
    ],

    // Buttons
    'add'            => 'Přidat',
    'save'           => 'Uložit',
    'update'         => 'Aktualizovat',
    'create'         => 'Vytvořit',
    'edit'           => 'Upravit',
    'delete'         => 'Smazat',
    'submit'         => 'Potvrdit',
    'cancel'         => 'Zrušit',
    'remove'         => 'Smazat',
    'invite'         => 'Pozvat',
    'signup'         => 'Registrovat se',
    'manage_updates' => 'Správa aktualizací',

    // Other
    'optional' => '* Volitelné',
];
