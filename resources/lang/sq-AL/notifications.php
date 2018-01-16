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
                'subject'  => 'Statusi i komponentit u azhornua',
                'greeting' => 'Statusi i nje komponenti u azhornua!',
                'content'  => 'Status i :name u ndryshua nga :old_status ne :new_status.',
                'action'   => 'Shiko',
            ],
            'slack' => [
                'title'   => 'Statusi i komponentit u azhornua',
                'content' => 'Status i :name u ndryshua nga :old_status ne :new_status.',
            ],
            'sms' => [
                'content' => 'Status i :name u ndryshua nga :old_status ne :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'U raportua incident i ri',
                'greeting' => 'New incident i ri u raportua ne :app_name.',
                'content'  => 'Incidenti :name u raportua',
                'action'   => 'Shiko',
            ],
            'slack' => [
                'title'   => 'Incidenti :name u raportua',
                'content' => 'Nje incident i ri u raportua ne :app_name',
            ],
            'sms' => [
                'content' => 'New incident i ri u raportua ne :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'U azhornua nje incident',
                'content' => ':name u azhornua',
                'title'   => ':name u azhornua ne :new_status',
                'action'  => 'Shiko',
            ],
            'slack' => [
                'title'   => ':name u azhornua',
                'content' => ':name u azhornua ne :new_status',
            ],
            'sms' => [
                'content' => 'Incidenti :name u azhornua',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Nje prenotim i ri u krijua',
                'content' => ':name u prenotua per :date',
                'title'   => 'Nje orar i ri mirembajtjeje u krijua.',
                'action'  => 'Shiko',
            ],
            'slack' => [
                'title'   => 'New prenotim i ri u krijua!',
                'content' => ':name u prenotua per :date',
            ],
            'sms' => [
                'content' => ':name u prenotua per :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Verifikoni abonimin tuaj',
                'content' => 'Kliko per te verifikuar abonimin ne faqen e statusit te :app_name.',
                'title'   => 'Verifiko abonimin tuaj ne faqen e statusit te :app_name.',
                'action'  => 'Verifiko',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping nga Cachet!',
                'content' => 'Ky eshte nje njoftim prove nga Cachet!',
                'title'   => 'Zile',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Ftesa juaj eshte brenda...',
                'content' => 'Jeni ftuar per tu bashkuar faqes se statusit te :app_name.',
                'title'   => 'Ftesa juaj per tu bashkuar faqes se statusit te :app_name.',
                'action'  => 'Pranoj',
            ],
        ],
    ],
];
