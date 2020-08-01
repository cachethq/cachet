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
        'last_updated' => 'Last updated :timestamp',
        'status'       => [
            0 => 'Unknown',
            1 => '正常',
            2 => '效能問題',
            3 => '部分停止運作',
            4 => '停止運作',
        ],
        'group' => [
            'other' => 'Other Components',
        ],
        'select_all'   => 'Select All',
        'deselect_all' => 'Deselect All',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'No incidents reported',
        'past'         => 'Past Incidents',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Maintenance',
        'scheduled_at' => '，於:timestamp',
        'posted'       => 'Posted :timestamp by :username',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => '調查中',
            2 => '已辨明',
            3 => '警戒中',
            4 => '已修復',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Upcoming',
            1 => 'In Progress',
            2 => 'Complete',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1]System operational|[2,*]All systems are operational',
        'bad'   => '[0,1]The system is experiencing issues|[2,*]Some systems are experiencing issues',
        'major' => '[0,1]The system is experiencing major issues|[2,*]Some systems are experiencing major issues',
    ],

    'api' => [
        'regenerate' => '重新產生 API 金鑰',
        'revoke'     => '撤銷 API 密鑰',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Last Hour',
            'hourly'    => 'Last 12 Hours',
            'weekly'    => 'Week',
            'monthly'   => 'Month',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'           => 'Subscribe to status changes and incident updates',
        'unsubscribe'         => 'Unsubscribe',
        'button'              => 'Subscribe',
        'manage_subscription' => 'Manage subscription',
        'manage'              => [
            'notifications'       => '通知',
            'notifications_for'   => 'Manage notifications for',
            'no_subscriptions'    => 'You\'re currently subscribed to all updates.',
            'update_subscription' => 'Update Subscription',
            'my_subscriptions'    => 'You\'re currently subscribed to the following updates.',
            'manage_at_link'      => 'Manage your subscriptions at :link',
        ],
        'email' => [
            'manage_subscription' => 'We\'ve sent you an email, please click the link to manage your subscription',
            'subscribe'           => 'Subscribe to email updates.',
            'subscribed'          => 'You\'ve been subscribed to email notifications, please check your email to confirm your subscription.',
            'updated-subscribe'   => 'You\'ve succesfully updated your subscriptions.',
            'verified'            => 'Your email subscription has been confirmed. Thank you!',
            'manage'              => 'Manage your subscription',
            'unsubscribe'         => 'Unsubscribe from email updates.',
            'unsubscribed'        => 'Your email subscription has been cancelled.',
            'failure'             => 'Something went wrong with the subscription.',
            'already-subscribed'  => 'Cannot subscribe :email because they\'re already subscribed.',
        ],
    ],

    'signup' => [
        'title'    => 'Sign Up',
        'username' => '用戶名',
        'email'    => '電郵地址',
        'password' => '密碼',
        'success'  => 'Your account has been created.',
        'failure'  => 'Something went wrong with the signup.',
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
            'button' => 'Subscribe',
        ],
    ],

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details and updates about the :name incident that occurred on :date',
            'schedule'  => 'Details about the scheduled maintenance period :name starting :startDate',
            'subscribe' => 'Subscribe to :app in order to receive updates of incidents and scheduled maintenance periods',
            'overview'  => 'Stay up to date with the latest service updates from :app.',
        ],
    ],

    // Other
    'home'            => 'Home',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'About This Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status 訂閱',

];
