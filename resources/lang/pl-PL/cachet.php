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
            0 => 'Unknown',
            1 => 'Funktionsfähig',
            2 => 'Leistungsprobleme',
            3 => 'Teilweiser Ausfall',
            4 => 'Schwerer Ausfall',
        ],
        'group' => [
            'other' => 'Pozostałe komponenty',
        ],
        'select_all'   => 'Select All',
        'deselect_all' => 'Deselect All',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Brak zgłoszonych incydentów',
        'past'         => 'Vergangene Vorfälle',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Maintenance',
        'scheduled_at' => ', geplant :timestamp',
        'posted'       => 'Posted :timestamp by :username',
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
            0 => 'Upcoming',
            1 => 'In Progress',
            2 => 'Complete',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1]System operational|[2,*]All systems are operational',
        'bad'   => '[0,1]The system is experiencing issues|[2,*]Some systems are experiencing issues',
        'major' => '[0,1]The system is experiencing major issues|[2,*]Some systems are experiencing major issues',
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
        'subscribe'           => 'Subscribe to status changes and incident updates',
        'unsubscribe'         => 'Unsubscribe',
        'button'              => 'Abonnieren',
        'manage_subscription' => 'Manage subscription',
        'manage'              => [
            'notifications'       => 'Benachrichtigungen',
            'notifications_for'   => 'Manage notifications for',
            'no_subscriptions'    => 'Jesteś obecnie zapisany na wszystkie aktualizacje.',
            'update_subscription' => 'Update Subscription',
            'my_subscriptions'    => 'Jesteś obecnie zapisany na poniższe aktualizacje.',
            'manage_at_link'      => 'Manage your subscriptions at :link',
        ],
        'email' => [
            'manage_subscription' => 'We\'ve sent you an email, please click the link to manage your subscription',
            'subscribe'           => 'Aktualisierungen per E-Mail abonnieren.',
            'subscribed'          => 'Sie haben E-Mail-Benachrichtigungen abonniert, überprüfen Sie bitte Ihre E-Mail, um Ihr Abonnement zu bestätigen.',
            'updated-subscribe'   => 'You\'ve succesfully updated your subscriptions.',
            'verified'            => 'Ihre E-Mail-Abonnement ist bestätigt worden. Danke!',
            'manage'              => 'Zarządzanie subskrypcją',
            'unsubscribe'         => 'Von E-Mail-Updates deabonnieren.',
            'unsubscribed'        => 'Ihre E-Mail-Abonnement wurde gekündigt.',
            'failure'             => 'Etwas ist mit dem Abonnement schief gelaufen.',
            'already-subscribed'  => 'Subskrypcja niemożliwa, :email jest już zapisany.',
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

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details and updates about the :name incident that occurred on :date',
            'schedule'  => 'Details about the scheduled maintenance period :name starting :startDate',
            'subscribe' => 'Subscribe to :app in order to receive updates of incidents and scheduled maintenance periods',
            'overview'  => 'Bądź na bieżąco z aktualizacjami z :app.',
        ],
    ],

    // Other
    'home'            => 'Strona Główna',
    'powered_by'      => 'Obsługiwany przez <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'Über diese Seite',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status-Feed',

];
