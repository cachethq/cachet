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
        'none'          => 'Hiçbir olay raporlanmadı',
        'past'          => 'Geçmiş Olaylar',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => 'Zamanlanmış bakım',
        'scheduled_at'  => ',zamanlanmış :zamandilimi',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
            1 => 'İnceleniyor',
            2 => 'Tanımlandı',
            3 => 'İzleniyor',
            4 => 'Düzeltildi',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Sistem çalışır durumda| [2, Inf] Tüm sistemler çalışır durumda',
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
            'last_hour' => 'Son 1 saat',
            'hourly'    => 'Son 12 saat',
            'weekly'    => 'Hafta',
            'monthly'   => 'Ay',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Abone ol',
        'manage'    => [
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
            'verify'             => [
                'text'   => "Lütfen :app_name durum güncellemelerine olan e-posta aboneliğinizi onaylayon.\n:link",
                'html'   => '<p>Lütfen email aboneliğinizi :app_name için onaylayın.</p>',
                'button' => 'Aboneliği Onaylayın',
            ],
            'maintenance' => [
                'subject' => '[Bakım Zamanlandır] :name',
            ],
            'incident' => [
                'subject' => '[Yeni olay] :status:: ad',
            ],
            'component' => [
                'subject'       => 'Bileşen Durumu Güncellemesi',
                'text'          => 'Bileşen:component_name bir durum değişikliği gördü. Bileşen şu anda :component_human_status.Teşekkür ederim, :app_name',
                'html'          => '<p>Bileşen:component_name bir durum değişikliği gördü. Bileşen şu anda :component_human_status.</p><p>Teşekkür ederim, :app_name</p>',
                'tooltip-title' => ':component_name için bildirimlere abone olun.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Takıma davet edildiniz :app_name Durum sayfası, kaydolmak için sonraki linki takip edin.\n:link\nTeşekkür ederim, :app_name",
                'html' => '<p>Takıma davet edildiniz :app_name durum sayfası, kaydolmak için sonraki linki takip edin</p><p><a href=":link">:Link</a></p><p>Teşekkür ederim, :app_name</p>',
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
        'update' => 'Cachet yeni sürümü kullanılabilir. Nasıl güncelleneceğini <a href="https://docs.cachethq.io/docs/updating-cachet">buradan</a> öğrenebilirsiniz!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Kapat',
        'subscribe' => [
            'title'  => 'Bileşen güncellemelerine abone ol',
            'body'   => 'Bu içeriğin güncellemelerine abone olmak için e-mail adresinizi giriniz. Eğer zaten aboneyseniz, bu içerikle ilgili zaten e-mailler alacaksınız.',
            'button' => 'Abone ol',
        ],
    ],

    // Other
    'home'            => 'Ana Sayfa',
    'description'     => 'Şu uygulamalardaki en son hizmet güncellemeleri ile güncel kalın.',
    'powered_by'      => '<a href="https://cachethq.io" class="links"> Önbellek </a> kaynaklı.',
    'about_this_site' => 'Bu Site hakkında',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
