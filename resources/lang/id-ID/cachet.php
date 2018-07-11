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
        'last_updated' => 'Update terakhir :timestamp',
        'status'       => [
            1 => 'Operasional',
            2 => 'Masalah Kinerja',
            3 => 'Gagal Sebagian',
            4 => 'Kegagalan Sistem',
        ],
        'group' => [
            'other' => 'Komponen Lain',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Tidak ada insiden yang dilaporkan',
        'past'          => 'Insiden sebelumnya',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => 'Jadwal Pemeliharaan',
        'scheduled_at'  => ', dijadwalkan pada :timestamp',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
            1 => 'Investigasi',
            2 => 'Teridentifikasi',
            3 => 'Dimonitor',
            4 => 'Selesai',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] sistem operasional | [2, Inf] Semua sistem operasional',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Buat ulang API Key',
        'revoke'     => 'Cabut API Key',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Jam terakhir',
            'hourly'    => 'Last 12 Hours',
            'weekly'    => 'Week',
            'monthly'   => 'Month',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Daftar',
        'manage'    => [
            'no_subscriptions' => 'Anda saat ini terdaftar untuk semua update.',
            'my_subscriptions' => 'Anda saat ini berlangganan update berikut.',
        ],
        'email' => [
            'subscribe'          => 'Langganan update email.',
            'subscribed'         => 'Anda berhasil terdaftar pada notifikasi email, mohon periksa email anda untuk mengkonfirmasi pendaftaran ini.',
            'verified'           => 'Pendaftaran newsletter anda berhasil dikonfirmasi. Terima kasih!',
            'manage'             => 'Mengelola langganan Anda',
            'unsubscribe'        => 'Hapus saya dari update email.',
            'unsubscribed'       => 'Langganan email anda sudah dihentikan.',
            'failure'            => 'Ada yang salah dengan sistem langganan email.',
            'already-subscribed' => 'Tidak bisa mendaftarkan :email karena sudah berlangganan.',
            'verify'             => [
                'text'   => "Mohon konfirmasi email anda atas langganan update status :app_name.\n:link",
                'html'   => '<p>Mohon konfirmasi email anda atas langganan update status :app_name.</p>',
                'button' => 'Konfirmasi Berlangganan',
            ],
            'maintenance' => [
                'subject' => '[Pemeliharaan Terjadwal] :name',
            ],
            'incident' => [
                'subject' => '[Insiden Baru] :status: :name',
            ],
            'component' => [
                'subject'       => 'Update Status Komponen',
                'text'          => 'Komponen :component_name telah melihat status berubah. Komponen sekarang di :component_human_status.\nTerima Kasih, :app_name',
                'html'          => '<p>Ada perubahan pada status komponen :component_name. Komponen ini sekarang :component_human_status.</p><p>Terima kasih,<br/> :app_name</p>',
                'tooltip-title' => 'Berlangganan notifikasi :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Anda diundang dalam tim Halaman Status :app_name, untuk mendaftar silakan klik tautan berikut \n:link\nTerima kasih, :app_name",
                'html' => '<p>Anda diundang dalam tim Halaman Status :app_name, untuk mendaftar silakan klik tautan berikut. </p><p><a href=":link">:link</a></p><p>Terima kasih, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Daftar',
        'username' => 'Username',
        'email'    => 'Email',
        'password' => 'Password',
        'success'  => 'Akun anda berhasil dibuat.',
        'failure'  => 'Ada masalah dalam pendaftaran.',
    ],

    'system' => [
        'update' => 'Ada versi terbaru Cachet yang tersedia. Anda dapat mempelajari cara update <a href="https://docs.cachethq.io/docs/updating-cachet"> di sini</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Tutup',
        'subscribe' => [
            'title'  => 'Berlangganan update komponen',
            'body'   => 'Masukkan alamat email Anda untuk berlangganan update komponen ini. Jika sudah berlangganan, Anda akan menerima email untuk komponen ini.',
            'button' => 'Daftar',
        ],
    ],

    // Other
    'home'            => 'Depan',
    'description'     => 'Tetap up to date dengan layanan terbaru dari :app.',
    'powered_by'      => 'Ditenagai oleh <a href="https://cachethq.io" class="links"> Cachet</a>.',
    'about_this_site' => 'Tentang situs ini',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Pasokan Status',

];
