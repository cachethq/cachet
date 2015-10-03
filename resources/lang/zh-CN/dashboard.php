<?php

# modified at 03-10-2015 06:38

return  array(
	'components'      =>  array(
		'add'                  =>  array(
			'failure'              => '组件添加失败。',
			'message'              => '你应该添加一个组件。',
			'success'              => '组件已创建。',
			'title'                => '添加一个组件',
		),
		'component_statuses'   => '组件状态',
		'components'           => '组件',
		'edit'                 =>  array(
			'failure'              => '组件编辑失败。',
			'success'              => '组件已更新。',
			'title'                => '编辑一个组件',
		),
		'groups'               =>  array(
			'add'                  =>  array(
				'failure'              => '分组添加失败。',
				'success'              => '部件分组已添加。',
				'title'                => '添加一个分组。',
			),
			'edit'                 =>  array(
				'failure'              => '分组更新失败。',
				'success'              => '分组已更新。',
				'title'                => '编辑组件分组',
			),
			'groups'               => '部件分组|部件分组',
			'no_components'        => '您应添加一个组件分组。',
		),
		'listed_group'         => '根据 :name 分组',
		'order'                =>  array(
			'success'              => 'Component orders updated.',
		),
	),
	'dashboard'       => '仪表盘',
	'help'            => '帮助',
	'incidents'       =>  array(
		'add'                        =>  array(
			'failure'                    => '事件添加失败。',
			'success'                    => '事件已添加',
			'title'                      => '添加一个事件',
		),
		'edit'                       =>  array(
			'failure'                    => '事件编辑失败。',
			'success'                    => '事件已更新。',
			'title'                      => '编辑一个事件',
		),
		'incident-create-template'   => '创建模板',
		'incident-templates'         => '事件模板',
		'incidents'                  => '事件',
		'logged'                     => '{0} 目前没有问题 干得漂亮！|您已经记录了一个事件|您已经报告了 <strong>:count</strong> 个事件',
		'templates'                  =>  array(
			'add'                        =>  array(
				'failure'                    => '创建模板失败。',
				'success'                    => '模板已创建。',
				'title'                      => '创建一个事件模板。',
			),
			'edit'                       =>  array(
				'failure'                    => '模板修改失败',
				'success'                    => '模板已更新!',
				'title'                      => '编辑模板',
			),
			'title'                      => '事件模板',
		),
		'title'                      => '事件和维护计划',
	),
	'login'           =>  array(
		'logged_in'       => '您已登陆',
		'login'           => '登陆',
		'two-factor'      => '请输入您的双重验证Token。',
		'welcome'         => '欢迎回来！',
	),
	'logout'          => '注销',
	'metrics'         =>  array(
		'add'             =>  array(
			'failure'         => '图表创建失败。',
			'success'         => '图表已创建。',
			'title'           => '添加一个图表',
		),
		'edit'            =>  array(
			'failure'         => '图表更新失败。',
			'success'         => '图表已更新。',
			'title'           => '编辑图表',
		),
		'metrics'         => '图表',
	),
	'notifications'   =>  array(
		'awesome'         => '太棒了！',
		'notifications'   => '通知',
		'whoops'          => '哎呦！',
	),
	'schedule'        =>  array(
		'add'             =>  array(
			'failure'         => '计划添加失败。',
			'success'         => '计划已添加。',
			'title'           => '添加维护计划',
		),
		'delete'          =>  array(
			'failure'         => '无法删除该维护计划。请再试一次。',
			'success'         => '维护计划已被删除，它将从你的状态页上消失。',
		),
		'edit'            =>  array(
			'failure'         => '计划更新失败。',
			'success'         => '计划已更新！',
			'title'           => '编辑维护计划',
		),
		'schedule'        => '计划维护',
		'scheduled_at'    => '计划在 :timestamp',
	),
	'settings'        =>  array(
		'app-setup'       =>  array(
			'app-setup'       => '应用安装',
			'images-only'     => '只能上传图像。',
			'too-big'         => '你上传的文件太大了。上传的图像大小应小于:size',
		),
		'edit'            =>  array(
			'failure'         => '无法保存设置。',
			'success'         => '设置已保存。',
		),
		'security'        =>  array(
			'security'        => '安全',
			'two-factor'      => '没有启用双因素身份验证的用户',
		),
		'settings'        => '设置',
		'stylesheet'      =>  array(
			'stylesheet'      => '样式表',
		),
		'theme'           =>  array(
			'theme'           => '主题',
		),
	),
	'status_page'     => '状态页面',
	'team'            =>  array(
		'add'             =>  array(
			'failure'         => '添加组件失败。',
			'success'         => '团队成员已添加。',
			'title'           => '添加一个新团队成员',
		),
		'description'     => '团队成员将能够添加、修改和编辑组件和事件。',
		'edit'            =>  array(
			'failure'         => '资料更新失败。',
			'success'         => '配置文件已更新。',
			'title'           => '更新配置文件',
		),
		'member'          => '成员',
		'profile'         => '更改资料',
		'team'            => '团队',
	),
	'welcome'         =>  array(
		'close'           => '您可以直接进入仪表盘',
		'message'         => '您的状态页面即将准备好了！您可能想要配置这些额外的设置',
		'steps'           =>  array(
			'api'             => '生成 API 令牌。',
			'component'       => '创建组件',
			'customize'       => '自定义',
			'incident'        => '创建事件',
			'team'            => '添加用户',
			'two-factor'      => '双因素身份验证',
		),
		'welcome'         => '欢迎来到Cachet',
	),
);
