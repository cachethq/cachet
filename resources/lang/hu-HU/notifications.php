<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please Megjelenít the LICENSE
 * file that was distributed with this source code.
 */

return [
    'component' => [
        'status_update' => [
            'mail' => [
                'subject'  => 'Komponens állapota frissítve.',
                'greeting' => 'Komponens állapota frissítve lett!',
                'content'  => ':name állapota megváltozott errol :old_status erre :new_status.',
                'action'   => 'Megjelenít',
            ],
            'slack' => [
                'title'   => 'Komponens állapota frissítve',
                'content' => ':name állapota megváltozott errol :old_status erre :new_status',
            ],
            'sms' => [
                'content' => ':name állapota megváltozott errol :old_status erre :new_status',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Új incidens bejelentve',
                'greeting' => 'Új incidens lett bejelentve a következonél :app_name.',
                'content'  => 'Incidens :name bejelentve',
                'action'   => 'Megjelenít',
            ],
            'slack' => [
                'title'   => 'Incidens :name bejelentve',
                'content' => 'Új incidens lett bejelentve a következonél :app_name',
            ],
            'sms' => [
                'content' => 'Új incidens lett bejelentve a következonél :app_name',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Új incidens bejelentve',
                'content' => ':name frissítve',
                'title'   => ':name frissítve erre :new_status',
                'action'  => 'Megjelenít',
            ],
            'slack' => [
                'title'   => ':name frissítve',
                'content' => ':name frissítve erre :new_status',
            ],
            'sms' => [
                'content' => 'Incidens :name frissítve',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Új ütemezés létrehozva',
                'content' => ':name ütemezve erre a dátumra :date',
                'title'   => 'Ütemezett karbantartás létrehozva.',
                'action'  => 'Megjelenít',
            ],
            'slack' => [
                'title'   => 'Új ütemezés létrehozva!',
                'content' => ':name ütemezve erre a dátumra :date',
            ],
            'sms' => [
                'content' => ':name ütemezve erre a dátumra :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Erosítsd meg a feliratkozásod',
                'content' => 'Kattints ide, hogy megerosítsd a feliratkozásod a :app_name állapotoldalra.',
                'title'   => 'Erosítsd meg a feliratkozásod a(z) :app_name állapotoldalra.',
                'action'  => 'Megerosít',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping a Cachet-tol!',
                'content' => 'Teszt értesítés a Cachet-tol!',
                'title'   => 'Title',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Itt a meghívód...',
                'content' => 'Meglettél hívva a(z) :app_name állapotoldalra.',
                'title'   => 'Meglettél hívva, hogy csatlakozz a  :app_name állapotoldalához.',
                'action'  => 'Elfogadás',
            ],
        ],
    ],
];
