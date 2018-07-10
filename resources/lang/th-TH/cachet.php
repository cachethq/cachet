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
        'last_updated' => 'ปรับปรุงล่าสุด :timestamp',
        'status'       => [
            1 => 'สามารถใช้งานได้',
            2 => 'ปัญหาด้านประสิทธิภาพ',
            3 => 'มีปัญหาบางส่วน',
            4 => 'ไม่สามารถทำงานได้',
        ],
        'group' => [
            'other' => 'ส่วนประกอบอื่นๆ',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'ไม่มีเหตุการณ์',
        'past'          => 'เหตุการณ์ที่ผ่านมา',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => 'กำหนดการซ่อมบำรุง',
        'scheduled_at'  => ', กำหนดการ :timestamp',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
            1 => 'กำลังตรวจสอบ',
            2 => 'พบปัญหาแล้ว',
            3 => 'เฝ้าระวัง',
            4 => 'แก้ไขแล้ว',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] ระบบทำงานปกติ|[2,Inf] ระบบทั้งหมดทำงานได้ปกติ',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'สร้าง API Key ใหม่',
        'revoke'     => 'เพิกถอน API Key',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'ชั่วโมงที่แล้ว',
            'hourly'    => '12 ชั่วโมงที่ผ่านมา',
            'weekly'    => 'สัปดาห์',
            'monthly'   => 'เดือน',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'ติดตาม',
        'manage'    => [
            'no_subscriptions' => 'คุณติตตามทั้งหมดแล้ว',
            'my_subscriptions' => 'คุณติดตามข่าวสารเหล่านี้',
        ],
        'email' => [
            'subscribe'          => 'ติดตามข่าวสารทาง email',
            'subscribed'         => 'คุณได้สมัครรับการแจ้งเตือนทางอีเมล กรุณาตรวจอีเมลของคุณเพื่อยืนยันการสมัคร',
            'verified'           => 'ได้ยืนยันการติดตามทางอีเมลของคุณแล้ว ขอบคุณ!',
            'manage'             => 'จัดการการติดตามของคุณ',
            'unsubscribe'        => 'ยกเลิกการแจ้งเตือนทางอีเมล',
            'unsubscribed'       => 'ยกเลิกแจ้งเตือนทางอีเมลของคุณแล้ว',
            'failure'            => 'เกิดข้อผิดพลาดในการสมัครรับข่าวสาร',
            'already-subscribed' => 'ไม่สามารถสมัครด้วย :email เนื่องจากถูกใช้ไปแล้ว',
            'verify'             => [
                'text'   => "กรุณายืนยันการติดตามสถานะของ :app_name\n:link",
                'html'   => '<p>กรุณายืนยันการติดตามสถานะของ :app_name ทางอีเมลของคุณ</p>',
                'button' => 'ยืนยัน',
            ],
            'maintenance' => [
                'subject' => '[กำหนดการซ่อมบำรุง] :name',
            ],
            'incident' => [
                'subject' => '[เหตุการณ์ใหม่] :status: :name',
            ],
            'component' => [
                'subject'       => 'สถานะของส่วนประกอบมีการเปลี่ยนแปลง',
                'text'          => 'สถานะของ :component_name มีการเปลี่ยนแปลง. ขณะนี้มีสถานะ :component_human_status.\nขอบคุณ, :app_name',
                'html'          => '<p>ส่วนประกอบ :component_name มีการเปลี่ยนแปลงสถานะ  สถานะปัจจุบันคือ :component_human_status.</p><p>ขอบคุณ, :app_name</p>',
                'tooltip-title' => 'สมัครรับแจ้งเตือนเกี่ยวกับ :component_name',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "คุณได้รับเชิญให้เป็นส่วนหนึ่งกับหน้าแสดงสถานะของ :app_name ตามลิงค์ต่อไปนี้เพื่อเข้าร่วม\n:link\nขอขอบคุณ จากทีมงาน :app_name",
                'html' => '<p>คุณได้รับเชิญให้เป็นส่วนหนึ่งกับหน้าแสดงสถานะของ :app_name  ตามลิงค์ต่อไปนี้เพื่อเข้าร่วม</p><p><a href=":link">:link</a></p><p>ขอขอบคุณ จากทีมงาน :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'สมัครสมาชิก',
        'username' => 'ชื่อผู้ใช้',
        'email'    => 'อีเมล',
        'password' => 'รหัสผ่าน',
        'success'  => 'บัญชีของคุณได้สร้างเรียบร้อยแล้ว',
        'failure'  => 'การลงทะเบียนมีบางอย่างผิดปกติ',
    ],

    'system' => [
        'update' => 'Cachet มีเวอร์ชั่นใหม่แล้วนะ คุณสามารถศึกษาวิธีอัพเดทได้ <a href="https://docs.cachethq.io/docs/updating-cachet">ที่นี้</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'ปิด',
        'subscribe' => [
            'title'  => 'ติดตามสถานะของส่วนประกอบ',
            'body'   => 'กรอกอีเมลเพื่อเพื่อติดตามรับข่าวสารของส่วนประกอบ ถ้าคุณติดตามแล้ว คุณจะได้รับอีเมลจากส่วนประกอบนี้',
            'button' => 'ติดตาม',
        ],
    ],

    // Other
    'home'            => 'หน้าหลัก',
    'description'     => 'ติดตามความเคลื่อนไหวล่าสุดของ :app',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'เกี่ยวกับเว็บไซต์นี้',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Feed สถานะ',

];
