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
    'component' => [
        'status_update' => [
            'mail' => [
                'subject'  => 'Status Komponen Telah Diperbarui',
                'greeting' => 'Sebuah status komponen telah diperbarui!',
                'content'  => 'Status :name telah berubah dari :old_status ke :new_status.',
                'action'   => 'Lihat',
            ],
            'slack' => [
                'title'   => 'Status Komponen Telah Diperbarui',
                'content' => 'Status :name telah berubah dari :old_status ke :new_status.',
            ],
            'sms' => [
                'content' => 'Status :name telah berubah dari :old_status ke :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject'  => 'Insiden baru telah dilaporkan',
                'greeting' => 'Sebuah insiden baru dilaporkan di :app_name.',
                'content'  => 'Insiden :name dilaporkan',
                'action'   => 'Lihat',
            ],
            'slack' => [
                'title'   => 'Insiden :name Dilaporkan',
                'content' => 'Sebuah insiden baru dilaporkan di :app_name',
            ],
            'sms' => [
                'content' => 'Sebuah insiden baru dilaporkan di :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Insiden Diperbarui',
                'content' => ':name telah diperbarui',
                'title'   => ':name telah diperbarui menjadi :new_status',
                'action'  => 'Lihat',
            ],
            'slack' => [
                'title'   => ':name Diperbarui',
                'content' => ':name telah diperbarui menjadi :new_status',
            ],
            'sms' => [
                'content' => 'Insiden :name telah diperbarui',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Jadwal Baru Sudah Dibuat',
                'content' => ':name dijadwalkan pada :date',
                'title'   => 'Pemeliharaan terjadwal baru telah dibuat.',
                'action'  => 'Lihat',
            ],
            'slack' => [
                'title'   => 'Jadwal Baru Sudah Dibuat!',
                'content' => ':name dijadwalkan pada :date',
            ],
            'sms' => [
                'content' => ':name dijadwalkan pada :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Verifikasi Langganan Anda',
                'content' => 'Klik untuk memverifikasi langganan Anda ke halaman status :app_name.',
                'title'   => 'Verifikasi langganan Anda ke status halaman :app_name.',
                'action'  => 'Verifikasi',
            ],
        ],
        'manage' => [
            'mail' => [
                'subject' => 'Manage Your Subscription',
                'content' => 'Click to manage your subscription to :app_name status page.',
                'title'   => 'Click to manage your subscription to :app_name status page.',
                'action'  => 'Manage subscription',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping dari Cachet!',
                'content' => 'Ini adalah test notifikasi dari Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Undangan kamu ada di dalamnya...',
                'content' => 'Anda diundang untuk bergabung dalam halaman status :app_name.',
                'title'   => 'Anda diundang untuk bergabung halaman status :app_name.',
                'action'  => 'Terima',
            ],
        ],
    ],
];
