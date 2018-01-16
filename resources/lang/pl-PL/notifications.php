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
    'component' => [
        'status_update' => [
            'mail' => [
                'subject'  => 'Status komponentu zaktualizowany',
                'greeting' => 'Status komponentów został zaktualizowany!',
                'content'  => 'Status :name zmienił się z :old_status na :new_status.',
                'action'   => 'Widok',
            ],
            'slack' => [
                'title'   => 'Status komponentu zaktualizowany',
                'content' => 'Status :name zmienił się z :old_status na :new_status.',
            ],
            'sms' => [
                'content' => 'Status :name zmienił się z :old_status na :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Zgłoszone nowe zdarzenie',
                'greeting' => 'Nowe zdarzenie zostało zgłoszone na stronie statusu :app_name.',
                'content'  => 'Zdarzenie :name została zarejestrowana',
                'action'   => 'Widok',
            ],
            'slack' => [
                'title'   => 'Zdarzenie :name Zgłoszono',
                'content' => 'Nowe zgłoszenie został zgłoszony w :app_name',
            ],
            'sms' => [
                'content' => 'Nowe zdarzenie zostało zgłoszone na stronie statusu :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Zdarzenie zaktualizowane',
                'content' => ':name został zaktualizowany',
                'title'   => ':name został zaktualizowany na :new_status',
                'action'  => 'Widok',
            ],
            'slack' => [
                'title'   => 'Zaktualizowano :name',
                'content' => ':name został zaktualizowany na :new_status',
            ],
            'sms' => [
                'content' => 'Zdarzenie :name zostało zaktualizowane',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Harmonogram został utworzony',
                'content' => ':name zaplanowano na :date',
                'title'   => 'Zaplanowana nowa konserwacje została utworzona.',
                'action'  => 'Widok',
            ],
            'slack' => [
                'title'   => 'Nowy Harmonogram Utworzony!',
                'content' => ':name zaplanowano na :date',
            ],
            'sms' => [
                'content' => ':name zaplanowano na :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Potwierdź subskrypcje',
                'content' => 'Kliknij żeby potwierdzić subskrypcje na stronie :app_name.',
                'title'   => 'Potwierdź subskrypcję dla strony statusu :app_name.',
                'action'  => 'Zweryfikuj',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping z Cachet!',
                'content' => 'To jest powiadomienie testowe z Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Twoje zaproszenie jest w środku...',
                'content' => 'Zostałeś zaproszony do dołączenia strony statusu :app_name.',
                'title'   => 'Zostałeś zaproszony do dołączenia do strony statusu :app_name.',
                'action'  => 'Zatwierdź',
            ],
        ],
    ],
];
