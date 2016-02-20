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
            'failure' => 'Có lỗi gì đó đã xảy ra khi thêm sự cố.',
        ],
        'edit' => [
            'title'   => 'Chỉnh sửa một sự cố',
            'success' => 'Sự cố đã được cập nhật.',
            'failure' => 'Có lỗi gì đó đã xảy ra khi sửa sự cố.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted. Please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Mẫu sự cố',
            'add'   => [
                'title'   => 'Tạo ra một khuôn mẫu khi gặp sự cố',
                'message' => 'You should add an incident template.',
                'success' => 'Mẫu đã được tạo.',
                'failure' => 'Có lỗi gì đó xảy ra khi thêm mẫu.',
            ],
            'edit' => [
                'title'   => 'Sửa mẫu',
                'success' => 'Template đã được cập nhật thành công !',
                'failure' => 'Có lỗi gì đó xảy ra khi sửa mẫu',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted. Please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Bảo trì định kỳ',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Định kỳ lúc :timestamp',
        'add'          => [
            'title'   => 'Thêm lịch bảo trì',
            'success' => 'Lịch đã được thêm.',
            'failure' => 'Có lỗi xảy ra khi thêm lịch.',
        ],
        'edit' => [
            'title'   => 'Sửa lịch bảo trì',
            'success' => 'Lịch bảo trì đã được cập nhật.',
            'failure' => 'Có lỗi xảy ra khi sửa lịch bảo trì.',
        ],
        'delete' => [
            'success' => 'Lịch bảo trì đã được xóa, nó sẽ không hiển thị trên trang status của bạn.',
            'failure' => 'Lịch bảo trì chưa thể bị xóa, hãy thử lại.',
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
            'success' => 'Component đã được tạo.',
            'failure' => 'Điều gì đó không đúng đã xảy ra với các component.',
        ],
        'edit' => [
            'title'   => 'Chỉnh sửa một thành phần',
            'success' => 'Component đã được cập nhật.',
            'failure' => 'Điều gì đó không đúng đã xảy ra với các component.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'The component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Component group|Component groups',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Add a component group',
                'success' => 'Nhóm component đã được thêm.',
                'failure' => 'Điều gì đó sai đã xảy ra với nhóm component.',
            ],
            'edit' => [
                'title'   => 'Edit a component group',
                'success' => 'Nhóm thành phần đã được cập nhật.',
                'failure' => 'Điều gì đó không đúng đã xảy ra với nhóm thành phần.',
            ],
            'delete' => [
                'success' => 'Component group has been deleted!',
                'failure' => 'The component group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Các số liệu',
        'add'     => [
            'title'   => 'Create a metric',
            'message' => 'You should add a metric.',
            'success' => 'Metric đã được tạo.',
            'failure' => 'Có lỗi xảy ra khi thêm metric.',
        ],
        'edit' => [
            'title'   => 'Edit a metric',
            'success' => 'Metric đã được sửa.',
            'failure' => 'Có lỗi xảy ra khi thêm metric',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Subscribers',
        'description'  => 'Subscribers will receive email updates when incidents are created.',
        'verified'     => 'Đã xác nhận',
        'not_verified' => 'Chưa xác nhận',
        'add'          => [
            'title'   => 'Add a new subscriber',
            'success' => 'Subscriber has been added!',
            'failure' => 'Điều gì đó không đúng đã xảy ra với các component.',
        ],
        'edit' => [
            'title'   => 'Update subscriber',
            'success' => 'Subscriber has been updated!',
            'failure' => 'Có lỗi sai gì đó đã xảy ra khi cập nhật.',
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
            'success' => 'Thành viên đã được add.',
            'failure' => 'The team member could not be added. Please try again.',
        ],
        'edit' => [
            'title'   => 'Update profile',
            'success' => 'Hồ Sơ đã được cập nhật.',
            'failure' => 'Có lỗi sai gì đó đã xảy ra khi cập nhật.',
        ],
        'delete' => [
            'success' => 'Team member has been deleted and will no longer have access to the dashboard!',
            'failure' => 'The team member could not be added. Please try again.',
        ],
        'invite' => [
            'title'   => 'Invite a new team member',
            'success' => 'An invite has been sent',
            'failure' => 'The invite could not be sent. Please try again.',
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

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your status page!',
        'message' => 'Trang trái thái cảu bạn gần như đã sẵn sàng. Bạn có thể muốn cấu hình mình vài thiết lập phụ',
        'close'   => 'Chỉ cần đi thẳng đến bảng điều khiển của tôi',
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
