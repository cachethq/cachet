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

    'dashboard'          => 'แดชบอร์ด',
    'writeable_settings' => 'ไดเรกทอรีการตั้งค่าของ cachet ไม่สามารถเขียนค่าได้ โปรดตรวจสอบให้แน่ใจว่าภายใน <code>./bootstrap/cachet</code> สามารถเขียนค่าจากเว็บเซิร์ฟเวอร์ของท่านได้',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidents & Maintenance',
        'incidents'                => 'เหตุการณ์',
        'logged'                   => '{0} There are no incidents, good work.|[1] You have logged one incident.|[2,*] You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'สร้างแม่แบบ',
        'incident-templates'       => 'แม่แบบของเหตุการณ์',
        'updates'                  => [
            'title'   => 'Incident updates for :incident',
            'count'   => '{0} Zero Updates|[1] One Update|[2] Two Updates|[3,*] Several Updates',
            'add'     => [
                'title'   => 'สร้างการปรับปรุงเหตุการณ์ใหม่',
                'success' => 'Your new incident update has been created.',
                'failure' => 'Something went wrong with the incident update.',
            ],
            'edit' => [
                'title'   => 'Edit incident update',
                'success' => 'The incident update has been updated.',
                'failure' => 'Something went wrong updating the incident update',
            ],
        ],
        'add'                      => [
            'title'   => 'รายงานเหตุการณ์',
            'success' => 'เพิ่มเหตุการณ์แล้ว',
            'failure' => 'พอข้อผิดพลาดตอนเพิ่มเหตุการณ์ กรุณาลองใหม่อีกครั้ง',
        ],
        'edit' => [
            'title'   => 'แก้ไขเหตุการณ์',
            'success' => 'เหตุการณ์ได้ปรับปรุงแล้ว',
            'failure' => 'พอข้อผิดพลาดตอนแก้ไขเหตุการณ์ กรุณาลองใหม่อีกครั้ง',
        ],
        'delete' => [
            'success' => 'เหตุการณ์ถูกลบไปแล้ว และจะไม่แสดงในหน้าสถานะอีก',
            'failure' => 'เหตุการณ์นี้ไม่สามารถลบได้ กรุณาลองอีกครั้ง',
        ],

        // Incident templates
        'templates' => [
            'title' => 'แม่แบบของเหตุการณ์',
            'add'   => [
                'title'   => 'สร้างแม่แบบของเหตุการณ์',
                'message' => 'คุณควรเพิ่มแม่แบบของเหตุการณ์',
                'success' => 'สร้างแม่แบบของเหตุการณ์แล้ว',
                'failure' => 'ไม่สามารถสร้างแม่แบบของเหตุการณ์ได้',
            ],
            'edit' => [
                'title'   => 'แก้ไขแม่แบบ',
                'success' => 'ปรับปรุงแม่แบบของเหตุการณ์แล้ว',
                'failure' => 'ไม่สามารถแก้ไขแม่แบบของเหตุการณ์ได้',
            ],
            'delete' => [
                'success' => 'ลบแม่แบบของของเหตุการณ์แล้ว',
                'failure' => 'ไม่สามารถลบแม่แบบของเหตุการณ์ได้ โปรดลองอีกครั้ง',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Maintenance',
        'logged'       => '{0} There has been no Maintenance, good work.|[1] You have logged one schedule.|[2,*] You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'กำหนดเวลา :timestamp',
        'add'          => [
            'title'   => 'Add Maintenance',
            'success' => 'Maintenance added.',
            'failure' => 'Something went wrong adding the Maintenance, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit Maintenance',
            'success' => 'Maintenance has been updated!',
            'failure' => 'Something went wrong editing the Maintenance, please try again.',
        ],
        'delete' => [
            'success' => 'The Maintenance has been deleted and will not show on your status page.',
            'failure' => 'The Maintenance could not be deleted, please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'ส่วนประกอบ',
        'component_statuses' => 'สถานะของส่วนประกอบ',
        'listed_group'       => 'กลุ่ม :name',
        'add'                => [
            'title'   => 'เพิ่มส่วนประกอบ',
            'message' => 'คุณควรเพิ่มส่วนประกอบ',
            'success' => 'สร้างส่วนประกอบแล้ว',
            'failure' => 'ไม่สามารถสร้างส่วนประกอบได้ โปรดลองอีกครั้ง',
        ],
        'edit' => [
            'title'   => 'แก้ไขส่วนประกอบ',
            'success' => 'ปรับปรุงส่วนประกอบแล้ว',
            'failure' => 'ไม่สามารถสร้างส่วนประกอบได้ โปรดลองอีกครั้ง',
        ],
        'delete' => [
            'success' => 'ส่วนประกอบถูกลบแล้ว',
            'failure' => 'ไม่สามารถลบส่วนประกอบได้ โปรดลองอีกครั้ง',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'กลุ่มส่วนประกอบ | กลุ่มส่วนประกอบ',
            'no_components' => 'คุณควรเพิ่มกลุ่มส่วนประกอบ',
            'add'           => [
                'title'   => 'เพิ่มกลุ่มส่วนประกอบ',
                'success' => 'เพิ่มกลุ่มส่วนประกอบแล้ว',
                'failure' => 'ไม่สามารถสร้างส่วนประกอบได้ โปรดลองอีกครั้ง',
            ],
            'edit' => [
                'title'   => 'แก้ไขกลุ่มส่วนประกอบ',
                'success' => 'ปรับปรุงกลุ่มส่วนประกอบแล้ว',
                'failure' => 'ไม่สามารถสร้างส่วนประกอบได้ โปรดลองอีกครั้ง',
            ],
            'delete' => [
                'success' => 'กลุ่มส่วนประกอบถูกลบแล้ว',
                'failure' => 'ไม่สามารถลบกลุ่มส่วนประกอบได้ โปรดลองอีกครั้ง',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'ตัวชี้วัด',
        'add'     => [
            'title'   => 'สร้างตัวชี้วัด',
            'message' => 'คุณควรเพิ่มตัวชี้วัด',
            'success' => 'สร้างตัวชี้วัดแล้ว',
            'failure' => 'ไม่สามารถสร้างตัวชี้วัดได้ โปรดลองอีกครั้ง',
        ],
        'edit' => [
            'title'   => 'แก้ไขตัวชี้วัด',
            'success' => 'ปรับปรุงตัวชี้วัดแล้ว',
            'failure' => 'ไม่สามารถสร้างตัวชี้วัดได้ โปรดลองอีกครั้ง',
        ],
        'delete' => [
            'success' => 'ตัวชี้วัดได้ถูกลบแล้ว และจะไม่แสดงในหน้าสถานะอีก',
            'failure' => 'ไม่สามารถลบตัวชี้วัดได้ โปรดลองอีกครั้ง',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'          => 'ผู้ติดตาม',
        'description'          => 'ผู้ติดตามจะได้รับอีเมลเมื่อมีการแจ้งเหตุการณ์หรือมีการปรับปรุงส่วนประกอบ',
        'description_disabled' => 'To use this feature, you need allow people to signup for notifications.',
        'verified'             => 'ยืนยันแล้ว',
        'not_verified'         => 'ยังไม่ได้ยืนยัน',
        'subscriber'           => ':email, ติดตามเมื่อ :date',
        'no_subscriptions'     => 'ติดตามความเคลื่อนไหวทั้งหมด',
        'global'               => 'Globally subscribed',
        'add'                  => [
            'title'   => 'เพิ่มผู้ติดตามใหม่',
            'success' => 'เพิ่มผู้ติดตามแล้ว',
            'failure' => 'ไม่สามารถเพิ่มผู้ติดตามได้ กรุณาลองอีกครั้ง',
            'help'    => 'ป้อนผู้ติดตามแต่ละคนบนบรรทัดใหม่',
        ],
        'edit' => [
            'title'   => 'ปรับปรุงผู้ติดตาม',
            'success' => 'ปรับปรุงข้อมูลผู้ติดตามแล้ว!',
            'failure' => 'ไม่สามารถแก้ไขผู้ติดตามได้ กรุณาลองอีกครั้ง',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'ทีม',
        'member'      => 'สมาชิก',
        'profile'     => 'โปรไฟล์',
        'description' => 'สมาชิกในทีมจะสามารถเพิ่ม แก้ไข และแก้ไขเหตุการณ์และส่วนประกอบ',
        'add'         => [
            'title'   => 'เพิ่มสมาชิกทีมใหม่',
            'success' => 'เพิ่มสมาชิกในทีมเรียบร้อยแล้ว',
            'failure' => 'ไม่สามารถเพิ่มสมาชิกทีมได้ กรุณาลองอีกครั้ง',
        ],
        'edit' => [
            'title'   => 'อัพเดตโปรไฟล์',
            'success' => 'ปรับปรุงโปรไฟล์แล้ว',
            'failure' => 'ไม่สามารถปรับปรุงโปรไฟล์ได้ โปรดลองอีกครั้ง',
        ],
        'delete' => [
            'success' => 'สมาชิกในทีมได้ถูกลบออก และจะไม่สามารถเข้าถึงแดชบอร์ได้อีกต่อไป!',
            'failure' => 'ไม่สามารถเพิ่มสมาชิกทีมได้ กรุณาลองอีกครั้ง',
        ],
        'invite' => [
            'title'   => 'เชิญสมาชิกใหม่เข้าทีม',
            'success' => 'คำเชิญถูกส่งไปแล้ว',
            'failure' => 'ไม่สามารถส่งคำเชิญได้ โปรดลองอีกครั้ง',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'ตั้งค่า',
        'app-setup' => [
            'app-setup'   => 'ตั้งค่าแอปพลิเคชัน',
            'images-only' => 'อัพโหลดรูปภาพเท่านั้น',
            'too-big'     => 'ไฟล์คุณอัปโหลดมีขนาดใหญ่เกินไป อัพโหลดรูปภาพขนาดเล็กกว่า :size',
        ],
        'analytics' => [
            'analytics' => 'วิเคราะห์',
        ],
        'log' => [
            'log' => 'บันทึก',
        ],
        'localization' => [
            'localization' => 'ภาษา',
        ],
        'customization' => [
            'customization' => 'การปรับแต่ง',
            'header'        => 'Custom Header HTML',
            'footer'        => 'Custom Footer HTML',
        ],
        'mail' => [
            'mail'  => 'Mail',
            'test'  => 'ทดสอบ',
            'email' => [
                'subject' => 'ทดสอบการแจ้งเตือนจาก Cachet',
                'body'    => 'นี้คือเมลทดสอบการแจ้งเตือนจาก Cachet',
            ],
        ],
        'security' => [
            'security'   => 'ความปลอดภัย',
            'two-factor' => 'ผู้ใช้ที่ไม่ใช้การยีนยันตัวตนสองชั้น',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Theme',
        ],
        'edit' => [
            'success' => 'บันทึกการตั้งค่าแล้ว!',
            'failure' => 'ไม่สามารถบันทึกการตั้งค่าได้',
        ],
        'credits' => [
            'credits'       => 'Credits',
            'contributors'  => 'ผู้ร่วมพัฒนา',
            'license'       => 'Cachet เป็นโครงการ open source สัญญาอนุญาต BSD-3, เผยแพร่โดย <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'ผู้อยู่เบื้องหลังและผู้สนับสนุน',
            'backers'       => 'ถ้าคุณต้องการสนับสนุนการพัฒนาในอนาคต เข้าร่วมแคมเปญ <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon </a>',
            'thank-you'     => 'ขอบคุณผู้มีส่วนร่วมทั้ง :count คน',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'เข้าสู่ระบบ',
        'logged_in'  => 'คุณเข้าสู่ระบบแล้ว',
        'welcome'    => 'ยินดีต้อนรับกลับมา!',
        'two-factor' => 'กรุณากรอก Token ของคุณ',
    ],

    // Sidebar footer
    'help'        => 'ช่วยเหลือ',
    'status_page' => 'หน้าสถานะ',
    'logout'      => 'ออกจากระบบ',

    // Notifications
    'notifications' => [
        'notifications' => 'การแจ้งเตือน',
        'awesome'       => 'สุดยอด',
        'whoops'        => 'ขออภัย',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'สนับสนุน Cachet',
        'support_subtitle' => 'ตรวจสอบหน้าเว็บ <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> ของเรา',
        'news'             => 'ข่าวล่าสุด',
        'news_subtitle'    => 'รับการปรับปรุงล่าสุด',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'ยินดีต้อนรับสู่หน้าสถานะใหม่ของคุณ :username!',
        'message' => 'คุณเกือบจะพร้อมแล้ว แต่คุณอาจจะต้องการตั้งค่าเพิ่มเติมเหล่านี้...',
        'close'   => 'ฉันสบายดี ขอบคุณ!',
        'steps'   => [
            'component'  => 'เพิ่มส่วนประกอบของคุณ',
            'incident'   => 'รายงานเหตุการณ์',
            'customize'  => 'ปรับแต่งหน้าเว็บของคุณ',
            'team'       => 'เพิ่มทีมของคุณ',
            'api'        => 'สร้าง API Token',
            'two-factor' => 'ใช้งานการยีนยันตัวตนสองชั้น',
        ],
    ],

];
