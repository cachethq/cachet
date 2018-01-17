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
            0 => '알 수 없음',
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
        'none'         => '아무 문제도 보고되지 않음',
        'past'         => '이전 문제',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => '예정된 유지 보수',
        'scheduled_at' => ', :timestamp 에 예정됨',
        'posted'       => '게시 됨 :timestamp',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => '파악 중',
            2 => '확인됨',
            3 => '주시하는 중',
            4 => '수정됨',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Upcoming',
            1 => 'In Progress',
            2 => 'Complete',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The system is experiencing major issues|[2,Inf] Some systems are experiencing major issues',
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
        'subscribe'   => '최신 업데이트를 받아 보기 위한 구독신청.',
        'unsubscribe' => '탈퇴하기 :링크',
        'button'      => '구독',
        'manage'      => [
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
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => '이 사이트에 대해',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => '상태 ',

];
