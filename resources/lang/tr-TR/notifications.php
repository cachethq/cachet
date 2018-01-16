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
                'subject'  => 'Bileşen Durumu Güncellendi',
                'greeting' => 'Bir bileşenin durumu güncellendi!',
                'content'  => ':name status :old_status\'tan: new_status olarak değiştirildi.',
                'action'   => 'Görüntüle',
            ],
            'slack' => [
                'title'   => 'Bileşen Durumu Güncellendi',
                'content' => ':name status :old_status\'tan: new_status olarak değiştirildi.',
            ],
            'sms' => [
                'content' => ':name status :old_status\'tan: new_status olarak değiştirildi.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Yeni Olay Bildirildi',
                'greeting' => 'Şu adreste yeni bir olay bildirildi: app_name.',
                'content'  => 'Olay: adı bildirildi',
                'action'   => 'Görüntüle',
            ],
            'slack' => [
                'title'   => 'Olay :name Bildirildi',
                'content' => 'Şu anda yeni bir olay bildirildi :app_name',
            ],
            'sms' => [
                'content' => 'Şu adreste yeni bir olay bildirildi: app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Olay Güncellendi',
                'content' => ':name güncellendi',
                'title'   => ':ad güncellendi: new_status',
                'action'  => 'Görüntüle',
            ],
            'slack' => [
                'title'   => ':name Güncellendi',
                'content' => ':ad güncellendi: new_status',
            ],
            'sms' => [
                'content' => 'Olay :name güncellendi',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Yeni Program oluşturuldu',
                'content' => ':name planlandı :tarih',
                'title'   => 'Yeni bir zamanlanmış bakım yapılmıştır.',
                'action'  => 'Görüntüle',
            ],
            'slack' => [
                'title'   => 'Yeni Program Oluşturuldu!',
                'content' => ':name planlandı :tarih',
            ],
            'sms' => [
                'content' => ':name planlandı :tarih',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Aboneliğinizi Doğrulayın',
                'content' => 'Aboneliğinizi doğrulamak için tıklayın :app_name durum sayfası.',
                'title'   => 'Abone olduğunuzu doğrulayın :app_name durum sayfası.',
                'action'  => 'Doğrula',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Cachet\'den Ping!',
                'content' => 'Bu, Cachet\'den gelen bir test bildirimidir!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Davetiyen içeride...',
                'content' => 'Şu adreste davet edildiniz :app_name durum sayfası.',
                'title'   => 'Şu adreste davet edildiniz :app_name durum sayfası.',
                'action'  => 'Kabul et',
            ],
        ],
    ],
];
