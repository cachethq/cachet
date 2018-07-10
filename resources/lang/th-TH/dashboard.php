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

    'dashboard' => 'แดชบอร์ด',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidents &amp; Schedule',
        'incidents'                => 'เหตุการณ์',
        'logged'                   => '{0} เยี่ยมมาก ตอนนี้ยังไม่มีเหตุการณ์เกิดขึ้น| คุณได้บันทึกไป 1 เหตุการณ์| คุณได้รายงานไปแล้ว <strong>:count</strong> เหตุการณ์',
        'incident-create-template' => 'สร้างแม่แบบ',
        'incident-templates'       => 'แม่แบบของเหตุการณ์',
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
        'schedule'     => 'กำหนดการซ่อมบำรุง',
        'logged'       => '{0} ไม่มีกำหนดการอะไร ดีมาก | คุณมี 1 กำหนดการ | คุณมี <strong>: count</strong> กำหนดการ',
        'scheduled_at' => 'กำหนดเวลา :timestamp',
        'add'          => [
            'title'   => 'เพิ่มกำหนดการซ่อมบำรุง',
            'success' => 'เพิ่มกำหนดการแล้ว',
            'failure' => 'การเพิ่มกำหนดการเกิดข้อผิดพลาด โปรดลองอีกครั้ง',
        ],
        'edit' => [
            'title'   => 'แก้ไขกำหนดการซ่อมบำรุง',
            'success' => 'ปรับปรุงกำหนดการแล้ว',
            'failure' => 'ไม่สามารถแก้ไขกำหนดการได้ โปรดลองอีกครั้ง',
        ],
        'delete' => [
            'success' => 'กำหนดการถูกลบไปแล้ว และจะไม่แสดงในหน้าสถานะอีก',
            'failure' => 'ไม่สามารถลบกำหนดการได้ กรุณาลองใหม่อีกครั้ง',
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
        'subscribers'      => 'ผู้ติดตาม',
        'description'      => 'ผู้ติดตามจะได้รับอีเมลเมื่อมีการแจ้งเหตุการณ์หรือมีการปรับปรุงส่วนประกอบ',
        'verified'         => 'ยืนยันแล้ว',
        'not_verified'     => 'ยังไม่ได้ยืนยัน',
        'subscriber'       => ':email, ติดตามเมื่อ :date',
        'no_subscriptions' => 'ติดตามความเคลื่อนไหวทั้งหมด',
        'add'              => [
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
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
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
        'localization' => [
            'localization' => 'ภาษา',
        ],
        'customization' => [
            'customization' => 'การปรับแต่ง',
            'header'        => 'Custom Header HTML',
            'footer'        => 'Custom Footer HTML',
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
            'backers'       => 'If you\'d like to support future development, check out the CrowdIn and GitHub.',
            'thank-you'     => 'ขอบคุณผู้มีส่วนร่วมทั้ง :count คน',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'เข้าสู่ระบบ',
        'logged_in'  => 'คุณเข้าสู่ระบบแล้ว',
        'welcome'    => 'Welcome Back!',
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
        'news'             => 'ข่าวล่าสุด',
        'news_subtitle'    => 'รับการปรับปรุงล่าสุด',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your new Status page!',
        'message' => 'Your status page is almost ready! You might want to configure these extra settings',
        'close'   => 'Take me straight to my dashboard',
        'steps'   => [
            'component'  => 'Create components',
            'incident'   => 'Create incidents',
            'customize'  => 'Customize',
            'team'       => 'Add users',
            'api'        => 'Generate API token',
            'two-factor' => 'Two Factor Authentication',
        ],
    ],

];
