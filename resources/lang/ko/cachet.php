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
        'status' => [
            1 => '정상',
            2 => '성능 이슈',
            3 => '부분 중단',
            4 => '주요 중단',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => '아무 문제도 보고되지 않음.',
        'past'          => '이전 문제',
        'previous_week' => '전 주',
        'next_week'     => '다음 주',
        'none'          => '아무 문제도 보고되지 않음',
        'scheduled'     => '예정된 유지 보수',
        'scheduled_at'  => ', :timestamp 에 예정됨',
        'status'        => [
            0 => '예정된', // TODO: Hopefully remove this.
            1 => '파악 중',
            2 => '확인됨',
            3 => '주시하는 중',
            4 => '수정됨',
        ],
    ],

    // Service Status
    'service' => [
        'good' => '모든 시스템이 작동 합니다..',
        'bad'  => '일부 시스템에 문제가 있습니다..',
    ],

    'api' => [
        'regenerate' => 'API Key 재생성',
        'revoke'     => 'API Key 폐지',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Last 12 Hours',
            'weekly'  => 'Week',
            'monthly' => 'Month',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => '최신 업데이트를 받아 보기 위한 구독신청.',
        'button'    => '구독',
        'email'     => [
            'subscribe'    => '이메일 구독 신청.',
            'subscribed'   => '이메일 구독 신청이 완료되었습니다. 구독 신청 확인을 위한 이메일을 확인해주세요.',
            'verified'     => '이메일 구독이 확인 되었습니다. 감사합니다!',
            'unsubscribe'  => '이메일 구독 취소',
            'unsubscribed' => '이메일 구독이 취소 되었습니다.',
            'failure'      => '구독 신청 중에 문제가 발생했습니다.',
            'verify'       => [
                'text'           => ":app_name 의 상태 업데이트에 대한 이메일 구독을 확인해주세요.\n:link\n감사합니다, :app_name",
                'html-preheader' => ':app_name 의 상태 업데이트에 대한 이메일 구독을 확인해주세요.',
                'html'           => '<p>:app_name 의 상태 업데이트에 대한 이메일 구독을 확인해주세요.</p><p><a href=":link">:link</a></p> <p>감사 합니다, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => ":app_name 에 새로운 유지 보수에 예정 되었습니다.\n감사합니다, :app_name",
                'html-preheader' => ':app_name 에 새로운 유지 보수가 예정 되었습니다..',
                'html'           => '<p>:app_name 에 새로운 유지 보수가 예정 되었습니다.</p> <p>감사 합니다, :app_name</p>',
            ],
            'incident' => [
                'text'           => ":app_name 에 새로운 문제가 보고 되었습니다.\n감사합니다, :app_name",
                'html-preheader' => ':app_name 에 새로운 문제가 보고 되었습니다.',
                'html'           => '<p>:app_name 에 새로운 문제가 보고 되었습니다.</p> <p>감사 합니다, : app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => '이 사이트에 대해',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => '상태 ',

];
