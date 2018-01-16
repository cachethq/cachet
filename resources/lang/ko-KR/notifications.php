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
                'subject'  => '구성요소 상태 업데이트됨',
                'greeting' => '구성요소의 상태가 업데이트 됐습니다!',
                'content'  => ':name status changed from :old_status to :new_status.',
                'action'   => '보기',
            ],
            'slack' => [
                'title'   => '구성요소 상태 업데이트됨',
                'content' => ':name status changed from :old_status to :new_status.',
            ],
            'sms' => [
                'content' => ':name status changed from :old_status to :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => '신규 문제가 보고 됐습니다.',
                'greeting' => 'A new incident was reported at :app_name.',
                'content'  => 'Incident :name was reported',
                'action'   => '보기',
            ],
            'slack' => [
                'title'   => 'Incident :name Reported',
                'content' => 'A new incident was reported at :app_name',
            ],
            'sms' => [
                'content' => 'A new incident was reported at :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => '문제 보고',
                'content' => ':name was updated',
                'title'   => ':name was updated to :new_status',
                'action'  => '보기',
            ],
            'slack' => [
                'title'   => ':name Updated',
                'content' => ':name was updated to :new_status',
            ],
            'sms' => [
                'content' => 'Incident :name was updated',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => '신규 일정이 생성됨',
                'content' => ':name was scheduled for :date',
                'title'   => 'A new scheduled maintenance was created.',
                'action'  => '보기',
            ],
            'slack' => [
                'title'   => '신규 일정이 생성됨!',
                'content' => ':name was scheduled for :date',
            ],
            'sms' => [
                'content' => ':name was scheduled for :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => '구독 인증을 해주세요.',
                'content' => 'Click to verify your subscription to :app_name status page.',
                'title'   => 'Verify your subscription to :app_name status page.',
                'action'  => '인증',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Cachet에서 온 핑!',
                'content' => 'Cachet에서 보내는 테스트 알림 입니다!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => '초대장이 안에 있습니다...',
                'content' => '초대 받았습니다 : app_name 상태 페이지.',
                'title'   => 'You\'re invited to join :app_name status page.',
                'action'  => '수락하기',
            ],
        ],
    ],
];
