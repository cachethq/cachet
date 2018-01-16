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

    // Setup form fields
    'setup' => [
        'email'            => 'E-posta',
        'username'         => 'Kullanıcı adı',
        'password'         => 'Parola',
        'site_name'        => 'Site Adı',
        'site_domain'      => 'Site Alan Adı',
        'site_timezone'    => 'Zaman dilimi seçin',
        'site_locale'      => 'Dil seçin',
        'enable_google2fa' => 'Google İki Faktor Doğrulamayı etkinleştir',
        'cache_driver'     => 'Önbellek Sürücüsü',
        'queue_driver'     => 'Sıra Sürücüsü',
        'session_driver'   => 'Oturum Sürücüsü',
        'mail_driver'      => 'Posta Sürücü',
        'mail_host'        => 'Posta Hostu',
        'mail_address'     => 'Adresten Mail',
        'mail_username'    => 'Mail Kullanıcı Adı',
        'mail_password'    => 'Mail Şifresi',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Kullanıcı Adı veya E-Posta',
        'email'         => 'E-posta',
        'password'      => 'Parola',
        '2fauth'        => 'Onaylama Kodu',
        'invalid'       => 'Kullanıcı adı veya parola hatalı',
        'invalid-token' => 'Geçersiz jeton',
        'cookies'       => 'Oturum açabilmek yapabilmek için çerezleri açmalısınız.',
        'rate-limit'    => 'Kullanım limiti aşıldı.',
        'remember_me'   => 'Beni hatırla',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'İsim',
        'status'             => 'Durum',
        'component'          => 'Bileşen',
        'message'            => 'Mesaj',
        'message-help'       => 'Markdown işaretleri kullanabilirsiniz.',
        'occurred_at'        => 'Bu olay ne zaman meydana geldi?',
        'notify_subscribers' => 'Abonelere bildirilsin mi?',
        'visibility'         => 'Olay Görünürlüğü',
        'stick_status'       => 'Stick Olayı',
        'stickied'           => 'Stickli',
        'not_stickied'       => 'Stickli değil',
        'public'             => 'Herkese açık',
        'logged_in_only'     => 'Sadece giriş yapan kullanıclar görebilir',
        'templates'          => [
            'name'     => 'İsim',
            'template' => 'Tema',
            'twig'     => 'Olay Şablonları\'nan <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> şablon dili faydalanabilir.',
        ],
    ],

    'schedules' => [
        'name'         => 'İsim',
        'status'       => 'Durum',
        'message'      => 'Mesaj',
        'message-help' => 'Markdown işaretleri kullanabilirsiniz.',
        'scheduled_at' => 'Bu bakım ne zaman yapılıyor?',
        'completed_at' => 'Bu bakım ne zaman tamamlandı?',
        'templates'    => [
            'name'     => 'İsim',
            'template' => 'Tema',
            'twig'     => 'Olay Şablonları\'nan <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> şablon dili faydalanabilir.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'İsim',
        'status'      => 'Durum',
        'group'       => 'Grup',
        'description' => 'Açıklama',
        'link'        => 'Bağlantı',
        'tags'        => 'Etiketler',
        'tags-help'   => 'Virgül ile ayrılmış.',
        'enabled'     => 'Bileşen etkinleştirilsin mi?',

        'groups' => [
            'name'                     => 'İsim',
            'collapsing'               => 'Seçenkleri Genişlet/Daralt',
            'visible'                  => 'Her zaman genişlet',
            'collapsed'                => 'Grubu varsayılan olarak daralt',
            'collapsed_incident'       => 'Grubu küçült, ancak sorun olursa genişlet',
            'visibility'               => 'Görünürlük',
            'visibility_public'        => 'Herkese görünür',
            'visibility_authenticated' => 'Yalnızca oturum açan kullanıcılara görünür',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'İsim',
        'description'        => 'Açıklama',
        'start_at'           => 'Başlangıç saati programlayın',
        'timezone'           => 'Saat dilimi',
        'schedule_frequency' => 'Zamanlama frekansı (saniye olarak)',
        'completion_latency' => 'Tamamlama gecikmesi (saniye olarak)',
        'group'              => 'Grup',
        'active'             => 'Aktif mi?',
        'groups'             => [
            'name' => 'Grup ismi',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'İsim',
        'suffix'                   => 'Sonek',
        'description'              => 'Açıklama',
        'description-help'         => 'Markdown işaretleri kullanabilirsiniz.',
        'display-chart'            => 'Durum sayfasındaki grafiği mi gösteriyorsun?',
        'default-value'            => 'Varsayılan değer',
        'calc_type'                => 'Metriklerin hesaplanması',
        'type_sum'                 => 'Toplam',
        'type_avg'                 => 'Ortalama',
        'places'                   => 'Ondalık',
        'default_view'             => 'Varsayılan görünüm',
        'threshold'                => 'Metrik puanlar arasında kaç dakika eşik var?',
        'visibility'               => 'Görünürlük',
        'visibility_authenticated' => 'Kimliği doğrulanmış kullanıcılar tarafından görülebilir',
        'visibility_public'        => 'Herkese görünür',
        'visibility_hidden'        => 'Daima gizli',

        'points' => [
            'value' => 'Değer',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                    => 'Site Adı',
            'site-url'                     => 'Site url adresi',
            'display-graphs'               => 'Durum sayfasındaki grafikleri gösterilsin mi?',
            'about-this-page'              => 'Hakkında',
            'days-of-incidents'            => 'Kaç gün olay gösterebilirim?',
            'time_before_refresh'          => 'Status page refresh rate (in seconds).',
            'banner'                       => 'Afiş Resmi',
            'banner-help'                  => "930 pikselden daha büyük olmayan dosyaları yüklemeniz önerilir.",
            'subscribers'                  => 'Kullanıcıların e-posta bildirimlerine kaydolmasına izin verilsin mi?',
            'skip_subscriber_verification' => 'Kullanıcıların doğrulama işlemini atla? (Dikkat et, spam gönderildi)',
            'automatic_localization'       => 'Durum sayfanızı otomatik olarak ziyaretçinin diline yerelleştirir misin?',
            'enable_external_dependencies' => 'Üçüncü Taraf Bağımlılıklarını Etkinleştirme (Google Fontlar, İzleyiciler, vb...)',
            'show_timezone'                => 'Durum sayfasının çalıştığı saat dilimini gösterin.',
            'only_disrupted_days'          => 'Zaman çizelgesinde yalnızca olayları içeren günleri gösterin mi?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics kodu',
            'analytics_gosquared'    => 'GoSquared Analytics kodu',
            'analytics_piwik_url'    => 'Piwik örneğinizin URL\'si (http (s) olmadan): //',
            'analytics_piwik_siteid' => 'Piwik\'in site numarası',
        ],
        'localization' => [
            'site-timezone'        => 'Site saat dilimi',
            'site-locale'          => 'Site dili',
            'date-format'          => 'Tarih formatı',
            'incident-date-format' => 'Olay zaman damgası biçimi',
        ],
        'security' => [
            'allowed-domains'      => 'İzin verilen alanlar',
            'allowed-domains-help' => 'Virgülle ayrılmış. Yukarıda ayarlanan alana varsayılan olarak otomatik olarak izin verilir.',
        ],
        'stylesheet' => [
            'custom-css' => 'Özel Stil Sayfası',
        ],
        'theme' => [
            'background-color'        => 'Arka plan rengi',
            'background-fills'        => 'Arka plan dolguları (bileşenler, olaylar, altbilgi)',
            'banner-background-color' => 'Afiş arka plan rengi',
            'banner-padding'          => 'Afiş dolgusu',
            'fullwidth-banner'        => 'Tam genişlikli afiş etkinleştirilsin mi?',
            'text-color'              => 'Metin rengi',
            'dashboard-login'         => 'Altbilgide gösterge paneli butonunu mu gösteriyorsunuz?',
            'reds'                    => 'Kırmızı (hatalar için kullanılır)',
            'blues'                   => 'Mavi (bilgi için kullanılır)',
            'greens'                  => 'Yeşil (başarı için kullanılır)',
            'yellows'                 => 'Sarı (uyarılar için kullanılır)',
            'oranges'                 => 'Turuncu (bildirimler için kullanılır)',
            'metrics'                 => 'Metrikler dolgu',
            'links'                   => 'Bağlantılar',
        ],
    ],

    'user' => [
        'username'       => 'Kullanıcı adı',
        'email'          => 'E-posta',
        'password'       => 'Parola',
        'api-token'      => 'API jetonu',
        'api-token-help' => 'API Tokenini yeniden oluşturmanız mevcut uygulamaların Cachet\'e erişmesini önleyecektir.',
        'gravatar'       => 'Gravatar\'daki profil resminizi değiştirin.',
        'user_level'     => 'Kullanıcı Seviyesi',
        'levels'         => [
            'admin' => 'Yönetim',
            'user'  => 'Kullanıcı',
        ],
        '2fa' => [
            'help' => 'İki faktörlü kimlik doğrulamayı etkinleştirmek, hesabınızın güvenliğini artırır. Mobil cihazınıza <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> veya benzer bir uygulama indirmeniz gerekir. Giriş yaptığınızda, uygulama tarafından üretilen bir belirteç sağlamanız istenir.',
        ],
        'team' => [
            'description' => 'E-posta adreslerini buraya girerek ekip üyelerini davet edin.',
            'email'       => 'E-posta #:id',
        ],
    ],

    'general' => [
        'timezone' => 'Saat dilimini seçin',
    ],

    // Buttons
    'add'            => 'Ekle',
    'save'           => 'Kaydet',
    'update'         => 'Güncelle',
    'create'         => 'Oluştur',
    'edit'           => 'Düzenle',
    'delete'         => 'Sil',
    'submit'         => 'Gönder',
    'cancel'         => 'İptal',
    'remove'         => 'Kaldır',
    'invite'         => 'Davet et',
    'signup'         => 'Kayıt Ol',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* İsteğe bağlı',
];
