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

    'dashboard' => 'Kontrol paneli',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidents &amp; Schedule',
        'incidents'                => 'Olaylar',
        'logged'                   => '{0} Hiç olay yok, tebrikler. |Bir olay rapor ettiniz.|<strong>:count</strong> olay rapor ettiniz.',
        'incident-create-template' => 'Şablon Oluştur',
        'incident-templates'       => 'Olay Şablonları',
        'add'                      => [
            'title'   => 'Olay Ekle',
            'success' => 'Olay eklendi.',
            'failure' => 'Olay eklenirken bir hata oluştu, lütfen tekrar deneyin.',
        ],
        'edit' => [
            'title'   => 'Olay Düzenle',
            'success' => 'Olay güncellendi.',
            'failure' => 'Olay düzenlenirken bir hata oluştu, lütfen tekrar deneyin.',
        ],
        'delete' => [
            'success' => 'Olay silindi ve durum sayfanızda bir daha gösterilmeyecek.',
            'failure' => 'Olay silinemedi, lütfen tekrar deneyin.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Olay Şablonları',
            'add'   => [
                'title'   => 'Olay Şablonu Oluştur',
                'message' => 'Bir olay şablonu eklemelisiniz.',
                'success' => 'Yeni olay şablonunuz oluşturuldu.',
                'failure' => 'Olay şablonu ile ilgili bir şeyler ters gitti.',
            ],
            'edit' => [
                'title'   => 'Şablonu Düzenle',
                'success' => 'Olay şablonu güncellendi.',
                'failure' => 'Olay şablonunu güncellerken bir şeyler ters gitti',
            ],
            'delete' => [
                'success' => 'Olay şablonu silindi.',
                'failure' => 'Olay şablonu silinemedi, lütfen tekrar deneyin.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Zamanlanmış bakım',
        'logged'       => '{0} Hiçbir olay yok, tebrikler. |Bir olayı raprladınız. | <strong>:count</strong> olayı raporladınız.',
        'scheduled_at' => ':timestamp zamanı için kaydedildi',
        'add'          => [
            'title'   => 'Zamanlanmış Bakım Ekle',
            'success' => 'Zamanlama eklendi.',
            'failure' => 'Zamanlama eklerken bir şeyler yanlış gitti, lütfen yeniden deneyin.',
        ],
        'edit' => [
            'title'   => 'Zamanlanmış Bakımı Düzenle',
            'success' => 'Zamanlama güncellendi!',
            'failure' => 'Zamanlama düzeltilirken bir şeyler ters gitti, lütfen tekrar deneyin.',
        ],
        'delete' => [
            'success' => 'Zamanlanmış bakım silindi ve durum sayfanızda bir daha gösterilmeyecek.',
            'failure' => 'Zamanlanmış bakım silinemez, lütfen tekrar deneyin.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Bileşenler',
        'component_statuses' => 'Bileşen Durumları',
        'listed_group'       => ':name altında toplandı',
        'add'                => [
            'title'   => 'Bileşen ekle',
            'message' => 'Bir bileşen eklemelisiniz.',
            'success' => 'Bileşen oluşturuldu.',
            'failure' => 'Bileşenlerle ilgili bir şeyler yanlış gitti, lütfen daha sonra tekrar deneyin.',
        ],
        'edit' => [
            'title'   => 'Bileşen düzenle',
            'success' => 'Bileşen güncellendi.',
            'failure' => 'Bileşenlerle ilgili bir şeyler yanlış gitti, lütfen daha sonra tekrar deneyin.',
        ],
        'delete' => [
            'success' => 'Bileşen silindi!',
            'failure' => 'Bileşen silinemedi, lütfen tekrar deneyin.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Bileşen grubu|Bileşen grupları',
            'no_components' => 'Bir bileşen grubu eklemeniz gerekir.',
            'add'           => [
                'title'   => 'Bir bileşen grubu ekle',
                'success' => 'Bileşen grubu eklendi.',
                'failure' => 'Bileşenlerle ilgili bir şeyler yanlış gitti, lütfen daha sonra tekrar deneyin.',
            ],
            'edit' => [
                'title'   => 'Bileşen grubunu düzenle',
                'success' => 'Bileşen grubu güncellendi.',
                'failure' => 'Bileşenlerle ilgili bir şeyler yanlış gitti, lütfen daha sonra tekrar deneyin.',
            ],
            'delete' => [
                'success' => 'Bileşen grubu silindi!',
                'failure' => 'Bileşen grubu silinemedi, lütfen tekrar deneyin.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrik',
        'add'     => [
            'title'   => 'Bir ölçü oluştur',
            'message' => 'Bir ölçü eklemelisiniz.',
            'success' => 'Metrik oluşturuldu.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'Bir metrik düzenle',
            'success' => 'Metrik güncellendi.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'delete' => [
            'success' => 'Metrik silindi ve artık durum sayfanızda gösterilmeyecek.',
            'failure' => 'Metrik silinemedi, lütfen tekrar deneyin.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Aboneler',
        'description'      => 'Aboneler, olaylar oluşturulduğunda veya bileşenler güncellendiğinde e-posta güncellemelerini alacaktır.',
        'verified'         => 'Onaylanmış',
        'not_verified'     => 'Doğrulanmadı',
        'subscriber'       => ':email, abone oldu :date',
        'no_subscriptions' => 'Güncellemeler için abone ol',
        'add'              => [
            'title'   => 'Yeni abone ekleme',
            'success' => 'Abone eklendi!',
            'failure' => 'Abone eklerken bir şeyler yanlış gitti, lütfen tekrar deneyin.',
            'help'    => 'Her bir aboneyi yeni bir hatta girin.',
        ],
        'edit' => [
            'title'   => 'Aboneleri güncelle',
            'success' => 'Aboneler güncellendi!',
            'failure' => 'Abone eklerken bir şeyler yanlış gitti, lütfen tekrar deneyin.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Takım',
        'member'      => 'Üye',
        'profile'     => 'Profil',
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
        'add'         => [
            'title'   => 'Yeni ekip üyesi ekle',
            'success' => 'Ekip üyesi eklendi.',
            'failure' => 'Ekip üyesi eklenemedi, lütfen tekrar deneyin.',
        ],
        'edit' => [
            'title'   => 'Profili Güncelle',
            'success' => 'Profil güncellendi.',
            'failure' => 'Profili güncelleme işlemi sırasında bir sorun oluştu, lütfen tekrar deneyin.',
        ],
        'delete' => [
            'success' => 'Ekip üyesi silindi ve artık gösterge tablosuna erişimi yok!',
            'failure' => 'Ekip üyesi eklenemedi, lütfen tekrar deneyin.',
        ],
        'invite' => [
            'title'   => 'Yeni bir ekip üyesi davet et',
            'success' => 'Bir davet gönderildi',
            'failure' => 'Davet gönderilemedi, lütfen tekrar deneyin.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Ayarlar',
        'app-setup' => [
            'app-setup'   => 'Uygulama kurulumu',
            'images-only' => 'Yalnızca resimler yüklenebilir.',
            'too-big'     => 'Yüklediğiniz dosya çok büyük. Boyutundan küçük bir resim yükleyin',
        ],
        'analytics' => [
            'analytics' => 'Analitik',
        ],
        'localization' => [
            'localization' => 'Yerelleştirme',
        ],
        'customization' => [
            'customization' => 'Özelleştirme',
            'header'        => 'Özel Başlık HTML',
            'footer'        => 'Özel Altbilgi HTML',
        ],
        'security' => [
            'security'   => 'Güvenlik',
            'two-factor' => 'İki faktörlü kimlik doğrulaması olmayan kullanıcılar',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stil',
        ],
        'theme' => [
            'theme' => 'Tema',
        ],
        'edit' => [
            'success' => 'Ayarlar kaydedildi.',
            'failure' => 'Ayarlar kaydedilemedi.',
        ],
        'credits' => [
            'credits'       => 'Kredi',
            'contributors'  => 'Katkıda bulunanlar',
            'license'       => 'Cachet, <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank"> Alt Üç\'te yayınlanan BSD-3 lisanslı bir açık kaynak projesidir, tarafından yayımlı </a>.',
            'backers-title' => 'Destekçiler ve Sponsorlar',
            'backers'       => 'If you\'d like to support future development, check out the CrowdIn and GitHub.',
            'thank-you'     => 'Her biri için teşekkür ederim: katılımcıları sayın.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Oturum aç',
        'logged_in'  => 'Giriş yaptın.',
        'welcome'    => 'Welcome Back!',
        'two-factor' => 'Lütfen tokeni giriniz.',
    ],

    // Sidebar footer
    'help'        => 'Yardım',
    'status_page' => 'Durum sayfası',
    'logout'      => 'Çıkış yap',

    // Notifications
    'notifications' => [
        'notifications' => 'Bildirimler',
        'awesome'       => 'Harika.',
        'whoops'        => 'Hay aksi.',
    ],

    // Widgets
    'widgets' => [
        'news'             => 'Son Haberler',
        'news_subtitle'    => 'En son güncellemeyi edinin',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your new Status page!',
        'message' => 'Your status page is almost ready! You might want to configure these extra settings',
        'close'   => 'Take me straight to my dashboard',
        'steps'   => [
            'component'  => 'Create components',
            'incident'   => 'Create incidents',
            'customize'  => 'Customize',
            'team'       => 'Add users',
            'api'        => 'Generate API token',
            'two-factor' => 'Two Factor Authentication',
        ],
    ],

];
