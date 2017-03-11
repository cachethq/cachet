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
            1 => 'Działa',
            2 => 'Problemy z wydajnością',
            3 => 'Potencjalna awaria',
            4 => 'Awaria',
        ],
        'group' => [
            'other' => 'Pozostałe komponenty',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Brak zgłoszonych incydentów',
        'past'          => 'Wcześniejsze incydenty',
        'previous_week' => 'Poprzedni tydzień',
        'next_week'     => 'W przyszłym tygodniu',
        'scheduled'     => 'Zaplanowana konserwacja',
        'scheduled_at'  => ' na :timestamp',
        'status'        => [
            0 => 'Zaplanowane', // TODO: Hopefully remove this.
            1 => 'Poszukiwanie przyczyny',
            2 => 'Zidentyfikowane',
            3 => 'Monitorowanie',
            4 => 'Naprawione',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System działa poprawnie|[2,Inf] Wszystkie systemy działają poprawnie',
        'bad'   => '[0,1] W systemie obecnie występują problemy|[2,Inf] W niektórych systemach występują problemy',
        'major' => '[0,1] Występuje poważna awaria z usługą|[2,Inf] Występuje poważna awaria w działaniu niektórych usług',
    ],

    'api' => [
        'regenerate' => 'Ponownie wygeneruj klucz API',
        'revoke'     => 'Dezaktywuj klucz API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Ostatnia godzina',
            'hourly'    => 'Ostatnie 12 godzin',
            'weekly'    => 'Tydzień',
            'monthly'   => 'Miesiąc',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'   => 'Zapisz się, aby uzyskać najnowsze aktualizacje',
        'button'      => 'Subskrybuj',
        'manage'    => [
            'no_subscriptions' => 'Jesteś obecnie zapisany na wszystkie aktualizacje.',
            'my_subscriptions' => 'Jesteś obecnie zapisany na poniższe aktualizacje.',
        ],
        'email' => [
            'subscribe'          => 'Subskrybuj aktualizacje przez e-mail.',
            'subscribed'         => 'Twój adres e-mail został dodany na listę subskrybentów. Sprawdź e-mail, aby potwierdzić subskrypcję.',
            'verified'           => 'Twoja subskrypcja została poprawnie zatwierdzona.',
            'manage'             => 'Zarządzanie subskrypcją',
            'unsubscribe'        => 'Wypisz się z subskrypcji e-mail.',
            'unsubscribed'       => 'Twój adres e-mail został usunięty z listy subskrybentów.',
            'failure'            => 'Coś poszło nie tak z subskrypcją.',
            'already-subscribed' => 'Nie można zapisać się na subskrypcję, :email jest już zapisany.',
            'verify'             => [
                'text'   => "Prosimy o potwierdzenie subskrypcji z :app_name.\n:link",
                'html'   => '<p>Potwierdź swoją subskrypcję e-mail dla :app_name.</p>',
                'button' => 'Potwierdzam subskrypcję',
            ],
            'maintenance' => [
                'subject' => '[Planowana konserwacja] :name',
            ],
            'incident' => [
                'subject' => '[Nowy incydent] :status: :name',
            ],
            'component' => [
                'subject'       => 'Aktualizacje komponentu',
                'text'          => 'Komponent :component_name zmienił status. Aktualnie jest w :component_human_status.\nDziękujemy, :app_name',
                'html'          => '<p>Komponent :component_name zmienił status. Aktualnie jest w :component_human_status.</p><p>Dziękujemy, :app_name</p>',
                'tooltip-title' => 'Subskrybuj powiadomienia dla :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Zostałeś zaproszony do strony statusowej zespołu :app_name. Aby się zapisać, kliknij na link umieszczony dalej.\n:link\nDziękujemy, :app_name",
                'html' => '<p>Zostałeś zaproszony do strony statusowej zespołu :app_name. Aby się zapisać, kliknij na link umieszczony dalej.</p><p><a href=":link">:link</a></p><p>Dziękujemy, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Zarejestruj się',
        'username' => 'Login',
        'email'    => 'E-mail',
        'password' => 'Hasło',
        'success'  => 'Twoje konto zostało utworzone.',
        'failure'  => 'Coś poszło nie tak w trakcje rejestracji.',
    ],

    'system' => [
        'update' => 'Nowsza wersja Cachet jest dostępna. Kliknij <a href="https://docs.cachethq.io/docs/updating-cachet">tutaj</a>, aby dowiedzieć się jak dokonać aktualizacji!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Zamknij',
        'subscribe' => [
            'title'  => 'Subskrybuj aktualizacje komponentu',
            'body'   => 'Podaj swój adres email w celu subskrypcji aktualizacji dla tego komponentu. Jeśli byłeś już zapisany, otrzymujesz aktualizacje dla tego komponentu.',
            'button' => 'Subskrybuj',
        ],
    ],

    // Other
    'home'            => 'Strona Główna',
    'description'     => 'Bądź na bieżąco z aktualizacjami z :app.',
    'powered_by'      => 'Obsługiwany przez <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Informacje o tej stronie',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status-Feed',

];
