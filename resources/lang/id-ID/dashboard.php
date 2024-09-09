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

    'dashboard'          => 'Dashboard',
    'writeable_settings' => 'The Cachet settings directory is not writeable. Please make sure that <code>./bootstrap/cachet</code> is writeable by the web server.',

    // Incidents
    'incidents' => [
        'title'                    => 'Insiden &amp; Penjadwalan',
        'incidents'                => 'Insiden',
        'logged'                   => '{0}There are no incidents, good work.|[1]You have logged one incident.|[2,*]You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'Buat Template',
        'incident-templates'       => 'Template Insiden',
        'updates'                  => [
            'title'   => 'Update insiden untuk :incident',
            'count'   => '{0}Zero Updates|[1]One Update|[2]Two Updates|[3,*]Several Updates',
            'add'     => [
                'title'   => 'Buat update insiden baru',
                'success' => 'Update baru insiden anda berhasil dibuat.',
                'failure' => 'Ada masalah dengan update insiden ini.',
            ],
            'edit' => [
                'title'   => 'Edit update insiden',
                'success' => 'Update insiden berhasil diupdate.',
                'failure' => 'Ada masalah saat memperbarui update insiden',
            ],
        ],
        'reported_by'              => 'Reported :timestamp by :user',
        'add'                      => [
            'title'   => 'Tambahkan Insiden',
            'success' => 'Insiden sudah ditambahkan.',
            'failure' => 'Ada kesalahan saat menambahkan insiden, silakan coba lagi.',
        ],
        'edit' => [
            'title'   => 'Edit insiden',
            'success' => 'Insiden sudah diperbarui.',
            'failure' => 'Ada kesalahan sat mengedit insiden, silakan coba lagi.',
        ],
        'delete' => [
            'success' => 'Insiden sudah dihapus dan tidak akan ditampilkan pada halaman status anda.',
            'failure' => 'Insiden tidak dapat dihapus, silakan coba lagi.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Template Insiden',
            'add'   => [
                'title'   => 'Buat template insiden',
                'message' => 'Create your first incident template.',
                'success' => 'Template insiden baru telah dibuat.',
                'failure' => 'Ada masalah dengan template insiden ini.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
                'success' => 'Template insiden telah diperbarui.',
                'failure' => 'Ada masalah saat memperbarui template insiden ini',
            ],
            'delete' => [
                'success' => 'Template insiden telah dihapus.',
                'failure' => 'Template insiden tidak dapat dihapus, silakan coba lagi.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Pemeliharaan',
        'logged'       => '{0}There has been no Maintenance, good work.|[1]You have logged one schedule.|[2,*]You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Dijadwalkan pada :timestamp',
        'add'          => [
            'title'   => 'Tambahkan Jadwal Pemeliharaan',
            'success' => 'Jadwal sudah ditambahkan.',
            'failure' => 'Ada masalah saat menambahkan jadwal, silakan coba lagi.',
        ],
        'edit' => [
            'title'   => 'Edit Jadwal Pemeliharaan',
            'success' => 'Jadwal sudah diperbarui!',
            'failure' => 'Ada masalah saat mengedit jadwal, silakan coba lagi.',
        ],
        'delete' => [
            'success' => 'Pemeliharaan terjadwal telah dihapus dan tidak akan ditampilkan pada halaman status anda.',
            'failure' => 'Pemeliharaan terjadwal tidak bisa dihapus, silakan coba lagi.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponen',
        'component_statuses' => 'Status Komponen',
        'listed_group'       => 'Dikelompokkan dalam :name',
        'add'                => [
            'title'   => 'Tambahkan Komponen',
            'message' => 'Anda perlu menambahkan komponen.',
            'success' => 'Komponen sudah dibuat.',
            'failure' => 'Ada masalah dalam grup komponen, silakan coba lagi.',
        ],
        'edit' => [
            'title'   => 'Edit komponen',
            'success' => 'Komponen sudah diperbarui.',
            'failure' => 'Ada masalah dalam grup komponen, silakan coba lagi.',
        ],
        'delete' => [
            'success' => 'Komponen sudah dihapus!',
            'failure' => 'Komponen tidak bisa dihapus, silakan coba lagi.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grup komponen|Grup komponen',
            'no_components' => 'Anda perlu menambahkan grup komponen.',
            'add'           => [
                'title'   => 'Tambahkan grup komponen',
                'success' => 'Grup komponen sudah ditambahkan.',
                'failure' => 'Ada masalah dalam grup komponen, silakan coba lagi.',
            ],
            'edit' => [
                'title'   => 'Edit grup komponen',
                'success' => 'Grup komponen sudah diperbarui.',
                'failure' => 'Ada masalah dalam grup komponen, silakan coba lagi.',
            ],
            'delete' => [
                'success' => 'Grup komponen sudah dihapus!',
                'failure' => 'Grup komponen tidak bisa dihapus, silakan coba lagi.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrik',
        'add'     => [
            'title'   => 'Buat metrik',
            'message' => 'Anda harus menambahkan metrik.',
            'success' => 'Metrik sudah dibuat.',
            'failure' => 'Ada masalah dalam metrik, silakan coba lagi.',
        ],
        'edit' => [
            'title'   => 'Edit metrik',
            'success' => 'Metrik sudah diperbarui.',
            'failure' => 'Ada masalah dalam metrik, silakan coba lagi.',
        ],
        'delete' => [
            'success' => 'Metrik sudah dihapus dan tidak akan ditampilkan pada halaman status anda.',
            'failure' => 'Metrik tidak bisa dihapus, silakan coba lagi.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'          => 'Berlangganan',
        'description'          => 'Pelanggan akan menerima update email ketika insiden dibuat atau komponen diperbarui.',
        'description_disabled' => 'Untuk menggunakan fitur ini, Anda perlu mengizinkan orang untuk mendaftar notifikasi.',
        'verified'             => 'Terverifikasi',
        'not_verified'         => 'Belum Diverifikasi',
        'subscriber'           => ':email, berlangganan :date',
        'no_subscriptions'     => 'Berlangganan semua update',
        'global'               => 'Berlangganan secara global',
        'add'                  => [
            'title'   => 'Tambah Pelanggan Baru',
            'success' => 'Pelanggan sudah ditambahkan.',
            'failure' => 'Ada masalah saat menambah langganan, silakan coba lagi.',
            'help'    => 'Masukkan setiap pelanggan pada baris baru.',
        ],
        'edit' => [
            'title'   => 'Perbarui Pelanggan',
            'success' => 'Pelanggan sudah diupdate.',
            'failure' => 'Ada masalah saat mengedit langganan, silakan coba lagi.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Tim',
        'member'      => 'Anggota',
        'profile'     => 'Profil',
        'description' => 'Anggota Tim akan bisa menambahkan, mengubah &amp; mengedit komponen dan insiden.',
        'add'         => [
            'title'   => 'Tambahkan Anggota Tim',
            'success' => 'Anggota Tim sudah ditambahkan.',
            'failure' => 'Anggota Tim tidak bisa ditambahkan, silakan coba lagi.',
        ],
        'edit' => [
            'title'   => 'Perbarui profil',
            'success' => 'Profil sudah diperbarui.',
            'failure' => 'Ada masalah saat memperbarui profil, silakan coba lagi.',
        ],
        'delete' => [
            'success' => 'Pengguna sudah dihapus.',
            'failure' => 'Anggota Tim tidak bisa ditambahkan, silakan coba lagi.',
        ],
        'invite' => [
            'title'   => 'Undang Anggota Tim Baru',
            'success' => 'Pengguna sudah diundang.',
            'failure' => 'Undangan tidak terkirim, silakan coba lagi.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Pengaturan',
        'app-setup' => [
            'app-setup'   => 'Pengaturan Aplikasi',
            'images-only' => 'Hanya gambar yang bisa diunggah.',
            'too-big'     => 'Berkas yang anda unggah terlalu besar. Mohon unggah gambar dengan ukuran tidak lebih dari :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'log' => [
            'log' => 'Log',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'customization' => [
            'customization' => 'Kustomisasi',
            'header'        => 'Header HTML Kustom',
            'footer'        => 'Footer HTML Kustom',
        ],
        'mail' => [
            'mail'  => 'Mail',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Test notification from Cachet',
                'body'    => 'This is a test notification from Cachet.',
            ],
        ],
        'security' => [
            'security'   => 'Keamanan',
            'two-factor' => 'User tanpa otentikasi dua-faktor',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Theme',
        ],
        'edit' => [
            'success' => 'Pengaturan sudah disimpan.',
            'failure' => 'Pengaturan tidak bisa disimpan.',
        ],
        'credits' => [
            'credits'       => 'Kredit',
            'contributors'  => 'Kontributor',
            'license'       => 'Cachet adalah proyek open source berlisensi BSD, dirilis oleh <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Pendukung & Sponsor',
            'backers'       => 'Jika anda ingin mendukung pengembangan selanjutnya, silakan kunjungi kampanye <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet di Patreon</a>.',
            'thank-you'     => 'Terima kasih pada seluruh :count kontributor.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Masuk',
        'logged_in'  => 'Anda sudah login.',
        'welcome'    => 'Halo!',
        'two-factor' => 'Silakan masukkan token anda.',
    ],

    // Sidebar footer
    'help'        => 'Panduan',
    'status_page' => 'Halaman Status',
    'logout'      => 'Keluar',

    // Notifications
    'notifications' => [
        'notifications' => 'Notifikasi',
        'awesome'       => 'Keren.',
        'whoops'        => 'Waduh.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Dukung Cachet',
        'support_subtitle' => 'Lihat halaman <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> kami!',
        'news'             => 'Berita Terbaru',
        'news_subtitle'    => 'Dapatkan update terbaru',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Selamat datang di halaman status baru anda :username!',
        'message' => 'Halaman status anda hampir siap! Anda masih perlu mengkonfigurasi beberapa pengaturan',
        'close'   => 'Terima kasih!',
        'steps'   => [
            'component'  => 'Buat komponen',
            'incident'   => 'Buat insiden',
            'customize'  => 'Kustomisasi',
            'team'       => 'Tambah user',
            'api'        => 'Buat token API',
            'two-factor' => 'Otentikasi Dua Faktor',
        ],
    ],

];
