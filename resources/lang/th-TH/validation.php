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

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'   => 'คุณต้องยอมรับ :attribute',
    'active_url' => ':attribute ไม่ใช่รูปแบบ URL ที่ถูกต้อง',
    'after'      => ':attribute ต้องเป็นวันหลังจาก :date เท่านั้น',
    'alpha'      => ':attribute ต้องมีเฉพาะตัวอักษรเท่านั้น',
    'alpha_dash' => ':attribute ต้องประกอบด้วยตัวอักษร ตัวเลข และเครื่องหมายลบเท่านั้น',
    'alpha_num'  => ':attribute ต้องประกอบด้วยตัวอักษรและตัวเลขเท่านั้น',
    'array'      => ':attribute ต้องเป็นอาร์เรย์เท่านั้น',
    'before'     => ':attribute ต้องอยู่ในรูปแบบวันก่อนวันที่ :date เท่านั้น',
    'between'    => [
        'numeric' => ':attribute ต้องอยู่ในรูปแบบวันก่อนวันที่ :date เท่านั้น',
        'file'    => ':attribute ต้องอยู่ระหว่าง :min ถึง :max',
        'string'  => ':attribute ต้องมีขนาดระหว่าง :min ถึง :max กิโลไบต์',
        'array'   => ':attribute ต้องมีตั้งแต่ :min ถึง :max รายการ',
    ],
    'boolean'        => ':attribute ต้องมีตั้งแต่ :min ถึง :max รายการ',
    'confirmed'      => ':attribute ต้องเป็น true หรือ false เท่านั้น',
    'date'           => ':attribute ที่ใช่ยืนยันไม่ตรงกัน',
    'date_format'    => ':attribute เป็นรูปแบบวันที่ที่ไม่ถูกต้อง',
    'different'      => ':attribute ไม่ตรงตามรูปแบบ :format',
    'digits'         => ':attribute และ :other ต้องไม่เหมือนกัน',
    'digits_between' => ':attribute ต้องมี :digits หลัก',
    'email'          => ':attribute ต้องยาวระหว่าง :min ถึง :max หลัก',
    'exists'         => ':attribute ต้องเป็นรูปแบบอีเมลที่ถูกต้อง',
    'distinct'       => ':attribute มีค่าซ้ำกัน',
    'filled'         => 'รูปแบบของ :attribute ไม่ถูกต้อง',
    'image'          => ':attribute ต้องเป็นรูปภาพเท่านั้น',
    'in'             => ':attribute ต้องเป็นรูปภาพเท่านั้น',
    'in_array'       => 'ฟิลด์ :attribute ไม่มีอยู่ใน :other',
    'integer'        => ':attribute ที่เลือกไม่ถูกต้อง',
    'ip'             => ':attribute ต้องเป็นจำนวนเต็มเท่านั้น',
    'json'           => ':attribute ต้องเป็นรูปแบบ JSON เท่านั้น',
    'max'            => [
        'numeric' => ':attribute ต้องเป็นรูปแบบไอพีแอดเดรสเท่านั้น',
        'file'    => ':attribute ต้องมีค่าไม่มากกว่า :max',
        'string'  => ':attribute ต้องไม่ใหญ่กว่า :max กิโลไบต์',
        'array'   => ':attribute ต้องมีไม่เกิน :max รายการ',
    ],
    'mimes' => ':attribute ต้องมีไม่เกิน :max รายการ',
    'min'   => [
        'numeric' => ':attribute ต้องเป็นไฟล์ :values เท่านั้น',
        'file'    => ':attribute ต้องมีขนาดอย่างน้อย :min กิโลไบต์',
        'string'  => ':attribute ต้องมีขนาดอย่างน้อย :min กิโลไบต์',
        'array'   => ':attribute ต้องยาวอย่างน้อย :min ตัวอักษร',
    ],
    'not_in'               => ':attribute ต้องมีอย่างน้อย :min รายการ',
    'numeric'              => ':attribute ที่เลือกไม่ถูกต้อง',
    'present'              => 'ฟิลด์ :attribute ต้องมีอยู่จริง',
    'regex'                => ':attribute ต้องเป็นตัวเลขเท่านั้น',
    'required'             => 'รูปแบบของ :attribute ไม่ถูกต้อง',
    'required_if'          => 'กรุณากรอกข้อมูลในฟิลด์ :attribute',
    'required_unless'      => 'ฟิลด์ :attribute จำเป็นต้องกรอก นอกจาก :other อยู่ใน :value',
    'required_with'        => 'ฟิลด์ :attribute จำเป็นต้องกรอก เมื่อ :other เป็น :value',
    'required_with_all'    => 'ฟิลด์ :attribute จำเป็นต้องกรอก เมื่อ :value มีข้อมูล',
    'required_without'     => 'ฟิลด์ :attribute จำเป็นต้องกรอก เมื่อ :value มีข้อมูล',
    'required_without_all' => 'ฟิลด์ :attribute จำเป็นต้องกรอก เมื่อ :value ไม่มีข้อมูล',
    'same'                 => 'ฟิลด์ :attribute จำเป็นต้องกรอก เมื่อ :value ไม่มีข้อมูล',
    'size'                 => [
        'numeric' => ':attribute และ :other ต้องตรงกัน',
        'file'    => ':attribute ต้องมีขนาด :size กิโลไบต์',
        'string'  => ':attribute ต้องมีจำนวน :size ตัวอักษร',
        'array'   => ':attribute ต้องมีจำนวน :size ตัวอักษร',
    ],
    'string'   => ':attribute ต้องมีอยู่ :size รายการ',
    'timezone' => ':attribute ต้องเป็นเขตเวลาที่ถูกต้อง',
    'unique'   => ':attribute ถูกใช้ไปแล้ว',
    'url'      => 'รูปแบบของ :attribute ไม่ถูกต้อง',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'ข้อความที่กำหนดเอง',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
