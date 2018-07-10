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
        'last_updated' => 'Lần cập nhật cuối :timestamp',
        'status'       => [
            1 => 'Hoạt động',
            2 => 'Vấn đề hiệu suất',
            3 => 'Ngưng hoạt động một phần',
            4 => 'Ngừng hoạt động toàn bộ',
        ],
        'group' => [
            'other' => 'Các thành phần khác',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Không có báo cáo về sự số nào',
        'past'          => 'Các sự số trong quá khứ',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => 'Bảo trì định kỳ',
        'scheduled_at'  => ', định kỳ :timestamp',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
            1 => 'Đang điều tra',
            2 => 'Xác định',
            3 => 'Đang xem',
            4 => 'Đã sửa',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Hệ thống hoạt động bình thường | [2, Inf] Toàn bộ hệ thống đang hoạt động bình thường',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Tạo lại Khóa API',
        'revoke'     => 'Thu hồi Khóa API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Giờ trước',
            'hourly'    => '12 giờ trước',
            'weekly'    => 'Tuần',
            'monthly'   => 'Tháng',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Đăng ký',
        'manage'    => [
            'no_subscriptions' => 'Bạn hiện đã đăng ký nhận tất cả các thông báo cập nhật.',
            'my_subscriptions' => 'Bạn hiện đã đăng ký nhận các thông báo cập nhật sau.',
        ],
        'email' => [
            'subscribe'          => 'Đăng ký nhận thông báo cập nhật qua email.',
            'subscribed'         => 'Bạn đã đăng ký nhận email thông báo cập nhật, xin vui lòng kiểm tra email của bạn để xác nhận.',
            'verified'           => 'Đăng ký email của bạn đã được xác nhận. Cảm ơn bạn!',
            'manage'             => 'Quản lý đăng ký',
            'unsubscribe'        => 'Hủy đăng ký thông báo cập nhật qua email.',
            'unsubscribed'       => 'Đăng ký email của bạn đã bị hủy bỏ.',
            'failure'            => 'Có lỗi xảy ra khi đăng ký nhận thông báo cập nhật.',
            'already-subscribed' => 'Không thể đăng ký :email bởi vì họ đã đăng ký.',
            'verify'             => [
                'text'   => "Vui lòng xác nhận email của bạn để đăng ký nhận thông báo cập nhật tại :app_name.\n:link",
                'html'   => '<p>Xin vui lòng xác nhận email của bạn để đăng ký nhận thông báo cập nhật tình trạng tại :app_name.</p>',
                'button' => 'Xác nhận đăng ký',
            ],
            'maintenance' => [
                'subject' => '[Lịch Bảo trì] :name',
            ],
            'incident' => [
                'subject' => '[Sự cố mới] :status: :name',
            ],
            'component' => [
                'subject'       => 'Cập nhật tình trạng Cấu phần',
                'text'          => 'Thành phần :component_name đã thay đổi trạng thái. Thành phần đó hiện tại đang :component_human_status.\nCám ơn bạn, :app_name',
                'html'          => '<p>Thành phần :component_name đã thay đổi trạng thái. Thành phần đó hiện tại đang :component_human_status.</p><p>Cám ơn bạn, :app_name</p>',
                'tooltip-title' => 'Đăng ký thông báo cho :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "You have been invited to the team :app_name status page, to sign up follow the next link.\n:link\nThank you, :app_name",
                'html' => '<p>You have been invited to the team :app_name status page, to sign up follow the next link.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Đăng ký',
        'username' => 'Tên người dùng',
        'email'    => 'Email',
        'password' => 'Mật khẩu',
        'success'  => 'Tài khoản của bạn đã được tạo.',
        'failure'  => 'Có lỗi xảy ra khi đăng ký.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Close',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Đăng ký',
        ],
    ],

    // Other
    'home'            => 'Home',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Về trang web này',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
