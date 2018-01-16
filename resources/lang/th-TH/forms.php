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

    // Setup form fields
    'setup' => [
        'email'            => 'อีเมล',
        'username'         => 'ชื่อผู้ใช้',
        'password'         => 'รหัสผ่าน',
        'site_name'        => 'ชื่อเว็บไซต์',
        'site_domain'      => 'โดเมนของเว็บไซต์',
        'site_timezone'    => 'กรุณาเลือกเขตเวลาของคุณ',
        'site_locale'      => 'เลือกภาษาของคุณ',
        'enable_google2fa' => 'เปิดใช้งานการยืนยันสองขั้นตอนจาก Google',
        'cache_driver'     => 'แคชไดร์เวอร์',
        'queue_driver'     => 'คิวไดร์เวอร์',
        'session_driver'   => 'เซสชันไดร์เวอร์',
        'mail_driver'      => 'เมลไดร์เวอร์',
        'mail_host'        => 'เมลโฮสต์',
        'mail_address'     => 'เมลจาก',
        'mail_username'    => 'ชื่อผู้ใช้อีเมล',
        'mail_password'    => 'รหัสผ่านอีเมล',
    ],

    // Login form fields
    'login' => [
        'login'         => 'ชื่อผู้ใช้หรืออีเมล',
        'email'         => 'อีเมล',
        'password'      => 'รหัสผ่าน',
        '2fauth'        => 'รหัสรับรองความถูกต้อง',
        'invalid'       => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง',
        'invalid-token' => 'Token ไม่ถูกต้อง',
        'cookies'       => 'คุณต้องเปิดใช้คุกกี้ในการเข้าสู่ระบบ',
        'rate-limit'    => 'เกินขีดจำกัดแล้ว',
        'remember_me'   => 'จำการเข้าระบบของฉันไว้',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'ชื่อ',
        'status'             => 'สถานะ',
        'component'          => 'ส่วนประกอบ',
        'message'            => 'ข้อ​ความ',
        'message-help'       => 'นอกจากนี้คุณยังอาจเขียนในรูปแบบ Markdown',
        'occurred_at'        => 'เหตุการณ์นี้เกิดขึ้นเมื่อไหร่',
        'notify_subscribers' => 'แจ้งสมาชิก',
        'visibility'         => 'การมองเห็นเหตุการณ์',
        'stick_status'       => 'เหตุการณ์ปักหมุด',
        'stickied'           => 'ปักหมุดแล้ว',
        'not_stickied'       => 'ไม่ปักหมุด',
        'public'             => 'สามารถดูได้ โดยสาธารณะ',
        'logged_in_only'     => 'มองเห็นได้เฉพาะผู้ที่เข้าระบบ',
        'templates'          => [
            'name'     => 'ชื่อ',
            'template' => 'แม่แบบ',
            'twig'     => 'แม่แบบของเหตุการณ์สามารถใช้ภาษา <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> ได้',
        ],
    ],

    'schedules' => [
        'name'         => 'ชื่อ',
        'status'       => 'สถานะ',
        'message'      => 'ข้อ​ความ',
        'message-help' => 'นอกจากนี้คุณยังอาจเขียนในรูปแบบ Markdown',
        'scheduled_at' => 'การซ่อมบำรุงจะเกิดขึ้นเมื่อไหร่?',
        'completed_at' => 'การซ่อมบำรุงจะเสร็จเมื่อไหร่?',
        'templates'    => [
            'name'     => 'ชื่อ',
            'template' => 'แม่แบบ',
            'twig'     => 'แม่แบบของเหตุการณ์สามารถใช้ภาษา <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> ได้',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'ชื่อ',
        'status'      => 'สถานะ',
        'group'       => 'กลุ่ม',
        'description' => 'รายละเอียด',
        'link'        => 'ลิงก์',
        'tags'        => 'Tags',
        'tags-help'   => 'คั่นด้วยจุลภาค',
        'enabled'     => 'เปิดใช้งานส่วนประกอบ',

        'groups' => [
            'name'                     => 'ชื่อ',
            'collapsing'               => 'ตัวเลือก ขยาย/ยุบ',
            'visible'                  => 'ขยายเสมอ',
            'collapsed'                => 'ยุบกลุ่ม โดยค่าเริ่มต้น',
            'collapsed_incident'       => 'ยุบกลุ่ม แต่ขยายถ้ามีปัญหา',
            'visibility'               => 'การมองเห็น',
            'visibility_public'        => 'สามารถมองเห็นได้ในที่สาธารณะ',
            'visibility_authenticated' => 'มองเห็นได้เฉพาะผู้ใช้ที่เข้าสู่ระบบ',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'ชื่อ',
        'description'        => 'รายละเอียด',
        'start_at'           => 'เวลาเริ่มต้น',
        'timezone'           => 'เขตเวลา',
        'schedule_frequency' => 'ความถี่ของกำหนดการ (เป็นวินาที)',
        'completion_latency' => 'เวลาที่ใช้ (เป็นวินาที)',
        'group'              => 'กลุ่ม',
        'active'             => 'เปิดใช้งาน?',
        'groups'             => [
            'name' => 'ชื่อกลุ่ม',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'ชื่อ',
        'suffix'                   => 'คำต่อท้าย',
        'description'              => 'รายละเอียด',
        'description-help'         => 'นอกจากนี้คุณยังอาจเขียนในรูปแบบ Markdown',
        'display-chart'            => 'แสดงกราฟบนหน้าสถานะ',
        'default-value'            => 'ค่าเริ่มต้น',
        'calc_type'                => 'การคำนวณเมตริก',
        'type_sum'                 => 'ผลรวม',
        'type_avg'                 => 'ค่าเฉลี่ย',
        'places'                   => 'ตำแหน่งทศนิยม',
        'default_view'             => 'มุมมองเริ่มต้น',
        'threshold'                => 'ระยะเวลาระหว่างตัวชี้วัดกี่นาที?',
        'visibility'               => 'การมองเห็น',
        'visibility_authenticated' => 'ผู้ใช้ที่ยืนยันตัวแล้วมองเห็นได้',
        'visibility_public'        => 'ให้ทุกคนมองเห็นได้',
        'visibility_hidden'        => 'ซ่อนเสมอ',

        'points' => [
            'value' => 'ค่า',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                    => 'ชื่อเว็บไซต์',
            'site-url'                     => 'URL เว็บไซต์',
            'display-graphs'               => 'แสดงกราฟในหน้าสถานะหรือไม่',
            'about-this-page'              => 'เกี่ยวกับหน้านี้',
            'days-of-incidents'            => 'แสดงวันที่มีเหตุการณ์เกิดขึ้นกี่วัน?',
            'time_before_refresh'          => 'Status page refresh rate (in seconds).',
            'banner'                       => 'ภาพแบนเนอร์',
            'banner-help'                  => "ขอแนะนำให้อัปโหลดไฟล์ที่ความกว้างไม่เกิน 930px",
            'subscribers'                  => 'เปิดให้ทุกคนสามารถลงทะเบียนรับอีเมลแจ้งเตือน?',
            'skip_subscriber_verification' => 'ข้ามการยืนยันตันตนผู้ใช้ (ระวัง! คุณอาจถูกสแปม)',
            'automatic_localization'       => 'เปลี่ยนภาษาของหน้าสถานะตามภาษาของผู้เข้าชมอัตโนมัติ',
            'enable_external_dependencies' => 'เปิดใช้งาน Third Party (Google Fonts, Trackers, ฯลฯ...)',
            'show_timezone'                => 'แสดงเขตเวลาที่หน้าสถานะกำลังใช้',
            'only_disrupted_days'          => 'แสดงเฉพาะวันที่มีเหตุการณ์บนไทม์ไลน์?',
        ],
        'analytics' => [
            'analytics_google'       => 'รหัส Google Analytics',
            'analytics_gosquared'    => 'รหัส GoSquared Analytics',
            'analytics_piwik_url'    => 'ค่า URL Piwik ของคุณ (without http(s)://)',
            'analytics_piwik_siteid' => 'รหัสไซต์ของ Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'เขตเวลา',
            'site-locale'          => 'ภาษา',
            'date-format'          => 'รูปแบบวันที่',
            'incident-date-format' => 'รูปแบบเวลาของเหตุการณ์',
        ],
        'security' => [
            'allowed-domains'      => 'โดเมนที่ได้รับอนุญาต',
            'allowed-domains-help' => 'คั่นด้วยจุลภาค โดเมนที่กำหนดข้างต้นจะสามารถเข้าได้อัตโนมัติ โดยค่าเริ่มต้น',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'สีพื้นหลัง',
            'background-fills'        => 'เติมพื้นหลัง (ส่วนประกอบ เหตุการณ์ ด่านล่างเว็บ)',
            'banner-background-color' => 'สีพื้นหลังของแบนเนอร์',
            'banner-padding'          => 'Padding ของแบนเนอร์',
            'fullwidth-banner'        => 'เปิดใช้งานการแบนเนอร์เต็มความกว้าง',
            'text-color'              => 'สีตัวอักษร',
            'dashboard-login'         => 'แสดงปุ่มแดชบอร์ดที่ด่านล่างของหน้าเว็บ',
            'reds'                    => 'สีแดง (ใช้สำหรับข้อผิดพลาด)',
            'blues'                   => 'สีฟ้า (ใช้สำหรับข้อมูล)',
            'greens'                  => 'สีเขียว (ใช้สำหรับความสำเร็จ)',
            'yellows'                 => 'สีเหลือง (ใช้สำหรับแจ้งเตือน)',
            'oranges'                 => 'สีส้ม (ใช้สำหรับประกาศ)',
            'metrics'                 => 'ระบุตัวชี้วัด',
            'links'                   => 'การเชื่อมโยง',
        ],
    ],

    'user' => [
        'username'       => 'ชื่อผู้ใช้',
        'email'          => 'อีเมล',
        'password'       => 'รหัสผ่าน',
        'api-token'      => 'API Token',
        'api-token-help' => 'การสร้าง API Token ใหม่ จะทำให้แอปพลิเคชั่นเดิมเข้าถึง Cachet ไม่ได้',
        'gravatar'       => 'เปลี่ยนรูปโปรไฟล์ที่ Gravatar',
        'user_level'     => 'ระดับผู้ใช้',
        'levels'         => [
            'admin' => 'ผู้ดูแลระบบ',
            'user'  => 'ผู้ใช้',
        ],
        '2fa' => [
            'help' => 'ใช้งานการยีนยันตัวตนสองชั้นจะเพิ่มความปลอดภัยให้บัญชีของคุณ คุณจำเป็นต้องดาวน์โหลด <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> หรือแอปที่คล้ายกันบนอุปกรณ์เคลื่อนที่ เมื่อเข้าสู่ระบบคุณจะถูกถามให้ใส่รหัสที่ถูกสร้างจากแอป',
        ],
        'team' => [
            'description' => 'เชิญเพื่อนร่วมทีมของคุณ โดยการป้อนที่อยู่อีเมลที่นี้',
            'email'       => 'Your Team Members Email Address',
        ],
    ],

    'general' => [
        'timezone' => 'เลือกเขตเวลา',
    ],

    // Buttons
    'add'            => 'เพิ่ม',
    'save'           => 'บันทึก',
    'update'         => 'ปรับปรุง',
    'create'         => 'สร้าง',
    'edit'           => 'แก้ไข',
    'delete'         => 'ลบ',
    'submit'         => 'ส่งข้อมูล',
    'cancel'         => 'ยกเลิก',
    'remove'         => 'ลบออก',
    'invite'         => 'เชิญ',
    'signup'         => 'สมัครสมาชิก',
    'manage_updates' => 'Manage Updates',

    // Other
    'optional' => '* ไม่จำเป็น',
];
