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
        'last_updated' => 'Last updated :timestamp',
        'status'       => [
            1 => '정상',
            2 => '성능 이슈',
            3 => '부분 중단',
            4 => '주요 중단',
        ],
        'group' => [
            'other' => 'Other Components',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'No incidents reported',
        'past'          => '이전 문제',
        'previous_week' => '전 주',
        'next_week'     => '다음 주',
        'scheduled'     => '예정된 유지 보수',
        'scheduled_at'  => ', :timestamp 에 예정됨',
        'status'        => [
            0 => '예정됨', // TODO: Hopefully remove this.
            1 => '파악 중',
            2 => '확인됨',
            3 => '주시하는 중',
            4 => '수정됨',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service is experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'API Key 재생성',
        'revoke'     => 'API Key 폐지',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Last Hour',
            'hourly'    => 'Last 12 Hours',
            'weekly'    => 'Week',
            'monthly'   => 'Month',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => '최신 업데이트를 받아 보기 위한 구독신청.',
        'button'    => '구독',
        'manage'    => [
            'no_subscriptions' => 'You\'re currently subscribed to all updates.',
            'my_subscriptions' => 'You\'re currently subscribed to the following updates.',
        ],
        'email' => [
            'subscribe'          => '이메일 구독 신청.',
            'subscribed'         => '이메일 구독 신청이 완료되었습니다. 구독 신청 확인을 위한 이메일을 확인해주세요.',
            'verified'           => '이메일 구독이 확인 되었습니다. 감사합니다!',
            'manage'             => 'Manage your subscription',
            'unsubscribe'        => '이메일 구독 취소',
            'unsubscribed'       => '이메일 구독이 취소 되었습니다.',
            'failure'            => '구독 신청 중에 문제가 발생했습니다.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'   => "Please confirm your email subscription to :app_name status updates.\n:link",
                'html'   => '<p>Please confirm your email subscription to :app_name status updates.</p>',
                'button' => 'Confirm Subscription',
            ],
            'maintenance' => [
                'subject' => '[Maintenance Scheduled] :name',
            ],
            'incident' => [
                'subject' => '[New Incident] :status: :name',
            ],
            'component' => [
                'subject'       => 'Component Status Update',
                'text'          => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html'          => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
                'tooltip-title' => 'Subscribe to notifications for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => ":app_name 팀의 상태페이지에 초대되었습니다. 가입하시려면 다음 링크를 눌러주세요.\n:link\n감사합니다, :app_name",
                'html' => '<p>:app_name 팀의 상태페이지에 초대되었습니다. 가입하시려면 다음 링크를 눌러주세요.</p>
<p><a href=":link">:link</a></p><p>감사합니다, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => '가입',
        'username' => '사용자이름',
        'email'    => '이메일',
        'password' => '비밀번호',
        'success'  => '계정이 생성되었습니다.',
        'failure'  => '가입 중에 문제가 생겼습니다.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Close',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => '구독',
        ],
    ],

    // Other
    'home'            => 'Home',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => '이 사이트에 대해',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => '상태 ',

];
