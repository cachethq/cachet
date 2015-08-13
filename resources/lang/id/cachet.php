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
        'none'          => 'Tidak ada insiden.',
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
        'subscribe' => 'Ikuti newsletter untuk mendapat update terbaru.',
        'button'    => 'Daftar',
        'email'     => [
            'subscribe'    => 'Langganan update email.',
            'subscribed'   => 'Anda berhasil terdaftar pada notifikasi email, mohon periksa email anda untuk mengkonfirmasi pendaftaran ini.',
            'verified'     => 'Pendaftaran newsletter anda berhasil dikonfirmasi. Terima kasih!',
            'unsubscribe'  => 'Hapus saya dari update email.',
            'unsubscribed' => 'Langganan email anda sudah dihentikan.',
            'failure'      => 'Ada yang salah dengan sistem langganan email.',
            'verify'       => [
                'text'           => 'Mohon konfirmasi langganan email update status :app_name.\\n:link\\nTerima kasih,
:app_name',
                'html-preheader' => 'Mohon konfirmasi langganan email update status :app_name.',
                'html'           => '',
            ],
            'maintenance' => [
                'text'           => 'Jadwal pemeliharaan baru sudah dibuat di :app_name.\\nTerima kasih, :app_name',
                'html-preheader' => 'Jadwal pemeliharaan baru sudah dibuat di :app_name.',
                'html'           => '',
            ],
            'incident' => [
                'text'           => 'Ada insiden baru yang dilaporkan di :app_name.\\n Terima kasih, :app_name',
                'html-preheader' => 'Ada insiden baru yang dilaporkan di :app_name.',
                'html'           => '<p>Ada insiden baru yang dilaporkan di :app_name.</p><p> Terima kasih, :app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => 'Halaman Status :app dibuat dengan <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'Tentang situs ini',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Pasokan Status',

];
