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
            1 => 'Operasional',
            2 => 'Masalah Kinerja',
            3 => 'Gagal Sebagian',
            4 => 'Kegagalan Sistem',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Tidak ada insiden.',
        'past'          => 'Insiden sebelumnya',
        'previous_week' => 'Pekan sebelumnya',
        'next_week'     => 'Pekan selanjutnya',
        'none'          => 'Tidak ada yang bisa dilaporkan',
        'scheduled'     => 'Jadwal Pemeliharaan',
        'scheduled_at'  => ', dijadwalkan pada :timestamp',
        'status'        => [
            0 => 'Dijadwalkan', // TODO: Hopefully remove this.
            1 => 'Investigasi',
            2 => 'Teridentifikasi',
            3 => 'Dimonitor',
            4 => 'Selesai',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Seluruh sistem berfungsi baik.',
        'bad'  => 'Sebagian sistem mengalami masalah.',
    ],

    'api' => [
        'regenerate' => 'Buat ulang API Key',
        'revoke'     => 'Cabut API Key',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'hourly'  => 'Per jam',
            'daily'   => 'Harian',
            'monthly' => 'Bulanan',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates.',
        'button'    => 'Subscribe',
        'email'     => [
            'subscribe'    => 'Subscribe to email updates.',
            'subscribed'   => 'You\'ve been subscribed to email notifications, please check your email to confirm your subscription.',
            'verified'     => 'Your email subscription has been confirmed. Thank you!',
            'unsubscribe'  => 'Unsuscribe from email updates.',
            'unsubscribed' => 'Your email subscription has been cancelled.',
            'failure'      => 'Something went wrong with the subscription.',
            'verify'       => [
                'text'           => "Please confirm your email subscription to :app_name status updates.\n:link\nThank you, :app_name",
                'html-preheader' => 'Please confirm your email subscription to :app_name status updates.',
                'html'           => '<p>Please confirm your email subscription to :app_name status updates.</p><p>:link</p><p>Thank you, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "New maintenance has been scheduled on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New maintenance has been scheduled on :app_name.',
                'html'           => '<p>New maintenance has been scheduled on :app_name.</p><p>Thank you, :app_name</p>',
            ],
            'incident' => [
                'text'           => "New incident has been reported on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New incident has been reported on :app_name.',
                'html'           => '<p>New incident has been reported on :app_name.</p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => 'Halaman Status :app dibuat dengan <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'Tentang situs ini',
    'rss-feed'        => 'Pasokan RSS',
    'atom-feed'       => 'Pasokan Atom',
    'feed'            => 'Pasokan Status',

];
