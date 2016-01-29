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
        'status' => [
            1 => 'Çalışıyor',
            2 => 'Performans Sorunları',
            3 => 'Kısmi Kesinti',
            4 => 'Ana Kesinti',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Nothing to report',
        'past'          => 'Past Incidents',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'none'          => 'Nothing to report',
        'scheduled'     => 'Zamanlanmış bakım',
        'scheduled_at'  => ',zamanlanmış :zamandilimi',
        'status'        => [
            0 => 'Zamanlanmış', // TODO: Hopefully remove this.
            1 => 'İnceleniyor',
            2 => 'Tanımlandı',
            3 => 'İzleniyor',
            4 => 'Düzeltildi',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'API Key\'i yeniden oluştur',
        'revoke'     => 'API Anahtarı geçersiz kıl',
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
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Abone Ol',
        'email'     => [
            'subscribe'          => 'Güncellemeler için abone ol.',
            'subscribed'         => 'Bir email bildirimi almış olmalısın, lütfen aboneliğini onaylamak için kontrol et.',
            'verified'           => 'E mail aboneliğin kabul edildi. Teşekkürler!',
            'unsubscribe'        => 'Unsubscribe from email updates.',
            'unsubscribed'       => 'Email aboneliğin iptal edildi.',
            'failure'            => 'Bazı şeyler yanlış gitti.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => "Lütfen email aboneliğinizi onaylayın :app_name Durum Güncellemesi.\n:link\nTeşekkürler",
                'html-preheader' => 'Lütfen email aboneliğinizi :app_name için onaylayın.',
                'html'           => '<p>Lütfen email aboneliğinizi onaylayın :app_name Durum güncellemesi.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "New maintenance has been scheduled on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New maintenance has been scheduled on :app_name.',
                'html'           => '<p>New maintenance has been scheduled on :app_name.</p>',
            ],
            'incident' => [
                'text'           => "New incident has been reported on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New incident has been reported on :app_name.',
                'html'           => '<p>New incident has been reported on :app_name.</p><p>Thank you, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Component Status Update',
                'text'           => 'The component :component_name has seen a status change. The component is now at :component_human_status.\nThank you, :app_name',
                'html-preheader' => 'Component Update from :app_name',
                'html'           => '<p>The component :component_name has seen a status change. The component is now at :component_human_status.</p><p>Thank you, :app_name</p>',
                'tooltip-title'  => 'Subscribe to notifications for :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "You have been invited to the team :app_name status page, to sign up follow the next link.\n:link\nThank you, :app_name",
                'html-preheader' => 'You have been invited to the team :app_name.',
                'html'           => '<p>You have been invited to the team :app_name status page, to sign up follow the next link.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Sign Up',
        'username' => 'Username',
        'email'    => 'E-posta',
        'password' => 'Parola',
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
            'title'  => 'Subscribe to component updates?',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll receive emails for this component too.',
            'button' => 'Abone Ol',
        ],
    ],

    // Other
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'About This Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
