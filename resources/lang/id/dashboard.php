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
            'success' => 'Incident added.',
            'failure' => 'There was an error adding the incident, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit insiden',
            'success' => 'Insiden sudah diperbarui.',
            'failure' => 'There was an error editing the incident, please try again.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted, please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Template Insiden',
            'add'   => [
                'title'   => 'Buat template insiden',
                'message' => 'You should add an incident template.',
                'success' => 'Your new incident template has been created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
                'success' => 'The incident template has been updated.',
                'failure' => 'Something went wrong updating the incident template',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted, please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Jadwal Pemeliharaan',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Dijadwalkan pada :timestamp',
        'add'          => [
            'title'   => 'Add Scheduled Maintenance',
            'success' => 'Schedule added.',
            'failure' => 'Something went wrong adding the schedule, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit Scheduled Maintenance',
            'success' => 'Schedule has been updated!',
            'failure' => 'Something went wrong editing the schedule, please try again.',
        ],
        'delete' => [
            'success' => 'The scheduled maintenance has been deleted and will not show on your status page.',
            'failure' => 'The scheduled maintenance could not be deleted, please try again.',
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
            'success' => 'Component created.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit komponen',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Grup komponen|Grup komponen',
            'no_components' => 'Anda perlu menambahkan grup komponen.',
            'add'           => [
                'title'   => 'Tambahkan grup komponen',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'edit' => [
                'title'   => 'Edit grup komponen',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'delete' => [
                'success' => 'Component group has been deleted!',
                'failure' => 'The component group could not be deleted, please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrik',
        'add'     => [
            'title'   => 'Buat metrik',
            'message' => 'You should add a metric.',
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit metrik',
            'success' => 'Metric updated.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted, please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Berlangganan',
        'description'      => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'verified'         => 'Terverifikasi',
        'not_verified'     => 'Belum Diverifikasi',
        'subscriber'       => ':email, subscribed :date',
        'no_subscriptions' => 'Subscribed to all updates',
        'add'              => [
            'title'   => 'Tambah Pelanggan Baru',
            'success' => 'Pelanggan sudah ditambahkan.',
            'failure' => 'Something went wrong adding the subscriber, please try again.',
            'help'    => 'Enter each subscriber on a new line.',
        ],
        'edit' => [
            'title'   => 'Perbarui Pelanggan',
            'success' => 'Pelanggan sudah diupdate.',
            'failure' => 'Something went wrong editing the subscriber, please try again.',
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
            'success' => 'Team member added.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'edit' => [
            'title'   => 'Perbarui profil',
            'success' => 'Profile updated.',
            'failure' => 'Something went wrong updating the profile, please try again.',
        ],
        'delete' => [
            'success' => 'Pengguna sudah dihapus.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'invite' => [
            'title'   => 'Undang Anggota Tim Baru',
            'success' => 'Pengguna sudah diundang.',
            'failure' => 'The invite could not be sent, please try again.',
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
        'customization' => [
            'customization' => 'Customization',
            'header'        => 'Custom Header HTML',
            'footer'        => 'Custom Footer HTML',
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
            'credits'       => 'Credits',
            'contributors'  => 'Contributors',
            'license'       => 'Cachet is a BSD-3-licensed open source project, released by <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Backers & Sponsors',
            'backers'       => 'If you\'d like to support future development, check out the CrowdIn and GitHub.',
            'thank-you'     => 'Thank you to each and every one of the :count contributors.',
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
        'news'             => 'Latest News',
        'news_subtitle'    => 'Get the latest updates',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your new status page!',
        'message' => 'Halaman status anda hampir siap! Anda masih perlu mengkonfigurasi beberapa pengaturan',
        'close'   => 'Take me straight to my dashboard',
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
