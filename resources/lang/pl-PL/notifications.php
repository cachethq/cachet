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
            'subject' => 'Zaktualizowano komponent statusu',
            'title'   => 'Komponent statusu został zaktualizowany!',
            'content' => ':name status zmienił się z :old_status na :new_status.',
        ],
    ],
    'incident' => [
        'new' => [
            'subject' => 'Nowy incydent został zgłoszony',
            'content' => ':name został zgłoszony',
            'title'   => 'Nowy incydent został zgłoszony dla :app_name.',
            'action'  => 'Zobacz',
        ],
        'update' => [
            'subject' => 'Zaktualizowano incydent',
            'content' => ':name został zaktualizowany',
            'title'   => ':name zmienił status na :new_status',
            'action'  => 'Zobacz',
        ],
    ],
    'schedule' => [
        'new' => [
            'subject' => 'Utworzono nowy harmonogram',
            'content' => ':name został zaplanowany na :date',
            'title'   => 'Nowa zaplanowana konserwacja została utworzona.',
            'action'  => 'Zobacz',
        ],
    ],
    'subscriber' => [
        'verify' => [
            'subject' => 'Sprawdź swoją subskrypcję',
            'content' => 'Kliknij, aby zaktualizować swoją subskrypcję dla :app_name.',
            'title'   => 'Zweryfikuj swoją subskrypcję dla :app_name.',
            'action'  => 'Weryfikuj',
        ],
    ],
    'system' => [
        'test' => [
            'subject' => 'Powiadomienie z Cachet!',
            'content' => 'To jest testowe powiadomienie z Cachet!',
            'title'   => '🔔',
        ],
    ],
    'user' => [
        'invite' => [
            'subject' => 'Twoje zaproszenie jest w środku...',
            'content' => 'Zostałeś zaproszony do dołączenia do :app_name.',
            'title'   => 'Zostałeś zaproszony do dołączenia do :app_name.',
            'action'  => 'Akceptuj',
        ],
    ],
];
