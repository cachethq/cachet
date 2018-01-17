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
    'component' => [
        'status_update' => [
            'mail' => [
                'subject'  => 'Trạng thái của Thành phần đã được cập nhật',
                'greeting' => 'Trạng thái của Cấu phần đã được cập nhật!',
                'content'  => 'Trạng thái của :name đã đổi từ :old_status sang :new_status.',
                'action'   => 'Xem',
            ],
            'slack' => [
                'title'   => 'Trạng thái của Thành phần đã được cập nhật',
                'content' => 'Trạng thái của :name đã đổi từ :old_status sang :new_status.',
            ],
            'sms' => [
                'content' => 'Trạng thái của :name đã đổi từ :old_status sang :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Sự cố mới đã được báo cáo',
                'greeting' => 'Một sự cố mới được báo cáo tại :app_name.',
                'content'  => 'Sự cố :name đã được báo cáo',
                'action'   => 'Xem',
            ],
            'slack' => [
                'title'   => 'Sự cố :name đã được báo cáo',
                'content' => 'Một sự cố mới được báo cáo tại :app_name',
            ],
            'sms' => [
                'content' => 'Một sự cố mới được báo cáo tại :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Sự cố đã cập nhật',
                'content' => ':name đã được cập nhật',
                'title'   => ':name đã được cập nhật tới :new_status',
                'action'  => 'Xem',
            ],
            'slack' => [
                'title'   => ':name đã được cập nhật',
                'content' => ':name đã được cập nhật tới :new_status',
            ],
            'sms' => [
                'content' => 'Sự cố :name đã được Cập Nhật',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Lịch mới đã được tạo',
                'content' => ':name được đặt lịch vào :date',
                'title'   => 'Lịch bảo trì mới đã được tạo.',
                'action'  => 'Xem',
            ],
            'slack' => [
                'title'   => 'Lịch mới đã được tạo!',
                'content' => ':name được đặt lịch vào :date',
            ],
            'sms' => [
                'content' => ':name được đặt lịch vào :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Xác minh đăng ký của bạn',
                'content' => 'Nhấn vào đây để xác nhận đăng ký của bạn tại trang trạng thái :app_name.',
                'title'   => 'Verify your subscription to :app_name status page.',
                'action'  => 'Verify',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping from Cachet!',
                'content' => 'This is a test notification from Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Lời mời của bạn là bên trong...',
                'content' => 'You have been invited to join :app_name status page.',
                'title'   => 'You\'re invited to join :app_name status page.',
                'action'  => 'Accept',
            ],
        ],
    ],
];
