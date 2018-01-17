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
    'writeable_settings' => 'Nie można zapisać zmian w pliku konfiguracyjnym Cachet. Proszę sprawdzić uprawnienia do katalogu <code>./bootstrap/cachet</code>, serwer www musi mieć możliwość zapisu w tym katalogu.',

    // Incidents
    'incidents' => [
        'title'                    => 'Ereignisse &amp; Termine',
        'incidents'                => 'Vorfälle',
        'logged'                   => '{0} Es gibt keine Vorfälle, gute Arbeit.|Du hast einen Vorfall gemeldet.|Du hast <strong>:count</strong> Vorfälle gemeldet.',
        'incident-create-template' => 'Vorlage erstellen',
        'incident-templates'       => 'Vorfall Vorlagen',
        'updates'                  => [
            'title'   => 'Incident updates for :incident',
            'count'   => '{0} Zero Updates|[1] One Update|[2] Two Updates|[3,*] Several Updates',
            'add'     => [
                'title'   => 'Utwórz nową aktualizację zdarzenia',
                'success' => 'Your new incident update has been created.',
                'failure' => 'Something went wrong with the incident update.',
            ],
            'edit' => [
                'title'   => 'Edit incident update',
                'success' => 'The incident update has been updated.',
                'failure' => 'Something went wrong updating the incident update',
            ],
        ],
        'add'                      => [
            'title'   => 'Vorfall hinzufügen',
            'success' => 'Dodano zdarzenie.',
            'failure' => 'Wystąpił błąd podczas dodawania wydarzenia, proszę spróbować ponownie.',
        ],
        'edit' => [
            'title'   => 'Vorfall bearbeiten',
            'success' => 'Vorfall aktualisiert.',
            'failure' => 'Wystąpił błąd podczas edytowania wydarzenia, proszę spróbować ponownie.',
        ],
        'delete' => [
            'success' => 'Wydarzenie zostało usunięte i nie będzie widoczne na stronie statusu.',
            'failure' => 'Wydarzenie nie mogło zostać usunięte, proszę spróbować ponownie.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Vorfall Vorlagen',
            'add'   => [
                'title'   => 'Vorfallvorlage erstellen',
                'message' => 'Powinieneś dodać szablon wydarzenia.',
                'success' => 'Twój nowy szablon wydarzenia został utworzony.',
                'failure' => 'Coś poszło nie tak z szablonem wydarzenia.',
            ],
            'edit' => [
                'title'   => 'Vorlage bearbeiten',
                'success' => 'Szablon wydarzenia został zaktualizowany.',
                'failure' => 'Coś poszło nie tak podczas aktualizacji szablonu wydarzenia',
            ],
            'delete' => [
                'success' => 'Szablon wydarzenia został usunięty.',
                'failure' => 'Szablon wydarzenia nie mógł zostać usunięty, proszę spróbować ponownie.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Geplante Wartungen',
        'logged'       => '{0} Nie ma żadnych harmonogramów, dobra robota.|Posiadasz jeden harmonogram.|Zgłoszono <strong>:count</strong> harmonogramów.',
        'scheduled_at' => 'Geplant am :timestamp',
        'add'          => [
            'title'   => 'Zaplanuj prace konserwatorskie',
            'success' => 'Dodano harmonogram.',
            'failure' => 'Coś poszło nie tak podczas planowania, proszę spróbować ponownie.',
        ],
        'edit' => [
            'title'   => 'Edytuj prace konserwatorskie',
            'success' => 'Harmonogram został zaktualizowany!',
            'failure' => 'Coś poszło nie tak podczas edytowania harmonogramu, proszę spróbować ponownie.',
        ],
        'delete' => [
            'success' => 'Zaplanowane prace konserwatorskie zostały usunięte i nie będą wyświetlane na stronie statusu.',
            'failure' => 'Zaplanowane prace konserwatorskie nie mogły zostać usunięte, proszę spróbować ponownie.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponenten',
        'component_statuses' => 'Komponentenstatus',
        'listed_group'       => 'Gruppiert unter :name',
        'add'                => [
            'title'   => 'Komponente hinzufügen',
            'message' => 'Sie sollten eine Komponente erstellen.',
            'success' => 'Utworzono komponent.',
            'failure' => 'Coś poszło nie tak z komponentem, proszę spróbować ponownie.',
        ],
        'edit' => [
            'title'   => 'Komponente bearbeiten',
            'success' => 'Zaktualizowano komponent.',
            'failure' => 'Coś poszło nie tak z komponentem, proszę spróbować ponownie.',
        ],
        'delete' => [
            'success' => 'Komponent został usunięty!',
            'failure' => 'Komponent nie mógł zostać usunięty, proszę spróbować ponownie.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentgruppe|Komponentgruppen',
            'no_components' => 'Sie sollten eine Komponentengruppe hinzufügen.',
            'add'           => [
                'title'   => 'Eine Komponentengruppe hinzufügen',
                'success' => 'Dodano grupę komponentów.',
                'failure' => 'Coś poszło nie tak z komponentem, proszę spróbować ponownie.',
            ],
            'edit' => [
                'title'   => 'Komponentengruppe bearbeiten',
                'success' => 'Zaktualizowano grupę komponentów.',
                'failure' => 'Coś poszło nie tak z komponentem, proszę spróbować ponownie.',
            ],
            'delete' => [
                'success' => 'Grupa komponentów została usunięta!',
                'failure' => 'Grupa komponentów nie mogła zostać usunięta, proszę spróbować ponownie.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metriken',
        'add'     => [
            'title'   => 'Metrik erstellen',
            'message' => 'Powinieneś dodać metrykę.',
            'success' => 'Utworzono metrykę.',
            'failure' => 'Coś poszło nie tak z metryką, proszę próbować ponownie.',
        ],
        'edit' => [
            'title'   => 'Metrik bearbeiten',
            'success' => 'Zaktualizowano metrykę.',
            'failure' => 'Coś poszło nie tak z metryką, proszę próbować ponownie.',
        ],
        'delete' => [
            'success' => 'Metryka została usunięta i nie będzie wyświetlana na stronie statusu.',
            'failure' => 'Metryka nie mogła zostać usunięta, proszę spróbować ponownie.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'          => 'Abonnenten',
        'description'          => 'Subskrybenci będą otrzymywać powiadomienia, gdy wydarzenia zostaną utworzone lub komponenty zaktualizowane.',
        'description_disabled' => 'To use this feature, you need allow people to signup for notifications.',
        'verified'             => 'Verifiziert',
        'not_verified'         => 'Nicht verifiziert',
        'subscriber'           => ':email, subskrybowany :data',
        'no_subscriptions'     => 'Zapisano do wszystkich aktualizacji',
        'global'               => 'Globally subscribed',
        'add'                  => [
            'title'   => 'Einen neuen Abonnenten hinzufügen',
            'success' => 'Abonnent hinzugefügt.',
            'failure' => 'Coś poszło nie tak podczas dodawania subskrybenta, proszę spróbować ponownie.',
            'help'    => 'Wpisz każdego subskrybenta w nowym wierszu.',
        ],
        'edit' => [
            'title'   => 'Abonnent aktualisieren',
            'success' => 'Abonnent aktualisiert.',
            'failure' => 'Coś poszło nie tak podczas edytowania subskrybenta, proszę spróbować ponownie.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Mitglied',
        'profile'     => 'Profil',
        'description' => 'Teammitglieder werden die M&ouml;glichkeit haben, Komponente sowie Vorf&auml;lle hinzuzuf&uuml;gen und zu ver&auml;ndern.',
        'add'         => [
            'title'   => 'Neues Teammitglied hinzufügen',
            'success' => 'Dodano członka zespołu.',
            'failure' => 'Członek zespołu nie mógł zostać dodany, proszę spróbować ponownie.',
        ],
        'edit' => [
            'title'   => 'Profil aktualisieren',
            'success' => 'Zaktualizowano profil.',
            'failure' => 'Coś poszło nie tak podczas aktualizacji profilu, proszę spróbować ponownie.',
        ],
        'delete' => [
            'success' => 'Benutzer aktualisiert.',
            'failure' => 'Członek zespołu nie mógł zostać dodany, proszę spróbować ponownie.',
        ],
        'invite' => [
            'title'   => 'Zaproś nowego członka zespołu',
            'success' => 'Zaproszenie zostało wysłane',
            'failure' => 'Zaproszenie nie mogło zostać wysłane, proszę spróbować ponownie.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Einstellungen',
        'app-setup' => [
            'app-setup'   => 'Anwendungsinstallation',
            'images-only' => 'Es können nur Bilder hochgeladen werden.',
            'too-big'     => 'Die von Ihnen hochgeladene Datei ist zu groß. Laden Sie ein Bild welches kleiner als :size ist hoch',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'log' => [
            'log' => 'Logi',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'customization' => [
            'customization' => 'Dostosowywanie',
            'header'        => 'Niestandardowy nagłówek HTML',
            'footer'        => 'Niestandardowa stopka HTML',
        ],
        'mail' => [
            'mail'  => 'Poczta',
            'test'  => 'Testuj',
            'email' => [
                'subject' => 'Testuj powiadomienia z Cachet',
                'body'    => 'To jest testowe powiadomienie z Cachet.',
            ],
        ],
        'security' => [
            'security'   => 'Sicherheit',
            'two-factor' => 'Nutzer ohne Zwei-Faktor-Authentifizierung',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Theme',
        ],
        'edit' => [
            'success' => 'Einstellungen gespeichert.',
            'failure' => 'Einstellungen konnten nicht gespeichert werden.',
        ],
        'credits' => [
            'credits'       => 'Autorzy',
            'contributors'  => 'Współtwórcy',
            'license'       => 'Catchet jest otwartym źródłem z licencją BSD utworzonym przez <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Patronaci i sponsorzy',
            'backers'       => 'Jeśli chciałbyś wspomóc przyszły rozwój sprawdź kampanię <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a>.',
            'thank-you'     => 'Dziękujemy każdemu :count współtwórcy.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Anmelden',
        'logged_in'  => 'Sie sind angemeldet.',
        'welcome'    => 'Willkommen zurück!',
        'two-factor' => 'Bitte geben Sie Ihren Token ein.',
    ],

    // Sidebar footer
    'help'        => 'Hilfe',
    'status_page' => 'Statusseite',
    'logout'      => 'Abmelden',

    // Notifications
    'notifications' => [
        'notifications' => 'Benachrichtigungen',
        'awesome'       => 'Großartig.',
        'whoops'        => 'Hoppla.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Wspomóż Cachet',
        'support_subtitle' => 'Sprawdź również naszą stronę na <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong>!',
        'news'             => 'Aktualności',
        'news_subtitle'    => 'Pobierz najnowszą aktualizację',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Witamy w nowym statusie strony!',
        'message' => 'Ihre Statusseite ist fast fertig! Vielleicht möchten Sie diese zusätzlichen Einstellungen konfigurieren',
        'close'   => 'Przejdź prosto do panelu głównego',
        'steps'   => [
            'component'  => 'Komponenten erstellen',
            'incident'   => 'Vorfälle erstellen',
            'customize'  => 'Personalisieren',
            'team'       => 'Benutzer hinzufügen',
            'api'        => 'API Token generieren',
            'two-factor' => 'Zwei-Faktor-Authentifizierung',
        ],
    ],

];
