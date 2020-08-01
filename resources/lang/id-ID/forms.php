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
        'email'            => 'Email',
        'username'         => 'Username',
        'password'         => 'Password',
        'site_name'        => 'Nama Situs',
        'site_domain'      => 'Domain',
        'site_timezone'    => 'Pilih Zona Waktu',
        'site_locale'      => 'Pilih Bahasa',
        'enable_google2fa' => 'Aktifkan Otentikasi Dua Faktor dengan Google',
        'cache_driver'     => 'Driver Cache',
        'queue_driver'     => 'Queue Driver',
        'session_driver'   => 'Driver Sesi',
        'mail_driver'      => 'Driver Email',
        'mail_host'        => 'Host Email',
        'mail_address'     => 'Alamat Email Pengirim',
        'mail_username'    => 'Username Email',
        'mail_password'    => 'Password Email',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Username atau Email',
        'email'         => 'Email',
        'password'      => 'Password',
        '2fauth'        => 'Kode Otentikasi',
        'invalid'       => 'Username atau password tidak benar',
        'invalid-token' => 'Token tidak benar',
        'cookies'       => 'Mohon aktifkan cookies untuk login.',
        'rate-limit'    => 'Melebihi batas.',
        'remember_me'   => 'Remember me',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nama',
        'status'             => 'Status',
        'component'          => 'Komponen',
        'component_status'   => 'Status Komponen',
        'message'            => 'Pesan',
        'message-help'       => 'Anda juga bisa menggunakan Markdown.',
        'occurred_at'        => 'When did this incident occur?',
        'notify_subscribers' => 'Beritahu subscriber',
        'notify_disabled'    => 'Karena adanya pemeliharaan, notifikasi insiden ini atau komponennya akan diprioritaskan.',
        'visibility'         => 'Tampilan Insiden',
        'stick_status'       => 'Buat Insiden Sticky',
        'stickied'           => 'Sticky',
        'not_stickied'       => 'Tidak Sticky',
        'public'             => 'Bisa dilihat oleh publik',
        'logged_in_only'     => 'Hanya bisa dilihat oleh yang login',
        'templates'          => [
            'name'     => 'Nama',
            'template' => 'Template',
            'twig'     => 'Template Insiden ini bisa menggunakan bahasa template <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    'schedules' => [
        'name'         => 'Nama',
        'status'       => 'Status',
        'message'      => 'Pesan',
        'message-help' => 'Anda juga bisa menggunakan Markdown.',
        'scheduled_at' => 'When is this maintenance scheduled for?',
        'completed_at' => 'When did this maintenance complete?',
        'templates'    => [
            'name'     => 'Nama',
            'template' => 'Template',
            'twig'     => 'Template Insiden ini bisa menggunakan bahasa template <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Nama',
        'status'      => 'Status',
        'group'       => 'Grup',
        'description' => 'Deskripsi',
        'link'        => 'Link',
        'tags'        => 'Tag',
        'tags-help'   => 'Pisahkan dengan koma.',
        'enabled'     => 'Component enabled?',

        'groups' => [
            'name'                     => 'Nama',
            'collapsing'               => 'Buka/Tutup opsi',
            'visible'                  => 'Selalu buka',
            'collapsed'                => 'Standarnya tutup grup',
            'collapsed_incident'       => 'Tutup grup, tetapi buka jika ada masalah',
            'visibility'               => 'Visibilitas',
            'visibility_public'        => 'Terlihat bagi publik',
            'visibility_authenticated' => 'Terlihat hanya untuk yang sudah login',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'Nama',
        'description'        => 'Deskripsi',
        'start_at'           => 'Waktu mulai jadwal',
        'timezone'           => 'Zona waktu',
        'schedule_frequency' => 'Frekuensi jadwal (dalam detik)',
        'completion_latency' => 'Latensi penyelesaian (dalam detik)',
        'group'              => 'Grup',
        'active'             => 'Aktif?',
        'groups'             => [
            'name' => 'Nama Grup',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'Nama',
        'suffix'                   => 'Akhiran',
        'description'              => 'Deskripsi',
        'description-help'         => 'Anda juga bisa menggunakan Markdown.',
        'display-chart'            => 'Tampilkan grafik di halaman status?',
        'default-value'            => 'Nilai default',
        'calc_type'                => 'Kalkulasi metrik',
        'type_sum'                 => 'Jumlah',
        'type_avg'                 => 'Rata-rata',
        'places'                   => 'Digit Desimal',
        'default_view'             => 'Tampilan default',
        'threshold'                => 'Dalam rentang berapa menit antara poin metrik?',
        'visibility'               => 'Visibilitas',
        'visibility_authenticated' => 'Visible to authenticated users',
        'visibility_public'        => 'Visible to everybody',
        'visibility_hidden'        => 'Always hidden',

        'points' => [
            'value' => 'Nilai',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'Nama Situs',
            'site-url'                              => 'URL',
            'display-graphs'                        => 'Tampilkan grafik di halaman status?',
            'about-this-page'                       => 'Tentang halaman ini',
            'days-of-incidents'                     => 'Berapa hari insiden akan ditampilkan?',
            'time_before_refresh'                   => 'Status page refresh rate (in seconds)',
            'major_outage_rate'                     => 'Major outage threshold (in %)',
            'banner'                                => 'Gambar Banner',
            'banner-help'                           => "It's recommended that you upload files no bigger than 930px wide",
            'subscribers'                           => 'Bolehkan pengunjung mendaftar notifikasi email?',
            'suppress_notifications_in_maintenance' => 'Paksa munculnya notifikasi ketika insiden terjadi saat periode pemeliharaan?',
            'skip_subscriber_verification'          => 'Lewatkan verifikasi user? (Hati-hati, anda bisa kena spam)',
            'automatic_localization'                => 'Otomatis ganti bahasa halaman status anda ke bahasa pengunjung?',
            'enable_external_dependencies'          => 'Aktifkan Dependensi Pihak Ketiga (Font Google, Trackers, dll...)',
            'show_timezone'                         => 'Show the timezone the status page is running in',
            'only_disrupted_days'                   => 'Hanya tampilkan hari yang berisi insiden dalam linimasa?',
        ],
        'analytics' => [
            'analytics_google'       => 'Kode Google Analytics',
            'analytics_gosquared'    => 'Kode GoSquared Analytics',
            'analytics_piwik_url'    => 'URL of your Piwik instance',
            'analytics_piwik_siteid' => 'ID situs Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'Zona Waktu',
            'site-locale'          => 'Bahasa',
            'date-format'          => 'Format Tanggal',
            'incident-date-format' => 'Format Waktu Insiden',
        ],
        'security' => [
            'allowed-domains'           => 'Domain yang dibolehkan',
            'allowed-domains-help'      => 'Pisahkan dengan koma. Domain yang ada di atas otomatis akan dibolehkan.',
            'always-authenticate'       => 'Always authenticate',
            'always-authenticate-help'  => 'Require login to view any Cachet page',
        ],
        'stylesheet' => [
            'custom-css' => 'Stylesheet Kustom',
        ],
        'theme' => [
            'background-color'        => 'Warna latar belakang',
            'background-fills'        => 'Isian latar belakang (Komponen, Insiden, Footer)',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable full width banner?',
            'text-color'              => 'Warna teks',
            'dashboard-login'         => 'Tampilkan tombol dashboard di footer?',
            'reds'                    => 'Merah (Digunakan jika ada kesalahan)',
            'blues'                   => 'Biru (Digunakan jika ada informasi)',
            'greens'                  => 'Hijau (Digunakan saat operasi berhasil)',
            'yellows'                 => 'Kuning (Digunakan sebagai peringatan)',
            'oranges'                 => 'Jingga (Digunakan sebagai pemberitahuan)',
            'metrics'                 => 'Isian metrik',
            'links'                   => 'Tautan',
        ],
    ],

    'user' => [
        'username'       => 'Username',
        'email'          => 'Email',
        'password'       => 'Password',
        'api-token'      => 'Token API',
        'api-token-help' => 'Pembuatan ulang token API akan bermasalah jika sudah ada aplikasi lain yang mengakses Cachet.',
        'gravatar'       => 'Change your profile picture at Gravatar.',
        'user_level'     => 'Tingkatan pengguna',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'User',
        ],
        '2fa' => [
            'help' => 'Mengaktifkan otentikasi dua faktor akan memperkuat keamanan akun anda. Anda perlu mengunduh <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> atau app sejenis di gadget anda. Saat login anda akan ditanyakan untuk mengisi token yang dibuat oleh app tersebut.',
        ],
        'team' => [
            'description' => 'Invite your team members by entering their email addresses here.',
            'email'       => 'Alamat Email Anggota Tim Anda',
        ],
    ],

    'general' => [
        'timezone' => 'Pilih zona waktu',
    ],

    'seo' => [
        'title'        => 'SEO Title',
        'description'  => 'SEO Description',
    ],

    // Buttons
    'add'            => 'Tambah',
    'save'           => 'Simpan',
    'update'         => 'Perbarui',
    'create'         => 'Buat',
    'edit'           => 'Edit',
    'delete'         => 'Hapus',
    'submit'         => 'Kirim',
    'cancel'         => 'Batalkan',
    'remove'         => 'Buang',
    'invite'         => 'Undang',
    'signup'         => 'Daftar',
    'manage_updates' => 'Kelola Update',

    // Other
    'optional' => '* Tidak wajib',
];
