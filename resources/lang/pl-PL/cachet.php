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
    // Components
    'components' => [
        'last_updated' => 'Ostatnia aktualizacja :timestamp',
        'status'       => [
            0 => 'Nieznany',
            1 => 'Funktionsfähig',
            2 => 'Leistungsprobleme',
            3 => 'Teilweiser Ausfall',
            4 => 'Schwerer Ausfall',
        ],
        'group' => [
            'other' => 'Pozostałe komponenty',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Brak zgłoszonych incydentów',
        'past'         => 'Vergangene Vorfälle',
        'stickied'     => 'Przyklejone zdarzenia',
        'scheduled'    => 'Geplante Wartungen',
        'scheduled_at' => ', geplant :timestamp',
        'posted'       => 'Opublikowano :timestamp',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => 'Untersuchungen laufen',
            2 => 'Identifiziert',
            3 => 'Unter Beobachtung',
            4 => 'Behoben',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Nadchodzące',
            1 => 'W trakcie',
            2 => 'Zakończone',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System działa poprawnie|[2,Inf] Wszystkie systemy działają poprawnie',
        'bad'   => '[0,1] W systemie obecnie występują problemy|[2,Inf] W niektórych systemach występują problemy',
        'major' => '[0,1] System jest poważnie przeciążony|[2,Inf] Niektóre systemy są poważnie przeciążone',
    ],

    'api' => [
        'regenerate' => 'API-Schlüssel neu generieren',
        'revoke'     => 'API-Schlüssel widerrufen',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Ostatnia godzina',
            'hourly'    => 'Letzte 12 Stunden',
            'weekly'    => 'Wöchentlich',
            'monthly'   => 'Monatlich',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'   => 'Abonnieren Sie um die neuesten Updates zu erhalten.',
        'unsubscribe' => 'Wypisz się na :link',
        'button'      => 'Abonnieren',
        'manage'      => [
            'no_subscriptions' => 'Jesteś obecnie zapisany na wszystkie aktualizacje.',
            'my_subscriptions' => 'Jesteś obecnie zapisany na poniższe aktualizacje.',
        ],
        'email' => [
            'subscribe'          => 'Aktualisierungen per E-Mail abonnieren.',
            'subscribed'         => 'Sie haben E-Mail-Benachrichtigungen abonniert, überprüfen Sie bitte Ihre E-Mail, um Ihr Abonnement zu bestätigen.',
            'verified'           => 'Ihre E-Mail-Abonnement ist bestätigt worden. Danke!',
            'manage'             => 'Zarządzanie subskrypcją',
            'unsubscribe'        => 'Von E-Mail-Updates deabonnieren.',
            'unsubscribed'       => 'Ihre E-Mail-Abonnement wurde gekündigt.',
            'failure'            => 'Etwas ist mit dem Abonnement schief gelaufen.',
            'already-subscribed' => 'Subskrypcja niemożliwa, :email jest już zapisany.',
        ],
    ],

    'signup' => [
        'title'    => 'Zarejestruj się',
        'username' => 'Nazwa Użytkownika',
        'email'    => 'E-Mail',
        'password' => 'Hasło',
        'success'  => 'Twoje konto zostało utworzone.',
        'failure'  => 'Coś poszło nie tak w trakcje rejestracji.',
    ],

    'system' => [
        'update' => 'Nowsza wersja Cachet\'a jest dostępna. Kliknij <a href="https://docs.cachethq.io/docs/updating-cachet">tutaj</a>, aby dowiedzieć się jak dokonać aktualizacji!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Zamknij',
        'subscribe' => [
            'title'  => 'Subskrybuj aktualizacje komponentu',
            'body'   => 'Podaj swój adres email w celu subskrypcji aktualizacji dla tego komponentu. Jeśli byłeś już zapisany, otrzymujesz aktualizacje dla tego komponentu.',
            'button' => 'Abonnieren',
        ],
    ],

    // Other
    'home'            => 'Strona Główna',
    'description'     => 'Bądź na bieżąco z aktualizacjami z :app.',
    'powered_by'      => 'Obsługiwany przez <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Czas według strefy :timezone.',
    'about_this_site' => 'Über diese Seite',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status-Feed',

];
