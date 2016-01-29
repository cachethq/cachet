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

    'dashboard' => 'Dashboard',

    // Incidents
    'incidents' => [
        'title'                    => 'Insiden &amp; Penjadwalan',
        'incidents'                => 'Insiden',
        'logged'                   => '{0} Tidak ada insiden, bagus.|Anda mencatat satu insiden.|Anda sudah melaporkan <strong>:count</strong> insiden.',
        'incident-create-template' => 'Buat Template',
        'incident-templates'       => 'Template Insiden',
        'add'                      => [
            'title'   => 'Tambahkan Insiden',
            'success' => 'Insiden sudah ditambahkan.',
            'failure' => 'Ada masalah dengan insiden ini.',
        ],
        'edit' => [
            'title'   => 'Edit insiden',
            'success' => 'Insiden sudah diperbarui.',
            'failure' => 'Ada masalah dengan insiden ini.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted. Please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Template Insiden',
            'add'   => [
                'title'   => 'Buat template insiden',
                'message' => 'You should add an Incident Template.',
                'success' => 'Template sudah dibuat.',
                'failure' => 'Ada masalah dengan template insiden ini.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
                'success' => 'Template sudah diperbarui!',
                'failure' => 'Ada masalah dengan template insiden ini',
            ],
            'delete' => [
                'success' => 'The tmplate has been deleted.',
                'failure' => 'The template could not be deleted. Please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Jadwal Pemeliharaan',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Dijadwalkan pada :timestamp',
        'add'          => [
            'title'   => 'Tambahkan Jadwal Pemeliharaan',
            'success' => 'Jadwal sudah ditambahkan.',
            'failure' => 'Ada masalah saat membuat jadwal.',
        ],
        'edit' => [
            'title'   => 'Edit Jadwal Pemeliharaan',
            'success' => 'Jadwal sudah diperbarui!',
            'failure' => 'Ada masalah saat mengedit jadwal.',
        ],
        'delete' => [
            'success' => 'Jadwal ini sudah dihapus dan tidak akan ditampilkan di halaman status anda.',
            'failure' => 'Jadwal tidak bisa dihapus. Silakan coba lagi.',
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
            'failure' => 'Ada masalah dengan komponen ini.',
        ],
        'edit' => [
            'title'   => 'Edit komponen',
            'success' => 'Komponen sudah diperbarui.',
            'failure' => 'Ada masalah dengan komponen ini.',
        ],
        'delete' => [
            'success' => 'Component deleted.',
            'failure' => 'The Component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grup komponen|Grup komponen',
            'no_components' => 'Anda perlu menambahkan grup komponen.',
            'add'           => [
                'title'   => 'Tambahkan grup komponen',
                'success' => 'Grup komponen sudah ditambahkan.',
                'failure' => 'Ada masalah dengan grup komponen ini.',
            ],
            'edit' => [
                'title'   => 'Edit grup komponen',
                'success' => 'Grup komponen sudah diperbarui.',
                'failure' => 'Ada masalah dengan grup komponen ini.',
            ],
            'delete' => [
                'success' => 'Component Group deleted.',
                'failure' => 'The Component Group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrik',
        'add'     => [
            'title'   => 'Buat metrik',
            'message' => 'You should add a Metric.',
            'success' => 'Metrik sudah dibuat.',
            'failure' => 'Ada masalah dengan metrik ini.',
        ],
        'edit' => [
            'title'   => 'Edit metrik',
            'success' => 'Metrik sudah diperbarui.',
            'failure' => 'Ada masalah dengan metrik ini.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will not show on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Berlangganan',
        'description'  => 'Pelanggan email akan menerima update ketika insiden dibuat.',
        'verified'     => 'Terverifikasi',
        'not_verified' => 'Belum Diverifikasi',
        'add'          => [
            'title'   => 'Tambah Pelanggan Baru',
            'success' => 'Pelanggan sudah ditambahkan.',
            'failure' => 'Ada masalah dengan komponen ini.',
        ],
        'edit' => [
            'title'   => 'Perbarui Pelanggan',
            'success' => 'Pelanggan sudah diupdate.',
            'failure' => 'Ada masalah saat memperbarui.',
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
            'failure' => 'Ada masalah dengan komponen ini.',
        ],
        'edit' => [
            'title'   => 'Perbarui profil',
            'success' => 'Profil sudah diperbarui.',
            'failure' => 'Ada masalah saat memperbarui.',
        ],
        'delete' => [
            'success' => 'Pengguna sudah dihapus.',
            'failure' => 'Ada yang tidak beres saat menghapus pengguna ini.',
        ],
        'invite' => [
            'title'   => 'Undang Anggota Tim Baru',
            'success' => 'Pengguna sudah diundang.',
            'failure' => 'Ada masalah dengan sistem undangan.',
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
        'localization' => [
            'localization' => 'Localization',
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

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your status page!',
        'message' => 'Halaman status anda hampir siap! Anda masih perlu mengkonfigurasi beberapa pengaturan',
        'close'   => 'Langsung ke dashboard saja',
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
