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

    'dashboard' => '대시보드',

    // Incidents
    'incidents' => [
        'title'                    => '문제 및 예정',
        'incidents'                => '문제',
        'logged'                   => '{0} 아무 문제가 없습니다, 잘하고 있어요.|하나의 문제에 대한 로깅이 있습니다.|<strong>:count</strong> 개의 문제가 리포트 되었습니다.',
        'incident-create-template' => '템플릿 생성',
        'incident-templates'       => '문제 템플릿',
        'add'                      => [
            'title'   => '문제 추가',
            'success' => '문제가 추가되었습니다.',
            'failure' => '추가 중 문제가 발생했습니다.',
        ],
        'edit' => [
            'title'   => '문제 수정',
            'success' => '문제가 수정되었습니다.',
            'failure' => '문제가 발생했습니다.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted. Please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => '문제 템플릿',
            'add'   => [
                'title'   => '문제 템플릿 생성하기',
                'message' => 'You should add an Incident Template.',
                'success' => '템플릿이 생성되었습니다.',
                'failure' => '템플릿 생성 중 문제가 발생했습니다.',
            ],
            'edit' => [
                'title'   => '문제 템플릿 수정',
                'success' => '템플릿이 수정되었습니다!',
                'failure' => '템플릿 수정 중 문제가 발생했습니다.',
            ],
            'delete' => [
                'success' => 'The tmplate has been deleted.',
                'failure' => 'The template could not be deleted. Please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => '예약 된 유지 관리',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => ':timestamp 에 예정됨',
        'add'          => [
            'title'   => '예정 된 유지 관리 추가',
            'success' => '예정이 추가되었습니다.',
            'failure' => '예정 추가 중 문제가 발생습니다.',
        ],
        'edit' => [
            'title'   => '예정 된 유지 관리 수정',
            'success' => '예정이 수정되었습니다!',
            'failure' => '예정 수정 중 문제가 발생했습니다.',
        ],
        'delete' => [
            'success' => '예정이 삭제되었습니다. 상태 페이지에 표시되지 않습니다.',
            'failure' => '일정을 삭제할 수 없습니다. 다시 시도 하십시오.',
        ],
    ],

    // Components
    'components' => [
        'components'         => '구성 요소',
        'component_statuses' => '구성요소 상태',
        'listed_group'       => ':name 그룹',
        'add'                => [
            'title'   => '구성요소 추가',
            'message' => '구성요소를 추가해야 합니다.',
            'success' => '구성요소가 추가되었습니다.',
            'failure' => '구성요소 생성 중 문제가 발생했습니다.',
        ],
        'edit' => [
            'title'   => '구성요소 수정',
            'success' => '구성요소가 수정되었습니다.',
            'failure' => '구성요소와 관련하여 문제가 생겼습니다.',
        ],
        'delete' => [
            'success' => 'Component deleted.',
            'failure' => 'The Component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => '구성요소 그룹|구성요소 그룹',
            'no_components' => '구성 요소 그룹을 추가 해야 합니다.',
            'add'           => [
                'title'   => '구성요소 그룹 추가',
                'success' => '구성요소 그룹 추가되었습니다',
                'failure' => '구성요소 그룹 추가 중 문제가 발생했습니다.',
            ],
            'edit' => [
                'title'   => '구성요소 그룹 수정',
                'success' => '구성요소 그룹이 수정되었습니다.',
                'failure' => '구성요소 그룹과 관련하여 문제가 생겼습니다.',
            ],
            'delete' => [
                'success' => 'Component Group deleted.',
                'failure' => 'The Component Group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => '통계',
        'add'     => [
            'title'   => '통계 추가',
            'message' => 'You should add a Metric.',
            'success' => '통계가 추가되었습니다.',
            'failure' => '통계 추가 중 문제가 발생했습니다.',
        ],
        'edit' => [
            'title'   => '통계 수정',
            'success' => '통계가 수정되었습니다.',
            'failure' => '통계와 관련하여 문제가 생겼습니다.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will not show on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => '구독자',
        'description'  => '구독자들이 문제가 생겼을 때 이메일 업데이트를 받게 됩니다.',
        'verified'     => '인증됨',
        'not_verified' => '인증되지 않음',
        'add'          => [
            'title'   => '구독자 추가',
            'success' => '구독자가 추가됨.',
            'failure' => '구성요소 생성 중 문제가 발생했습니다.',
        ],
        'edit' => [
            'title'   => '구독자 업데이트',
            'success' => '구독자가 업데이트됨.',
            'failure' => '프로필 수정 중 문제가 생겼습니다.',
        ],
    ],

    // Team
    'team' => [
        'team'        => '팀',
        'member'      => '멤버',
        'profile'     => '프로필',
        'description' => '팀 멤버는 구성요소와 문제를 추가하고 수정 할 수 있습니다.',
        'add'         => [
            'title'   => '새 팀 멤버 추가',
            'success' => '팀 멤버가 추가되었습니다',
            'failure' => '멤버 추가 중에 문제가 발생했습니다.',
        ],
        'edit' => [
            'title'   => '프로필 수정',
            'success' => '프로필이 수정되었습니다.',
            'failure' => '프로필 수정 중 문제가 생겼습니다.',
        ],
        'delete' => [
            'success' => '사용자 삭제',
            'failure' => '사용자를 삭제하던 도중 문제가 발생했습니다.',
        ],
        'invite' => [
            'title'   => '새 팀 멤버 초대하기',
            'success' => '사용자가 초대되었습니다.',
            'failure' => '초대 중에 문제가 발생했습니다.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => '설정',
        'app-setup' => [
            'app-setup'   => '애플리케이션 설정',
            'images-only' => '이미지만 업로드 할 수 있습니다.',
            'too-big'     => '업로드 한 파일이 너무 큽니다. :size 보다 작은 이미지를 올려주세요.',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'security' => [
            'security'   => '보안',
            'two-factor' => '2단계 인증을 사용하지 않는 사용자',
        ],
        'stylesheet' => [
            'stylesheet' => '스타일시트',
        ],
        'theme' => [
            'theme' => '테마',
        ],
        'edit' => [
            'success' => '설정이 저장되었습니다.',
            'failure' => '설정을 저장할 수 없습니다.',
        ],
    ],

    // Login
    'login' => [
        'login'      => '로그인',
        'logged_in'  => '로그인 되었습니다.',
        'welcome'    => '안녕하세요!',
        'two-factor' => '토큰을 입력해주세요.',
    ],

    // Sidebar footer
    'help'        => '도움말',
    'status_page' => '상태 페이지',
    'logout'      => '로그아웃',

    // Notifications
    'notifications' => [
        'notifications' => '알림',
        'awesome'       => '좋아요.',
        'whoops'        => '이런...',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your status page!',
        'message' => '상태 페이지는 거의 다 준비 되었습니다! 추가 설정을 해보세요',
        'close'   => '내 대시보드로 바로 가기',
        'steps'   => [
            'component'  => '구성요소 만들기',
            'incident'   => '문제 만들기',
            'customize'  => '사용자 지정',
            'team'       => '사용자 추가',
            'api'        => 'API 토큰 생성',
            'two-factor' => '2단계 인증',
        ],
    ],

];
