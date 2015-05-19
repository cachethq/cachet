<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
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
    ],

    // Login form fields
    'login' => [
        'email'         => 'Email',
        'password'      => 'Password',
        '2fauth'        => 'Kode Otentikasi',
        'invalid'       => 'Email atau password tidak benar',
        'invalid-token' => 'Token tidak benar',
        'cookies'       => 'Mohon aktifkan cookies untuk login.',
        ],

    // Incidents form fields
    'incidents' => [
        'name'         => 'Nama',
        'status'       => 'Status',
        'component'    => 'Komponen',
        'message'      => 'Pesan',
        'message-help' => 'Anda juga bisa menggunakan Markdown.',
        'scheduled_at' => 'Berapa lama pemeliharaan ini dijadwalkan?',

        'templates' => [
            'name'     => 'Nama',
            'template' => 'Template',
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

        'groups' => [
            'name' => 'Nama',
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

        'points' => [
            'value' => 'Nilai',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'         => 'Nama Situs',
            'site-url'          => 'URL',
            'site-timezone'     => 'Zona Waktu',
            'site-locale'       => 'Bahasa',
            'date-format'       => 'Format Tanggal',
            'display-graphs'    => 'Tampilkan grafik di halaman status?',
            'about-this-page'   => 'Tentang halaman ini',
            'days-of-incidents' => 'Berapa hari insiden akan ditampilkan?',
            'banner'            => 'Gambar Banner',
            'banner-help'       => 'Disarankan gambar yang anda unggah tidak lebih lebar dari 930px.',
            'google-analytics'  => 'Kode Google Analytics',
        ],
        'security' => [
            'allowed-domains'      => 'Domain yang dibolehkan',
            'allowed-domains-help' => 'Pisahkan dengan koma. Domain yang ada di atas otomatis akan dibolehkan.',
        ],
        'stylesheet' => [
            'custom-css' => 'Stylesheet Kustom',
        ],
        'theme' => [
            'background-color' => 'Warna Latar',
            'text-color'       => 'Warna Teks',
        ],
    ],

    'user' => [
        'username'       => 'Username',
        'email'          => 'Email',
        'password'       => 'Password',
        'api-token'      => 'Token API',
        'api-token-help' => 'Pembuatan ulang token API akan bermasalah jika sudah ada aplikasi lain yang mengakses Cachet.',
        '2fa'            => [
            'help' => 'Mengaktifkan otentikasi dua faktor akan memperkuat keamanan akun anda. Anda perlu mengunduh <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> atau app sejenis di gadget anda. Saat login anda akan ditanyakan untuk mengisi token yang dibuat oleh app tersebut.',
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

    // Other
    'optional' => '* Tidak wajib',
];
