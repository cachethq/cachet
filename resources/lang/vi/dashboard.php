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

    'dashboard' => 'Bảng điều khiển',

    // Incidents
    'incidents' => [
        'title'                    => 'Sự cố &amp; Lịch trình',
        'incidents'                => 'Các sự cố',
        'logged'                   => '{0} Không có sự cố nào, làm việc tốt.|Bạn có một sự cố được ghi nhận.|Bạn có <strong>:count</strong> sự cố được báo cáo.',
        'incident-create-template' => 'Tạo template',
        'incident-templates'       => 'Mẫu sự cố',
        'add'                      => [
            'title'   => 'Thêm một sự cố',
            'success' => 'Sự cố đã được thêm.',
            'failure' => 'Có một lỗi xảy ra khi đang lưu Sự Cố, xin vui lòng thử lại.',
        ],
        'edit' => [
            'title'   => 'Chỉnh sửa một sự cố',
            'success' => 'Sự cố đã được cập nhật.',
            'failure' => 'Có một lỗi xảy ra khi đang lưu Sự Cố, xin vui lòng thử lại.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted, please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Mẫu sự cố',
            'add'   => [
                'title'   => 'Tạo ra một khuôn mẫu khi gặp sự cố',
                'message' => 'You should add an incident template.',
                'success' => 'Your new incident template has been created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'Sửa mẫu',
                'success' => 'The incident template has been updated.',
                'failure' => 'Something went wrong updating the incident template',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted, please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Bảo trì định kỳ',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Định kỳ lúc :timestamp',
        'add'          => [
            'title'   => 'Add Scheduled Maintenance',
            'success' => 'Schedule added.',
            'failure' => 'Something went wrong adding the schedule, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit Scheduled Maintenance',
            'success' => 'Schedule has been updated!',
            'failure' => 'Something went wrong editing the schedule, please try again.',
        ],
        'delete' => [
            'success' => 'The scheduled maintenance has been deleted and will not show on your status page.',
            'failure' => 'The scheduled maintenance could not be deleted, please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Components',
        'component_statuses' => 'Component Statuses',
        'listed_group'       => 'Grouped under :name',
        'add'                => [
            'title'   => 'Thêm một thành phần',
            'message' => 'Bạn cần thêm một component.',
            'success' => 'Component created.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'edit' => [
            'title'   => 'Chỉnh sửa một thành phần',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Component group|Component groups',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Add a component group',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'edit' => [
                'title'   => 'Edit a component group',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'delete' => [
                'success' => 'Component group has been deleted!',
                'failure' => 'The component group could not be deleted, please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Các số liệu',
        'add'     => [
            'title'   => 'Create a metric',
            'message' => 'You should add a metric.',
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit a metric',
            'success' => 'Metric updated.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted, please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Subscribers',
        'description'      => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'verified'         => 'Đã xác nhận',
        'not_verified'     => 'Chưa xác nhận',
        'subscriber'       => ':email, subscribed :date',
        'no_subscriptions' => 'Subscribed to all updates',
        'add'              => [
            'title'   => 'Add a new subscriber',
            'success' => 'Subscriber has been added!',
            'failure' => 'Something went wrong adding the subscriber, please try again.',
            'help'    => 'Enter each subscriber on a new line.',
        ],
        'edit' => [
            'title'   => 'Update subscriber',
            'success' => 'Subscriber has been updated!',
            'failure' => 'Something went wrong editing the subscriber, please try again.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Nhóm',
        'member'      => 'Thành viên',
        'profile'     => 'Hồ sơ cá nhân',
        'description' => 'Thành viên trong đội sẽ có thể để thêm, sửa đổi và chỉnh sửa các thành phần và sự cố.',
        'add'         => [
            'title'   => 'Add a new team member',
            'success' => 'Team member added.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'edit' => [
            'title'   => 'Update profile',
            'success' => 'Profile updated.',
            'failure' => 'Something went wrong updating the profile, please try again.',
        ],
        'delete' => [
            'success' => 'Team member has been deleted and will no longer have access to the dashboard!',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'invite' => [
            'title'   => 'Invite a new team member',
            'success' => 'An invite has been sent',
            'failure' => 'The invite could not be sent, please try again.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Thiết lập',
        'app-setup' => [
            'app-setup'   => 'Thiết lập ứng dụng',
            'images-only' => 'Chỉ có thể upload ảnh.',
            'too-big'     => 'File bạn vừa upload có kích thước quá lớn, hãy upload ảnh có kích thước nhỏ hơn :size',
        ],
        'analytics' => [
            'analytics' => 'Thống kê',
        ],
        'localization' => [
            'localization' => 'Bản địa hoá',
        ],
        'customization' => [
            'customization' => 'Customization',
            'header'        => 'Custom Header HTML',
            'footer'        => 'Custom Footer HTML',
        ],
        'security' => [
            'security'   => 'Bảo mật',
            'two-factor' => 'Users without two-factor authentication',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Theme',
        ],
        'edit' => [
            'success' => 'Các setting đã được lưu.',
            'failure' => 'Không thể lưu các settings.',
        ],
        'credits' => [
            'credits'       => 'Credits',
            'contributors'  => 'Contributors',
            'license'       => 'Cachet is a BSD-3-licensed open source project, released by <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Backers & Sponsors',
            'backers'       => 'If you\'d like to support future development, check out the <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> campaign.',
            'thank-you'     => 'Thank you to each and every one of the :count contributors.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Đăng nhập',
        'logged_in'  => 'Bạn đang đăng nhập.',
        'welcome'    => 'Chào mừng Quay trở lại!',
        'two-factor' => 'Vui lòng nhập mã token của bạn',
    ],

    // Sidebar footer
    'help'        => 'Trợ giúp',
    'status_page' => 'Trang trang thái',
    'logout'      => 'Đăng xuất',

    // Notifications
    'notifications' => [
        'notifications' => 'Thông báo',
        'awesome'       => 'Tuyệt vời.',
        'whoops'        => 'Ôi.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Support Cachet',
        'support_subtitle' => 'Check out our <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> page!',
        'news'             => 'Latest News',
        'news_subtitle'    => 'Get the latest updates',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your new status page!',
        'message' => 'Trang trái thái cảu bạn gần như đã sẵn sàng. Bạn có thể muốn cấu hình mình vài thiết lập phụ',
        'close'   => 'Take me straight to my dashboard',
        'steps'   => [
            'component'  => 'Tạo thành phần',
            'incident'   => 'Tạo sự cố',
            'customize'  => 'Tùy chỉnh',
            'team'       => 'Thêm người dùng',
            'api'        => 'Tạo API token',
            'two-factor' => 'Xác minh 2 bước',
        ],
    ],

];
