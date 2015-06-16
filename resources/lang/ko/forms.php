<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    // Setup form fields
    'setup' => [
        'email'            => '이메일',
        'username'         => '사용자이름',
        'password'         => '비밀번호',
        'site_name'        => '사이트 이름',
        'site_domain'      => '사이트 도메인',
        'site_timezone'    => '시간대 선택',
        'site_locale'      => '언어 선택',
        'enable_google2fa' => '구글 2단계 인증 활성화',
        'cache_driver'     => '캐시 드라이버',
        'session_driver'   => '세션 드라이버',
    ],

    // Login form fields
    'login' => [
        'email'         => '이메일',
        'password'      => '비밀번호',
        '2fauth'        => '인증 코드',
        'invalid'       => '잘못된 이메일 또는 패스워드',
        'invalid-token' => '잘못된 토큰n',
        'cookies'       => '로그인 하려면 쿠키를 활성화 해야 합니다.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => '이름',
        'status'             => '상태',
        'component'          => '구성요소',
        'message'            => '메시지',
        'message-help'       => 'Markdown을 사용할 수 있습니다.',
        'scheduled_at'       => '유지 관리는 언제 예정되었습니까?',
        'incident_time'      => '이 문제는 언제 발생 했습니까??',
        'notify_subscribers' => '구독자에게 알림',
        'visibility'         => '공개 설정',
        'public'             => '전체 공개',
        'logged_in_only'     => '로그인한 사용자만 볼 수 있음',
        'templates'          => [
            'name'     => '이름',
            'template' => '템플릿',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => '이름',
        'status'      => '상태',
        'group'       => '그룹',
        'description' => '설명',
        'link'        => '링크',
        'tags'        => '태그',
        'tags-help'   => '쉼표로 구분.',

        'groups' => [
            'name' => '이름',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => '이름',
        'suffix'           => '접미사',
        'description'      => '설명',
        'description-help' => 'Markdown을 사용할 수 있습니다.',
        'display-chart'    => '상태 페이지에 차트 보이기',
        'default-value'    => '기본값',
        'calc_type'        => '통계 계산',
        'type_sum'         => '합계',
        'type_avg'         => '평균',

        'points' => [
            'value' => '값',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => '사이트 이름',
            'site-url'               => '사이트 URL',
            'site-timezone'          => '사이트 시간대',
            'site-locale'            => '사이트 언어',
            'date-format'            => '날짜 형식',
            'incident-date-format'   => '문제 Timestamp 형식',
            'display-graphs'         => '상태 페이지에 그래프 보이기',
            'about-this-page'        => '이 페이지에 대하여',
            'days-of-incidents'      => '몇 일 동안 사건을 표시하시겠습니까?',
            'banner'                 => '배너 이미지',
            'banner-help'            => "가로가 930 픽셀보다 작은 이미지를 업로드 하는 것을 권장합니다.",
            'analytics_google'       => 'Google Analytics 코드',
            'analytics_gosquared'    => 'GoSquared Analytics 코드',
            'analytics_piwik_url'    => 'Piwik 인스턴스의 URL ( "http(s)://" 제외 )',
            'analytics_piwik_siteid' => 'Piwik 사이트 id',
            'subscribers'            => '이메일 알림을 받기 위한 회원가입 허용',
        ],
        'security' => [
            'allowed-domains'      => '허용된 도메인',
            'allowed-domains-help' => '쉼표로 구분. 위에 설정된 도메인은 기본적으로 자동 허용 됩니다.',
        ],
        'stylesheet' => [
            'custom-css' => '사용자 정의 스타일시트',
        ],
        'theme' => [
            'background-color' => '배경색',
            'text-color'       => '글자색',
        ],
    ],

    'user' => [
        'username'       => '사용자이름',
        'email'          => '이메일',
        'password'       => '비밀번호',
        'api-token'      => 'API 토큰',
        'api-token-help' => '기존의 프로그램이 Cachet에 접근하는 것을 막기 위해, API token 을 재성성합니다.',
        '2fa'            => [
            'help' => '2단계 인증을 활성화하면 계정 보안이 강화됩니다. <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> 또는 유사한 앱을 모바일 기기에 다운로드 받아야 합니다. 로그인 할 때, 해당 앱에서 생성된 토큰을 입력해야합니다.',
        ],
    ],

    // Buttons
    'add'    => '추가',
    'save'   => '저장',
    'update' => '수정',
    'create' => '생성',
    'edit'   => '수정',
    'delete' => '삭제',
    'submit' => '전송',
    'cancel' => '취소',
    'remove' => '삭제',

    // Other
    'optional' => '* 선택사항',
];
