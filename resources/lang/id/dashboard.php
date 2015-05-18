<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
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

        // Incident templates
        'templates' => [
            'title' => 'Template Insiden',
            'add'   => [
                'title'   => 'Buat template insiden',
                'success' => 'Template sudah dibuat.',
                'failure' => 'Ada masalah dengan template insiden ini.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
                'success' => 'Template sudah diperbarui!',
                'failure' => 'Ada masalah dengan template insiden ini',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Jadwal Pemeliharaan',
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
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrik',
        'add'     => [
            'title'   => 'Buat metrik',
            'success' => 'Metrik sudah dibuat.',
            'failure' => 'Ada masalah dengan metrik ini.',
        ],
        'edit' => [
            'title'   => 'Edit metrik',
            'success' => 'Metrik sudah diperbarui.',
            'failure' => 'Ada masalah dengan metrik ini.',
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
        'edit'        => [
            'title'   => 'Perbarui profil',
            'success' => 'Profil sudah diperbarui.',
            'failure' => 'Ada masalah saat memperbarui.',
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
        'login'      => 'Login',
        'logged_in'  => 'Anda sudah login.',
        'welcome'    => 'Halo!',
        'two-factor' => 'Silakan masukkan token anda.',
    ],

    // Sidebar footer
    'help'        => 'Panduan',
    'status_page' => 'Halaman Status',
    'logout'      => 'Logout',

    // Notifications
    'notifications'     => [
        'notifications' => 'Notifikasi',
        'awesome'       => 'Keren.',
        'whoops'        => 'Waduh.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Selamat Datang di Cachet',
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
