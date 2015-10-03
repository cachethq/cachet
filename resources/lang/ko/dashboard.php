<?php

# modified at 03-10-2015 06:38

return  array(
	'components'      =>  array(
		'add'                  =>  array(
			'failure'              => '구성요소 생성 중 문제가 발생했습니다.',
			'message'              => '구성요소를 추가해야 합니다.',
			'success'              => '구성요소가 추가되었습니다.',
			'title'                => '구성요소 추가',
		),
		'component_statuses'   => '구성요소 상태',
		'components'           => '구성 요소',
		'edit'                 =>  array(
			'failure'              => '구성요소 수정 중 문제가 발생했습니다.',
			'success'              => '구성요소가 수정되었습니다.',
			'title'                => '구성요소 수정',
		),
		'groups'               =>  array(
			'add'                  =>  array(
				'failure'              => '구성요소 그룹 추가 중 문제가 발생했습니다.',
				'success'              => '구성요소 그룹 추가되었습니다',
				'title'                => '구성요소 그룹 추가',
			),
			'edit'                 =>  array(
				'failure'              => '구성요소 그룹 수정 중 문제가 발생했습니다.',
				'success'              => '구성요소 그룹이 수정되었습니다.',
				'title'                => '구성요소 그룹 수정',
			),
			'groups'               => '구성요소 그룹|구성요소 그룹',
			'no_components'        => '구성 요소 그룹을 추가 해야 합니다.',
		),
		'listed_group'         => ':name 그룹',
		'order'                =>  array(
			'success'              => 'Component orders updated.',
		),
	),
	'dashboard'       => '대시보드',
	'help'            => '도움말',
	'incidents'       =>  array(
		'add'                        =>  array(
			'failure'                    => '추가 중 문제가 발생했습니다.',
			'success'                    => '문제가 추가되었습니다.',
			'title'                      => '문제 추가',
		),
		'edit'                       =>  array(
			'failure'                    => '수정 중 문제가 발생했습니다.',
			'success'                    => '문제가 수정되었습니다.',
			'title'                      => '문제 수정',
		),
		'incident-create-template'   => '템플릿 생성',
		'incident-templates'         => '문제 템플릿',
		'incidents'                  => '문제',
		'logged'                     => '{0} 아무 문제가 없습니다, 잘하고 있어요.|하나의 문제에 대한 로깅이 있습니다.|<strong>:count</strong> 개의 문제가 리포트 되었습니다.',
		'templates'                  =>  array(
			'add'                        =>  array(
				'failure'                    => '템플릿 생성 중 문제가 발생했습니다.',
				'success'                    => '템플릿이 생성되었습니다.',
				'title'                      => '문제 템플릿 생성하기',
			),
			'edit'                       =>  array(
				'failure'                    => '템플릿 수정 중 문제가 발생했습니다.',
				'success'                    => '템플릿이 수정되었습니다!',
				'title'                      => '문제 템플릿 수정',
			),
			'title'                      => '문제 템플릿',
		),
		'title'                      => '문제 및 예정',
	),
	'login'           =>  array(
		'logged_in'       => '로그인 되었습니다.',
		'login'           => '로그인',
		'two-factor'      => '토큰을 입력해주세요.',
		'welcome'         => '안녕하세요!',
	),
	'logout'          => '로그아웃',
	'metrics'         =>  array(
		'add'             =>  array(
			'failure'         => '통계 추가 중 문제가 발생했습니다.',
			'success'         => '통계가 추가되었습니다.',
			'title'           => '통계 추가',
		),
		'edit'            =>  array(
			'failure'         => '통계 수정 중 문제가 발생했습니다.',
			'success'         => '통계가 수정되었습니다.',
			'title'           => '통계 수정',
		),
		'metrics'         => '통계',
	),
	'notifications'   =>  array(
		'awesome'         => '좋아요.',
		'notifications'   => '알림',
		'whoops'          => '이런...',
	),
	'schedule'        =>  array(
		'add'             =>  array(
			'failure'         => '예정 추가 중 문제가 발생습니다.',
			'success'         => '예정이 추가되었습니다.',
			'title'           => '예정 된 유지 관리 추가',
		),
		'delete'          =>  array(
			'failure'         => '일정을 삭제할 수 없습니다. 다시 시도 하십시오.',
			'success'         => '예정이 삭제되었습니다. 상태 페이지에 표시되지 않습니다.',
		),
		'edit'            =>  array(
			'failure'         => '예정 수정 중 문제가 발생했습니다.',
			'success'         => '예정이 수정되었습니다!',
			'title'           => '예정 된 유지 관리 수정',
		),
		'schedule'        => '예정된 유지 관리',
		'scheduled_at'    => ':timestamp 에 예정됨',
	),
	'settings'        =>  array(
		'app-setup'       =>  array(
			'app-setup'       => '애플리케이션 설정',
			'images-only'     => '이미지만 업로드 할 수 있습니다.',
			'too-big'         => '업로드 한 파일이 너무 큽니다. :size 보다 작은 이미지를 올려주세요.',
		),
		'edit'            =>  array(
			'failure'         => '설정을 저장할 수 없습니다.',
			'success'         => '설정이 저장되었습니다.',
		),
		'security'        =>  array(
			'security'        => '보안',
			'two-factor'      => '2단계 인증을 사용하지 않는 사용자',
		),
		'settings'        => '설정',
		'stylesheet'      =>  array(
			'stylesheet'      => '스타일시트',
		),
		'theme'           =>  array(
			'theme'           => '테마',
		),
	),
	'status_page'     => '상태 페이지',
	'team'            =>  array(
		'add'             =>  array(
			'failure'         => '멤버 추가 중에 문제가 발생했습니다.',
			'success'         => '팀 멤버가 추가되었습니다',
			'title'           => '새 팀 멤버 추가',
		),
		'description'     => '팀 멤버는 구성요소와 문제를 추가하고 수정 할 수 있습니다.',
		'edit'            =>  array(
			'failure'         => '프로필 수정 중 문제가 생겼습니다.',
			'success'         => '프로필이 수정되었습니다.',
			'title'           => '프로필 수정',
		),
		'member'          => '멤버',
		'profile'         => '프로필',
		'team'            => '팀',
	),
	'welcome'         =>  array(
		'close'           => '내 대시보드로 바로 가기',
		'message'         => '상태 페이지는 거의 다 준비 되었습니다! 추가 설정을 해보세요',
		'steps'           =>  array(
			'api'             => 'API 토큰 생성',
			'component'       => '구성요소 만들기',
			'customize'       => '사용자 지정',
			'incident'        => '문제 만들기',
			'team'            => '사용자 추가',
			'two-factor'      => '2단계 인증',
		),
		'welcome'         => 'Cachet에 오신 것을 환영 합니다',
	),
);
