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
            0 => 'ไม่ทราบสถานะ',
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
        'none'         => 'ไม่มีเหตุการณ์',
        'past'         => 'เหตุการณ์ที่ผ่านมา',
        'stickied'     => 'เหตุการณ์ที่ถูกปักหมุด',
        'scheduled'    => 'Maintenance',
        'scheduled_at' => ', กำหนดการ :timestamp',
        'posted'       => 'ผ่านไปแล้ว :timestamp',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => 'กำลังตรวจสอบ',
            2 => 'พบปัญหาแล้ว',
            3 => 'เฝ้าระวัง',
            4 => 'แก้ไขแล้ว',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'เร็วๆ นี้',
            1 => 'อยู่ระหว่างดำเนินการ',
            2 => 'เสร็จสมบูรณ์',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1]System operational|[2,*] All systems are operational',
        'bad'   => '[0,1]The system is experiencing issues|[2,*]Some systems are experiencing issues',
        'major' => '[0,1]The system is experiencing major issues|[2,*]Some systems are experiencing major issues',
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
        'subscribe'   => 'สมัครเพื่อติดตามข่าวสาร',
        'unsubscribe' => 'ยกเลิกการติดตาม :link',
        'button'      => 'ติดตาม',
        'manage'      => [
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
    'timezone'        => 'โซนเวลา :timezone',
    'about_this_site' => 'เกี่ยวกับเว็บไซต์นี้',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Feed สถานะ',

];
