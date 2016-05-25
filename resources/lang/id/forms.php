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
        'session_driver'   => 'Driver Sesi',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Username or Email',
        'email'         => 'Email',
        'password'      => 'Password',
        '2fauth'        => 'Kode Otentikasi',
        'invalid'       => 'Invalid username or password',
        'invalid-token' => 'Token tidak benar',
        'cookies'       => 'Mohon aktifkan cookies untuk login.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Nama',
        'status'             => 'Status',
        'component'          => 'Komponen',
        'message'            => 'Pesan',
        'message-help'       => 'Anda juga bisa menggunakan Markdown.',
        'scheduled_at'       => 'Berapa lama pemeliharaan ini dijadwalkan?',
        'incident_time'      => 'Kapan insiden ini terjadi?',
        'notify_subscribers' => 'Beritahu subscriber',
        'visibility'         => 'Incident Visibility',
        'public'             => 'Bisa dilihat oleh publik',
        'logged_in_only'     => 'Hanya bisa dilihat oleh yang login',
        'templates'          => [
            'name'     => 'Nama',
            'template' => 'Template',
            'twig'     => 'Incident Templates can make use of the <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templating language.',
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
            'name'               => 'Nama',
            'collapsing'         => 'Choose visibility of the group',
            'visible'            => 'Always expanded',
            'collapsed'          => 'Collapse the group by default',
            'collapsed_incident' => 'Collapse the group, but expand if there are issues',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Nama',
        'suffix'           => 'Akhiran',
        'description'      => 'Deskripsi',
        'description-help' => 'Anda juga bisa menggunakan Markdown.',
        'display-chart'    => 'Tampilkan grafik di halaman status?',
        'default-value'    => 'Nilai default',
        'calc_type'        => 'Kalkulasi metrik',
        'type_sum'         => 'Jumlah',
        'type_avg'         => 'Rata-rata',
        'places'           => 'Digit Desimal',
        'default_view'     => 'Default view',
        'threshold'        => 'How many minutes of threshold between metric points?',

        'points' => [
            'value' => 'Nilai',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Nama Situs',
            'site-url'               => 'URL',
            'display-graphs'         => 'Tampilkan grafik di halaman status?',
            'about-this-page'        => 'Tentang halaman ini',
            'days-of-incidents'      => 'Berapa hari insiden akan ditampilkan?',
            'banner'                 => 'Banner Image',
            'banner-help'            => "Disarankan gambar yang anda unggah tidak lebih lebar dari 930px.",
            'subscribers'            => 'Bolehkan pengunjung mendaftar notifikasi email?',
            'automatic_localization' => 'Automatically localise your status page to your visitor\'s language?',
        ],
        'analytics' => [
            'analytics_google'       => 'Kode Google Analytics',
            'analytics_gosquared'    => 'Kode GoSquared Analytics',
            'analytics_piwik_url'    => 'URL Piwik anda (tanpa http(s)://)',
            'analytics_piwik_siteid' => 'ID situs Piwik',
        ],
        'localization' => [
            'site-timezone'          => 'Zona Waktu',
            'site-locale'            => 'Bahasa',
            'date-format'            => 'Format Tanggal',
            'incident-date-format'   => 'Format Waktu Insiden',
        ],
        'security' => [
            'allowed-domains'      => 'Domain yang dibolehkan',
            'allowed-domains-help' => 'Pisahkan dengan koma. Domain yang ada di atas otomatis akan dibolehkan.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Background Color',
            'background-fills'        => 'Isian latar belakang (Komponen, Insiden, Footer)',
            'banner-background-color' => 'Banner Background Color',
            'banner-padding'          => 'Banner Padding',
            'fullwidth-banner'        => 'Enable fullwidth banner?',
            'text-color'              => 'Text Color',
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
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => 'Tambah',
    'save'   => 'Simpan',
    'update' => 'Perbarui',
    'create' => 'Buat',
    'edit'   => 'Edit',
    'delete' => 'Hapus',
    'submit' => 'Kirim',
    'cancel' => 'Batalkan',
    'remove' => 'Buang',
    'invite' => 'Undang',
    'signup' => 'Daftar',

    // Other
    'optional' => '* Tidak wajib',
];
