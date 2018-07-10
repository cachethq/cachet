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
        'last_updated' => '최종 업데이트: 타임 스탬프',
        'status'       => [
            1 => '정상',
            2 => '성능 이슈',
            3 => '부분 중단',
            4 => '주요 중단',
        ],
        'group' => [
            'other' => '다른 구성 요소',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => '아무 문제도 보고되지 않음',
        'past'          => '이전 문제',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => '예정된 유지 보수',
        'scheduled_at'  => ', :timestamp 에 예정됨',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
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
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'API Key 재생성',
        'revoke'     => 'API Key 폐지',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => '1시간 이내',
            'hourly'    => 'Last 12 Hours',
            'weekly'    => 'Week',
            'monthly'   => 'Month',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => '구독',
        'manage'    => [
            'no_subscriptions' => '당신은 모든 업데이트를 구독하고 있습니다',
            'my_subscriptions' => '당신은 다음 업데이트를 구독하고 있습니다',
        ],
        'email' => [
            'subscribe'          => '이메일 구독 신청.',
            'subscribed'         => '이메일 구독 신청이 완료되었습니다. 구독 신청 확인을 위한 이메일을 확인해주세요.',
            'verified'           => '이메일 구독이 확인 되었습니다. 감사합니다!',
            'manage'             => '구독 관리',
            'unsubscribe'        => '이메일 구독 취소',
            'unsubscribed'       => '이메일 구독이 취소 되었습니다.',
            'failure'            => '구독 신청 중에 문제가 발생했습니다.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'   => "Please confirm your email subscription to :app_name status updates.\n:link",
                'html'   => '<p>Please confirm your email subscription to :app_name status updates.</p>',
                'button' => '구독 확인',
            ],
            'maintenance' => [
                'subject' => '[계획된 유지보수] : name',
            ],
            'incident' => [
                'subject' => '[New Incident] :status: :name',
            ],
            'component' => [
                'subject'       => '구성 요소 상태 업데이트',
                'text'          => ':component 컴포넌트 상태가 변경 되었습니다. 현재 컴포넌트는 :component_human_status 입니다. \n감사합니다:app_name',
                'html'          => '<p>:component 컴포넌트 상태가 변경 되었습니다. 현재 컴포넌트는 :component_human_status 입니다. </p><p>감사합니다:app_name</p>',
                'tooltip-title' => ':component_name을 위한 알림 구독',
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
        'update' => 'Cachet 새 버전이 나왔습니다. 업데이트 방법은 <a href="https://docs.cachethq.io/docs/updating-cachet"> 여기서 </a>확인할 수 있습니다!',
    ],

    // Modal
    'modal' => [
        'close'     => '닫기',
        'subscribe' => [
            'title'  => '구성 요소 업데이트를 구독',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => '구독',
        ],
    ],

    // Other
    'home'            => '홈',
    'description'     => ':app의 최신 상태 업데이트를 받아보세요.',
    'powered_by'      => '<a href="https://cachethq.io" class="links">Cachet</a>에 의해 제공됩니다.',
    'about_this_site' => '이 사이트에 대해',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => '상태 ',

];
