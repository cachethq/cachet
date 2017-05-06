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
            0 => 'Bilinmiyor',
            1 => 'Çalışıyor',
            2 => 'Performans Sorunları',
            3 => 'Kısmi Kesinti',
            4 => 'Ana Kesinti',
        ],
        'group' => [
            'other' => 'Diğer Bileşenler',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Hiçbir olay raporlanmadı',
        'past'         => 'Geçmiş Olaylar',
        'stickied'     => 'Yapıştırılmış Olaylar',
        'scheduled'    => 'Zamanlanmış bakım',
        'scheduled_at' => ',zamanlanmış :zamandilimi',
        'posted'       => ':timestamp gönderildi',
        'status'       => [
            1 => 'İnceleniyor',
            2 => 'Tanımlandı',
            3 => 'İzleniyor',
            4 => 'Düzeltildi',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Yaklaşan',
            1 => 'Devam Ediyor',
            2 => 'Tamamla',
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
        'subscribe'   => 'Güncellemeleri almak için abone olun',
        'unsubscribe' => 'Unsubscribe at :link',
        'button'      => 'Abone ol',
        'manage'      => [
            'no_subscriptions' => 'Şu anda tüm güncellemeleri abone oldunuz.',
            'my_subscriptions' => 'Şu an aşağıdaki güncellemelere abone oldunuz.',
        ],
        'email' => [
            'subscribe'          => 'Güncellemeler için abone ol.',
            'subscribed'         => 'Bir email bildirimi almış olmalısın, lütfen aboneliğini onaylamak için kontrol et.',
            'verified'           => 'E mail aboneliğin kabul edildi. Teşekkürler!',
            'manage'             => 'Aboneliklerini yönet',
            'unsubscribe'        => 'E-posta aboneliğinden çık.',
            'unsubscribed'       => 'Email aboneliğin iptal edildi.',
            'failure'            => 'Bazı şeyler yanlış gitti.',
            'already-subscribed' => ':email adresine abone olunamadı çünkü zaten abone.',
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
        'update' => 'Cachet yeni sürümü kullanılabilir. Nasıl güncelleneceğini <a href="https://docs.cachethq.io/docs/updating-cachet">buradan</a> öğrenebilirsiniz!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Kapat',
        'subscribe' => [
            'title'  => 'Bileşen güncellemelerine abone ol',
            'body'   => 'Enter your email address to subscribe to updates for this component. If you\'re already subscribed, you\'ll already receive emails for this component.',
            'button' => 'Abone ol',
        ],
    ],

    // Other
    'home'            => 'Ana Sayfa',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'Bu Site hakkında',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
