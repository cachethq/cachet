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

    'accepted'   => ':attribute phải được chấp nhận.',
    'active_url' => ':attribute không phải một URL hợp lệ.',
    'after'      => ':attribute phải là một ngày sau :date.',
    'alpha'      => ':attribute chỉ có thể chứa các chữ cái.',
    'alpha_dash' => ':attribute chỉ có thể chứa các chữ cái, số, và dấu gạch ngang.',
    'alpha_num'  => ':attribute chỉ có thể chứa các chữ cái và số.',
    'array'      => ':attribute phải là một mảng.',
    'before'     => ':attribute phải là một ngày trước :date.',
    'between'    => [
        'numeric' => ':attribute phải ở giữa :min và :max.',
        'file'    => ':attribute phải trong khoảng từ :min đến :max kilobytes.',
        'string'  => ':attribute phải trong khoảng từ :min đến :max ký tự.',
        'array'   => ':attribute phải trong khoảng :min và :max mục.',
    ],
    'boolean'        => 'Trường :attribute phải là trua hoặc false.',
    'confirmed'      => ':attribute xác nhận không đúng.',
    'date'           => 'Kiểu ngày tháng của :attribute không hợp lệ.',
    'date_format'    => 'Thuộc tính :attribute phải có cấu trúc giống như :format.',
    'different'      => 'Thuộc tính :attribute và :other phải khác nhau.',
    'digits'         => 'Thuộc tính :attribute phải :digits số.',
    'digits_between' => 'Thuộc tính :attribute phải có số ký số lớn hơn :min và :max số.',
    'email'          => 'Thuộc tính :attribute phải có định dạng là địa chỉ email.',
    'exists'         => 'Thuộc tính đã chọn ( :attribute ) không hợp lệ.',
    'filled'         => 'Trường :attribute là bắt buộc.',
    'image'          => 'Thuộc tính :attribute phải là một file ảnh.',
    'in'             => 'Thuộc tính được chọn ( :attribute ) không hợp lệ.',
    'integer'        => 'Thuộc tính :attribute phải là số nguyên.',
    'ip'             => 'Thuộc tính :attribute phải có dạng IP.',
    'json'           => ':attribute phải là một chuỗi JSON hợp lệ.',
    'max'            => [
        'numeric' => ':attribute có thể không lớn hơn :max.',
        'file'    => ':attribute có thể không lớn hơn :max kilobytes.',
        'string'  => ':attribute có thể không lớn hơn :max ký tự.',
        'array'   => ':attribute có thể không có nhiều hơn :max mục.',
    ],
    'mimes' => ':attribute phải là một tệp loại: :values.',
    'min'   => [
        'numeric' => ':attribute phải tối thiểu :min.',
        'file'    => ':attribute phải tối thiểu :min kilobytes.',
        'string'  => ':attribute phải tối thiểu :min ký tự.',
        'array'   => ':attribute phải tối thiểu :min mục.',
    ],
    'not_in'               => ':attribute đã chọn không hợp lệ.',
    'numeric'              => ':attribute phải là một số.',
    'regex'                => 'Định dạng :attribute không hợp lệ.',
    'required'             => 'Trường :attribute là bắt buộc.',
    'required_if'          => 'Trường :attribute là bắt buộc khi :other là :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Trường :attribute là bắt buộc khi :values là hiện tại.',
    'required_with_all'    => 'Trường :attribute là bắt buộc khi :values là hiện tại.',
    'required_without'     => 'Trường :attribute là bắt buộc khi :values không phải là hiện tại.',
    'required_without_all' => 'Trường :attribute là bắt buộc khi không có gì của :values là hiện tại.',
    'same'                 => ':attribute và :other phải khớp nhau.',
    'size'                 => [
        'numeric' => ':attribute phải là :size.',
        'file'    => ':attribute phải là :size kilobytes.',
        'string'  => ':attribute phải là :size ký tự.',
        'array'   => ':attribute phải là :size mục.',
    ],
    'string'   => ':attribute phải là một chuỗi.',
    'timezone' => ':attribute phải là một khu vực hợp lệ.',
    'unique'   => ':attribute đã được dùng.',
    'url'      => 'Định dạng :attribute không hợp lệ.',

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
            'rule-name' => 'custom-message',
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
