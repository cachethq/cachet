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
        'numeric' => ':attribute phải là một ngày trước :date.',
        'file'    => ':attribute phải nằm giữa :min - :max.',
        'string'  => ':attribute phải trong khoảng từ :min đến :max kilobytes.',
        'array'   => ':attribute phải trong khoảng :min và :max mục.',
    ],
    'boolean'        => ':attribute phải trong khoảng :min và :max mục.',
    'confirmed'      => ':attribute phải là true hoặc false.',
    'date'           => 'Xác nhận :attribute không đúng.',
    'date_format'    => ':attribute không phải là ngày hợp lệ.',
    'different'      => ':attribute không phù hợp định dạng :format.',
    'digits'         => ':attribute và :other phải khác nhau.',
    'digits_between' => ':attribute phải có :digits chữ số.',
    'email'          => ':attribute phải ở giữa :min và :max chữ số.',
    'exists'         => ':attribute phải là một email hợp lệ.',
    'distinct'       => 'Thuộc tính :attribute có giá trị trùng lặp.',
    'filled'         => 'Định dạng :attribute không hợp lệ.',
    'image'          => 'Thuộc tính :attribute phải là một file ảnh.',
    'in'             => 'Thuộc tính :attribute phải là một file ảnh.',
    'in_array'       => 'Thuộc tính :attribute không tồn tại trong :other.',
    'integer'        => ':attribute đã chọn không hợp lệ.',
    'ip'             => ':attribute phải là một số nguyên.',
    'json'           => ':attribute phải là một chuỗi JSON hợp lệ.',
    'max'            => [
        'numeric' => ':attribute phải là một địa chỉ IP hợp lệ.',
        'file'    => ':attribute có thể không lớn hơn :max.',
        'string'  => 'The :attribute may not be greater than :max kilobytes.',
        'array'   => ':attribute có thể không có nhiều hơn :max mục.',
    ],
    'mimes' => ':attribute có thể không có nhiều hơn :max mục.',
    'min'   => [
        'numeric' => 'The :attribute must be a file of type: :values.',
        'file'    => ':attribute phải tối thiểu :min kilobytes.',
        'string'  => ':attribute phải tối thiểu :min kilobytes.',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => ':attribute đã chọn không hợp lệ.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute must be a number.',
    'required'             => 'Định dạng :attribute không hợp lệ.',
    'required_if'          => 'Thuộc tính :attribute là bắt buộc.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :other is :value.',
    'required_with_all'    => 'Trường :attribute là bắt buộc khi :values là hiện tại.',
    'required_without'     => 'Trường :attribute là bắt buộc khi :values là hiện tại.',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => 'The :attribute and :other must match.',
        'file'    => ':attribute phải là :size kilobytes.',
        'string'  => ':attribute phải là :size ký tự.',
        'array'   => ':attribute phải là :size ký tự.',
    ],
    'string'   => 'The :attribute must contain :size items.',
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
