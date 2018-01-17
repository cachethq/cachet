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

    'dashboard'          => 'Bảng điều khiển',
    'writeable_settings' => 'Thư mục cài đặt Cachet không phải là có thể ghi. Hãy chắc chắn rằng <code>./bootstrap/cachet</code> là có thể ghi bởi máy chủ web.',

    // Incidents
    'incidents' => [
        'title'                    => 'Sự cố &amp; Lịch trình',
        'incidents'                => 'Các sự cố',
        'logged'                   => '{0} Không có sự cố nào, làm việc tốt.|Bạn có một sự cố được ghi nhận.|Bạn có <strong>:count</strong> sự cố được báo cáo.',
        'incident-create-template' => 'Tạo template',
        'incident-templates'       => 'Mẫu sự cố',
        'updates'                  => [
            'title'   => 'Incident updates for :incident',
            'count'   => '{0} Zero Updates|[1] One Update|[2] Two Updates|[3,*] Several Updates',
            'add'     => [
                'title'   => 'Tạo bản cập nhật sự cố mới',
                'success' => 'Your new incident update has been created.',
                'failure' => 'Something went wrong with the incident update.',
            ],
            'edit' => [
                'title'   => 'Edit incident update',
                'success' => 'The incident update has been updated.',
                'failure' => 'Something went wrong updating the incident update',
            ],
        ],
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
            'success' => 'Sự cố đã bị xoá và sẽ không hiển thị trên trang tình trạng của bạn.',
            'failure' => 'Sự cố không thể xóa, hãy thử một lần nữa.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Mẫu sự cố',
            'add'   => [
                'title'   => 'Tạo ra một khuôn mẫu khi gặp sự cố',
                'message' => 'Bạn nên thêm một mẫu sự cố.',
                'success' => 'Mẫu sự cố mới của bạn đã được tạo.',
                'failure' => 'Có lỗi xảy ra với mẫu sự cố.',
            ],
            'edit' => [
                'title'   => 'Sửa mẫu',
                'success' => 'Mẫu sự cố đã được cập nhật.',
                'failure' => 'Có lỗi xảy ra khi cập nhật mẫu sự cố',
            ],
            'delete' => [
                'success' => 'Mẫu sự cố đã bị xoá.',
                'failure' => 'Mẫu sự cố không thể xóa, hãy thử một lần nữa.',
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
        'listed_group'       => 'Nhóm theo :name',
        'add'                => [
            'title'   => 'Thêm một thành phần',
            'message' => 'Bạn cần thêm một component.',
            'success' => 'Thành phần đã được tạo.',
            'failure' => 'Có lỗi xảy ra với nhóm thành phần, vui lòng thử lại.',
        ],
        'edit' => [
            'title'   => 'Chỉnh sửa một thành phần',
            'success' => 'Thành phần đã được cập nhật.',
            'failure' => 'Có lỗi xảy ra với nhóm thành phần, vui lòng thử lại.',
        ],
        'delete' => [
            'success' => 'Thành phần đã bị xóa!',
            'failure' => 'Chưa xóa được thành phần, vui lòng thử lại.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Component group|Component groups',
            'no_components' => 'Bạn nên thêm một nhóm thành phần.',
            'add'           => [
                'title'   => 'Thêm một nhóm thành phần',
                'success' => 'Nhóm thành phần đã được tạo.',
                'failure' => 'Có lỗi xảy ra với nhóm thành phần, vui lòng thử lại.',
            ],
            'edit' => [
                'title'   => 'Chỉnh sửa một nhóm thành phần',
                'success' => 'Nhóm thành phần đã được cập nhật.',
                'failure' => 'Có lỗi xảy ra với nhóm thành phần, vui lòng thử lại.',
            ],
            'delete' => [
                'success' => 'Nhóm thành phần đã bị xóa!',
                'failure' => 'Không xóa được nhóm thành phần, vui lòng thử lại.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Các số liệu',
        'add'     => [
            'title'   => 'Tạo một thước đo',
            'message' => 'Bạn nên thêm một thước đo.',
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
        'subscribers'          => 'Subscribers',
        'description'          => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'description_disabled' => 'To use this feature, you need allow people to signup for notifications.',
        'verified'             => 'Đã xác nhận',
        'not_verified'         => 'Chưa xác nhận',
        'subscriber'           => ':email, đã đăng ký :date',
        'no_subscriptions'     => 'Subscribed to all updates',
        'global'               => 'Globally subscribed',
        'add'                  => [
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
        'log' => [
            'log' => 'Log',
        ],
        'localization' => [
            'localization' => 'Bản địa hoá',
        ],
        'customization' => [
            'customization' => 'Customization',
            'header'        => 'Custom Header HTML',
            'footer'        => 'Custom Footer HTML',
        ],
        'mail' => [
            'mail'  => 'Mail',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Test notification from Cachet',
                'body'    => 'This is a test notification from Cachet.',
            ],
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
        'news_subtitle'    => 'Get the latest update',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your new status page, :username!',
        'message' => 'Trang trái thái cảu bạn gần như đã sẵn sàng. Bạn có thể muốn cấu hình mình vài thiết lập phụ',
        'close'   => 'I\'m good thanks!',
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
