<?php

# modified at 03-10-2015 06:38

return  array(
	'components'      =>  array(
		'add'                  =>  array(
			'failure'              => 'Something went wrong with the component.',
			'message'              => 'You should add a component.',
			'success'              => 'Component created.',
			'title'                => 'Add a component',
		),
		'component_statuses'   => 'Component Statuses',
		'components'           => 'Components',
		'edit'                 =>  array(
			'failure'              => 'Something went wrong with the component.',
			'success'              => 'Component updated.',
			'title'                => 'Edit a component',
		),
		'groups'               =>  array(
			'add'                  =>  array(
				'failure'              => 'Something went wrong with the component group.',
				'success'              => 'Component group added.',
				'title'                => 'Add a component group',
			),
			'edit'                 =>  array(
				'failure'              => 'Something went wrong with the component group.',
				'success'              => 'Component group updated.',
				'title'                => 'Edit a component group',
			),
			'groups'               => 'Component group|Component groups',
			'no_components'        => 'You should add a component group.',
		),
		'listed_group'         => 'Grouped under :name',
		'order'                =>  array(
			'success'              => 'Component orders updated.',
		),
	),
	'dashboard'       => 'Dashboard',
	'help'            => 'Help',
	'incidents'       =>  array(
		'add'                        =>  array(
			'failure'                    => 'Something went wrong with the incident.',
			'success'                    => 'Incident added.',
			'title'                      => 'Add an incident',
		),
		'edit'                       =>  array(
			'failure'                    => 'Something went wrong with the incident.',
			'success'                    => 'Incident updated.',
			'title'                      => 'Edit an incident',
		),
		'incident-create-template'   => 'Create Template',
		'incident-templates'         => 'Incident Templates',
		'incidents'                  => 'Incidents',
		'logged'                     => '{0} There are no incidents, good work.|You have logged one incident.|You have reported <strong>:count</strong> incidents.',
		'templates'                  =>  array(
			'add'                        =>  array(
				'failure'                    => 'Something went wrong with the incident template.',
				'success'                    => 'Template created.',
				'title'                      => 'Create an incident template',
			),
			'edit'                       =>  array(
				'failure'                    => 'Something went wrong updating the incident template',
				'success'                    => 'Template has been updated!',
				'title'                      => 'Edit template',
			),
			'title'                      => 'Incident Templates',
		),
		'title'                      => 'Incidents &amp; Schedule',
	),
	'login'           =>  array(
		'logged_in'       => 'You\'re logged in.',
		'login'           => 'Login',
		'two-factor'      => 'Please enter your token.',
		'welcome'         => 'Welcome Back!',
	),
	'logout'          => 'Logout',
	'metrics'         =>  array(
		'add'             =>  array(
			'failure'         => 'Something went wrong with the metric.',
			'success'         => 'Metric created.',
			'title'           => 'Create a metric',
		),
		'edit'            =>  array(
			'failure'         => 'Something went wrong with the metric.',
			'success'         => 'Metric updated.',
			'title'           => 'Edit a metric',
		),
		'metrics'         => 'Metrics',
	),
	'notifications'   =>  array(
		'awesome'         => 'Awesome.',
		'notifications'   => 'Notifications',
		'whoops'          => 'Whoops.',
	),
	'schedule'        =>  array(
		'add'             =>  array(
			'failure'         => 'Something went wrong adding the schedule.',
			'success'         => 'Schedule added.',
			'title'           => 'Add Scheduled Maintenance',
		),
		'delete'          =>  array(
			'failure'         => 'The schedule could not be deleted. Please try again.',
			'success'         => 'The schedule has been deleted and will not show on your status page.',
		),
		'edit'            =>  array(
			'failure'         => 'Something went wrong editing the schedule.',
			'success'         => 'Schedule has been updated!',
			'title'           => 'Edit Scheduled Maintenance',
		),
		'schedule'        => 'Scheduled Maintenance',
		'scheduled_at'    => 'Scheduled at :timestamp',
	),
	'settings'        =>  array(
		'app-setup'       =>  array(
			'app-setup'       => 'Application Setup',
			'images-only'     => 'Only images may be uploaded.',
			'too-big'         => 'The file you uploaded is too big. Upload an image smaller than :size',
		),
		'edit'            =>  array(
			'failure'         => 'Settings could not be saved.',
			'success'         => 'Settings saved.',
		),
		'security'        =>  array(
			'security'        => 'Security',
			'two-factor'      => 'Users without two-factor authentication',
		),
		'settings'        => 'Settings',
		'stylesheet'      =>  array(
			'stylesheet'      => 'Stylesheet',
		),
		'theme'           =>  array(
			'theme'           => 'Theme',
		),
	),
	'status_page'     => 'Status Page',
	'subscribers'     =>  array(
		'add'             =>  array(
			'failure'         => 'Something went wrong with the component.',
			'success'         => 'Subscriber added.',
			'title'           => 'Add a new subscriber',
		),
		'description'     => 'Subscribers will receive email updates when incidents are created.',
		'edit'            =>  array(
			'failure'         => 'Something went wrong when updating.',
			'success'         => 'Subscriber updated.',
			'title'           => 'Update subscriber',
		),
		'not_verified'    => 'Not Verified',
		'subscribers'     => 'Subscribers',
		'verified'        => 'Verified',
	),
	'team'            =>  array(
		'add'             =>  array(
			'failure'         => 'Something went wrong with the component.',
			'success'         => 'Team member added.',
			'title'           => 'Add a new team member',
		),
		'delete'          =>  array(
			'failure'         => 'Something went wrong when deleting this user.',
			'success'         => 'User deleted.',
		),
		'description'     => 'Team Members will be able to add, modify &amp; edit components and incidents.',
		'edit'            =>  array(
			'failure'         => 'Something went wrong when updating.',
			'success'         => 'Profile updated.',
			'title'           => 'Update profile',
		),
		'member'          => 'Member',
		'profile'         => 'Profile',
		'team'            => 'Team',
	),
	'welcome'         =>  array(
		'close'           => 'Just go straight to my dashboard',
		'message'         => 'Your status page is almost ready! You might want to configure these extra settings',
		'steps'           =>  array(
			'api'             => 'Generate API token',
			'component'       => 'Create components',
			'customize'       => 'Customize',
			'incident'        => 'Create incidents',
			'team'            => 'Add users',
			'two-factor'      => 'Two Factor Authentication',
		),
		'welcome'         => 'Welcome to Cachet',
	),
);
