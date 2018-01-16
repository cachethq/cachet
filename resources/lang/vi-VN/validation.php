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
        'numeric' => ':attribute phải nằm giữa :min - :max.',
        'file'    => ':attribute phải trong khoảng từ :min đến :max kilobytes.',
        'string'  => ':attribute phải trong khoảng từ :min đến :max ký tự.',
        'array'   => ':attribute phải trong khoảng :min và :max mục.',
    ],
    'boolean'        => ':attribute phải là true hoặc false.',
    'confirmed'      => 'Xác nhận :attribute không đúng.',
    'date'           => ':attribute không phải là ngày hợp lệ.',
    'date_format'    => ':attribute không phù hợp định dạng :format.',
    'different'      => ':attribute và :other phải khác nhau.',
    'digits'         => ':attribute phải có :digits chữ số.',
    'digits_between' => ':attribute phải ở giữa :min và :max chữ số.',
    'email'          => ':attribute phải là một email hợp lệ.',
    'exists'         => ':attribute đã chọn không hợp lệ.',
    'distinct'       => 'Thuộc tính :attribute có giá trị trùng lặp.',
    'filled'         => 'Thuộc tính :attribute là bắt buộc.',
    'image'          => 'Thuộc tính :attribute phải là một file ảnh.',
    'in'             => ':attribute đã chọn không hợp lệ.',
    'in_array'       => 'Thuộc tính :attribute không tồn tại trong :other.',
    'integer'        => ':attribute phải là một số nguyên.',
    'ip'             => ':attribute phải là một địa chỉ IP hợp lệ.',
    'json'           => ':attribute phải là một chuỗi JSON hợp lệ.',
    'max'            => [
        'numeric' => ':attribute có thể không lớn hơn :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => ':attribute có thể không có nhiều hơn :max mục.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'min'   => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => ':attribute phải tối thiểu :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => ':attribute đã chọn không hợp lệ.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'Định dạng :attribute không hợp lệ.',
    'required'             => 'Thuộc tính :attribute là bắt buộc.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Trường :attribute là bắt buộc khi :values là hiện tại.',
    'required_with_all'    => 'Trường :attribute là bắt buộc khi :values là hiện tại.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => ':attribute phải là :size kilobytes.',
        'string'  => ':attribute phải là :size ký tự.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'   => 'The :attribute must be a string.',
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
