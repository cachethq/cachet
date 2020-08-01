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
                'subject'  => 'Aktualizován stav komponenty',
                'greeting' => 'Stav kompomenty byl aktualizován!',
                'content'  => ':name změnil stav z :old_status na :new_status.',
                'action'   => 'Zobrazit',
            ],
            'slack' => [
                'title'   => 'Aktualizován stav komponenty',
                'content' => ':name změnil stav z :old_status na :new_status.',
            ],
            'sms' => [
                'content' => ':name změnil stav z :old_status na :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Nahlášena nová událost',
                'greeting' => 'Nová událost byla nahlášena v :app_name.',
                'content'  => 'Událost :name byla nahlášena',
                'action'   => 'Zobrazit',
            ],
            'slack' => [
                'title'   => 'Událost :name nahlášena',
                'content' => 'Nová událost byla nahlášena v :app_name',
            ],
            'sms' => [
                'content' => 'Nová událost byla nahlášena v :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Událost aktualizována',
                'content' => ':name byl aktualizován',
                'title'   => ':name změnil stav na :new_status',
                'action'  => 'Zobrazit',
            ],
            'slack' => [
                'title'   => ':name byl aktualizován',
                'content' => ':name změnil stav na :new_status',
            ],
            'sms' => [
                'content' => 'Událost :name byla aktualizována',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Nový plán vytvořen',
                'content' => ':name bylo naplánováno na :date',
                'title'   => 'Nová plánovaná údržba byla vytvořena.',
                'action'  => 'Zobrazit',
            ],
            'slack' => [
                'title'   => 'Nový plán vytvořen!',
                'content' => ':name bylo naplánováno na :date',
            ],
            'sms' => [
                'content' => ':name bylo naplánováno na :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Potvrďte váš odběr',
                'content' => 'Klikněte pro potvrzení odběru stavové stránky :app_name.',
                'title'   => 'Potvrďte svůj odběr stavové stránky :app_name.',
                'action'  => 'Ověřit',
            ],
        ],
        'manage' => [
            'mail' => [
                'subject' => 'Spravovat e-mailové odběry',
                'content' => 'Klikněte pro potvrzení odběru stavové stránky :app_name.',
                'title'   => 'Klikněte pro potvrzení odběru stavové stránky :app_name.',
                'action'  => 'Spravovat odběry',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping z Cachet!',
                'content' => 'Toto je testovací oznámení z Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Uvnitř najdete pozvánku...',
                'content' => 'Byl jste pozván, abyste se připojil ke stavové stránce :app_name.',
                'title'   => 'Jste pozváni, abyste se připojili ke stavové stránce :app_name.',
                'action'  => 'Potvrdit',
            ],
        ],
    ],
];
