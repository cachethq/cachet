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
                'greeting' => 'Status sebuah komponen telah diperbarui!',
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
                'title'   => 'Insiden: nama Dilaporkan',
                'content' => 'Sebuah insiden baru dilaporkan di: applikasi_nama',
            ],
            'sms' => [
                'content' => 'Sebuah insiden baru dilaporkan di :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => 'Insiden Diperbarui',
                'content' => ':nama telah diperbarui',
                'title'   => ':nama telah diperbarui ke :baru_status',
                'action'  => 'Lihat',
            ],
            'slack' => [
                'title'   => ':nama Diperbarui',
                'content' => ':nama telah diperbarui ke :baru_status',
            ],
            'sms' => [
                'content' => 'Insiden: nama telah diperbarui',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Jadwal Baru Dibuat',
                'content' => ':nama dijadwalkan untuk :tanggal',
                'title'   => 'Pemeliharaan terjadwal baru telah dibuat.',
                'action'  => 'Lihat',
            ],
            'slack' => [
                'title'   => 'Jadwal Baru Dibuat!',
                'content' => ':nama dijadwalkan untuk :tanggal',
            ],
            'sms' => [
                'content' => ':nama dijadwalkan untuk :tanggal',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Verifikasi Langganan Anda',
                'content' => 'Klik untuk memverifikasi langganan Anda ke :halaman status aplikasi_nama.',
                'title'   => 'Verifikasi langganan Anda ke :halaman status aplikasi_nama.',
                'action'  => 'Memeriksa',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping dari Cachet!',
                'content' => 'Ini adalah pemberitahuan pengujian dari Cachet!',
                'title'   => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Undangan kamu ada di dalamnya...',
                'content' => 'Anda telah diundang untuk bergabung :halaman status aplikasi_nama.',
                'title'   => 'Anda diundang untuk bergabung: halaman status aplikasi_nama.',
                'action'  => 'Diterima',
            ],
        ],
    ],
];
