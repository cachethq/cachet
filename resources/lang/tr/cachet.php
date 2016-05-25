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
        'last_updated' => 'Son Güncelleme: zaman tipi',
        'status'       => [
            1 => 'Çalışıyor',
            2 => 'Performans Problemleri',
            3 => 'Kısmi Kesinti',
            4 => 'Ana Kesinti',
        ],
        'group' => [
            'other' => 'Diğer Bileşenler',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Hiçbir olay raporlanmadı',
        'past'          => 'Geçmiş Olaylar',
        'previous_week' => 'Geçen Hafta',
        'next_week'     => 'Gelecek Hafta',
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
        'good'  => '[0,1] Sistem çalışır durumda| [2, Inf] Tüm sistemler çalışır durumda',
        'bad'   => '[0,1] Sistemde şu anda sorunlar yaşanıyor [2, Inf] Bazı sistemlerde sorunlar yaşanıyor',
        'major' => '[0,1] Bu serviste büyük bir kesinti yaşıyoruz [2, Inf] Bazı sistemlerde büyük bir kesintisi yaşıyoruz',
    ],

    'api' => [
        'regenerate' => 'API Key\'i yeniden oluştur',
        'revoke'     => 'API Anahtarı geçersiz kıl',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Son 1 saat',
            'hourly'    => 'Son 12 saat',
            'weekly'    => 'Hafta',
            'monthly'   => 'Ay',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'En son güncelleştirmeleri almak için abone olun',
        'button'    => 'Abone Ol',
        'manage'    => [
            'no_subscriptions' => 'Şu anda tüm güncellemeleri abone oldunuz.',
            'my_subscriptions' => 'You\'re currently subscribed to the following updates.',
        ],
        'email' => [
            'subscribe'          => 'Güncellemeler için abone ol.',
            'subscribed'         => 'Bir email bildirimi almış olmalısın, lütfen aboneliğini onaylamak için kontrol et.',
            'verified'           => 'E mail aboneliğin kabul edildi. Teşekkürler!',
            'manage'             => 'Aboneliğinizi yönetin.',
            'unsubscribe'        => 'E-posta aboneliğinden çık.',
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
        'title'    => 'Kayıt Ol',
        'username' => 'Kullanıcı adı',
        'email'    => 'E-posta',
        'password' => 'Parola',
        'success'  => 'Hesabınız oluşturuldu.',
        'failure'  => 'Kayıt esnasında bir sorun oluştu.',
    ],

    'system' => [
        'update' => 'There is a newer version of Cachet available. You can learn how to update <a href="https://docs.cachethq.io/docs/updating-cachet">here</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Kapat',
        'subscribe' => [
            'title'  => 'Subscribe to component updates',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Abone Ol',
        ],
    ],

    // Other
    'home'            => 'Ana Sayfa',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Bu Site hakkında',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
