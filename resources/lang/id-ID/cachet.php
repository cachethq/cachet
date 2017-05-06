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
            0 => 'Tidak diketahui',
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
        'none'         => 'Tidak ada insiden yang dilaporkan',
        'past'         => 'Insiden sebelumnya',
        'stickied'     => 'Insiden sticky',
        'scheduled'    => 'Jadwal Pemeliharaan',
        'scheduled_at' => ', dijadwalkan pada :timestamp',
        'posted'       => 'Dikirim: timestamp',
        'status'       => [
            1 => 'Investigasi',
            2 => 'Teridentifikasi',
            3 => 'Dimonitor',
            4 => 'Selesai',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Mendatang',
            1 => 'Sedang berlangsung',
            2 => 'Selesai',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] sistem operasional | [2, Inf] Semua sistem operasional',
        'bad'   => '[0,1] sistem ini sedang mengalami masalah | [2, Inf] Beberapa sistem mengalami masalah',
        'major' => '[0,1] Layanan mengalami outage besar | [2, Inf] Beberapa sistem mengalami outage besar',
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
        'subscribe'   => 'Ikuti newsletter untuk mendapat update terbaru.',
        'unsubscribe' => 'Berhenti berlangganan pada :link',
        'button'      => 'Daftar',
        'manage'      => [
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
    'timezone'        => 'Waktu dalam :timezone.',
    'about_this_site' => 'Tentang situs ini',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Pasokan Status',

];