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
        'numeric' => ':attribute ต้องอยู่ระหว่าง :min ถึง :max',
        'file'    => ':attribute ต้องมีขนาดระหว่าง :min ถึง :max กิโลไบต์',
        'string'  => ':attribute ต้องมีความยาวระหว่าง :min ถึง :max ตัวอักษร',
        'array'   => ':attribute ต้องมีตั้งแต่ :min ถึง :max รายการ',
    ],
    'boolean'        => ':attribute ต้องเป็น true หรือ false เท่านั้น',
    'confirmed'      => ':attribute ที่ใช่ยืนยันไม่ตรงกัน',
    'date'           => ':attribute เป็นรูปแบบวันที่ที่ไม่ถูกต้อง',
    'date_format'    => ':attribute ไม่ตรงตามรูปแบบ :format',
    'different'      => ':attribute และ :other ต้องไม่เหมือนกัน',
    'digits'         => ':attribute ต้องมี :digits หลัก',
    'digits_between' => ':attribute ต้องยาวระหว่าง :min ถึง :max หลัก',
    'email'          => ':attribute ต้องเป็นรูปแบบอีเมลที่ถูกต้อง',
    'exists'         => ':attribute ที่เลือกไม่ถูกต้อง',
    'distinct'       => ':attribute มีค่าซ้ำกัน',
    'filled'         => 'กรุณากรอกข้อมูลในฟิลด์ :attribute',
    'image'          => ':attribute ต้องเป็นรูปภาพเท่านั้น',
    'in'             => ':attribute ที่เลือกไม่ถูกต้อง',
    'in_array'       => 'ฟิลด์ :attribute ไม่มีอยู่ใน :other',
    'integer'        => ':attribute ต้องเป็นจำนวนเต็มเท่านั้น',
    'ip'             => ':attribute ต้องเป็นรูปแบบไอพีแอดเดรสเท่านั้น',
    'json'           => ':attribute ต้องเป็นรูปแบบ JSON เท่านั้น',
    'max'            => [
        'numeric' => ':attribute ต้องมีค่าไม่มากกว่า :max',
        'file'    => ':attribute ต้องไม่ใหญ่กว่า :max กิโลไบต์',
        'string'  => ':attribute ต้องไม่ยาวกว่า :max ตัวอักษร',
        'array'   => ':attribute ต้องมีไม่เกิน :max รายการ',
    ],
    'mimes' => ':attribute ต้องเป็นไฟล์ :values เท่านั้น',
    'min'   => [
        'numeric' => ':attribute ต้องมีค่าอย่างน้อย :min',
        'file'    => ':attribute ต้องมีขนาดอย่างน้อย :min กิโลไบต์',
        'string'  => ':attribute ต้องยาวอย่างน้อย :min ตัวอักษร',
        'array'   => ':attribute ต้องมีอย่างน้อย :min รายการ',
    ],
    'not_in'               => ':attribute ที่เลือกไม่ถูกต้อง',
    'numeric'              => ':attribute ต้องเป็นตัวเลขเท่านั้น',
    'present'              => 'ฟิลด์ :attribute ต้องมีอยู่จริง',
    'regex'                => 'รูปแบบของ :attribute ไม่ถูกต้อง',
    'required'             => 'กรุณากรอกข้อมูลในฟิลด์ :attribute',
    'required_if'          => 'ฟิลด์ :attribute จำเป็นต้องกรอก เมื่อ :other เป็น :value',
    'required_unless'      => 'ฟิลด์ :attribute จำเป็นต้องกรอก นอกจาก :other อยู่ใน :value',
    'required_with'        => 'ฟิลด์ :attribute จำเป็นต้องกรอก เมื่อ :value มีข้อมูล',
    'required_with_all'    => 'ฟิลด์ :attribute จำเป็นต้องกรอก เมื่อ :value มีข้อมูล',
    'required_without'     => 'ฟิลด์ :attribute จำเป็นต้องกรอก เมื่อ :value ไม่มีข้อมูล',
    'required_without_all' => 'ฟิลด์ :attribute จำเป็นต้องกรอก เมื่อ :value ไม่มีข้อมูล',
    'same'                 => ':attribute และ :other ต้องตรงกัน',
    'size'                 => [
        'numeric' => ':attribute ต้องมีขนาด :size',
        'file'    => ':attribute ต้องมีขนาด :size กิโลไบต์',
        'string'  => ':attribute ต้องมีจำนวน :size ตัวอักษร',
        'array'   => ':attribute ต้องมีอยู่ :size รายการ',
    ],
    'string'   => ':attribute ต้องเป็นข้อความเท่านั้น',
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
