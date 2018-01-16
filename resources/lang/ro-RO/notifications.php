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
                'subject'  => 'Starea componentei a fost actualizată',
                'greeting' => 'Starea unei componente a fost actualizată!',
                'content'  => 'Starea :name a fost schimbată din :old_status în :new_status.',
                'action'   => 'Vizualizare',
            ],
            'slack' => [
                'title'   => 'Starea componentei a fost actualizată',
                'content' => 'Starea :name a fost schimbată din :old_status în :new_status.',
            ],
            'sms' => [
                'content' => 'Starea :name a fost schimbată din :old_status în :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Incident nou raportat',
                'greeting' => 'Un nou incident a fost raportat la :app_name.',
                'content'  => 'Incidentul :name a fost raportat',
                'action'   => 'Vizualizare',
            ],
            'slack' => [
                'title'   => 'Incidentul :name a fost raportat',
                'content' => 'Un nou incident a fost raportat la :app_name',
            ],
            'sms' => [
                'content' => 'Un nou incident a fost raportat la :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Incident actualizat',
                'content' => ':name a fost actualizat(ă)',
                'title'   => ':name a fost actualizată la :new_status',
                'action'  => 'Vizualizare',
            ],
            'slack' => [
                'title'   => ':name actualizat(ă)',
                'content' => ':name a fost actualizată la :new_status',
            ],
            'sms' => [
                'content' => 'Incidentul :name a fost actualizat',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Planificare nouă creată',
                'content' => ':name a fost planificat pentru data :date',
                'title'   => 'O nouă mentenanță programată a fost creată.',
                'action'  => 'Vizualizare',
            ],
            'slack' => [
                'title'   => 'Planificare nouă creată!',
                'content' => ':name a fost planificat pentru data :date',
            ],
            'sms' => [
                'content' => ':name a fost planificat pentru data :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Verificați-vă abonamentul',
                'content' => 'Apăsați pentru a vă verifica abonamentul la pagina de stare :app_name.',
                'title'   => 'Verificați-vă abonamentul la pagina de stare :app_name.',
                'action'  => 'Verificați',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping de la Cachet!',
                'content' => 'Aceasta este o notificare de test de la Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Invitația dvs. este în interior...',
                'content' => 'Ați fost invitat(ă) să vă alăturați paginii de stare :app_name.',
                'title'   => 'Ai fost invitat să te alături paginii de stare :app_name.',
                'action'  => 'Accept(ă)',
            ],
        ],
    ],
];
