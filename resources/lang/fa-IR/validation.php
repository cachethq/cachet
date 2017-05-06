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

    'accepted'   => ':attribute باید پذیرفته شده باشد.',
    'active_url' => 'آدرس :attribute معتبر نیست.',
    'after'      => 'مقدار :attribute باید یک تاریخ بعد از :date باشد.',
    'alpha'      => 'مقدار :attribute باید فقط شامل حروف باشد.',
    'alpha_dash' => 'مقدار :attribute باید فقط شامل حروف، اعداد و خط فاصله باشد.',
    'alpha_num'  => 'مقدار :attribute فقط باید شامل حروف و اعداد باشد.',
    'array'      => 'مقدار :attribute باید به صورت آرایه باشد.',
    'before'     => 'مقدار :attribute باید یک تاریخ قبل از :date باشد.',
    'between'    => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'تعداد :attribute باید بین :min و :max باشد.',
    ],
    'boolean'        => 'The :attribute field must be true or false.',
    'confirmed'      => 'The :attribute confirmation does not match.',
    'date'           => 'The :attribute is not a valid date.',
    'date_format'    => 'The :attribute does not match the format :format.',
    'different'      => 'The :attribute and :other must be different.',
    'digits'         => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'email'          => 'The :attribute must be a valid email address.',
    'exists'         => 'The selected :attribute is invalid.',
    'distinct'       => 'مقدار :attribute یک مقدار تکراری دارد.',
    'filled'         => 'The :attribute field is required.',
    'image'          => ':attribute باید یک عکس باشد.',
    'in'             => 'The selected :attribute is invalid.',
    'in_array'       => 'مقدار :attribute در :other وجود ندارد.',
    'integer'        => 'The :attribute must be an integer.',
    'ip'             => 'The :attribute must be a valid IP address.',
    'json'           => 'مقدار :attribute باید یک JSON معتبر باشد.',
    'max'            => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => ':attribute نباید بیشتر از :max آیتم داشته باشد.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'min'   => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'حجم :attribute باید حداقل :min کیلوبایت باشد.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => ':attribute باید وجود داشته باشد.',
    'regex'                => 'فرمت :attribute نامعتبر می‌باشد.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'فیلد :attribute اجباری است تا زمانی که :other در :values باشد.',
    'required_with'        => 'فیلد :attribute اجباری است تا زمانی که :values وجود داشته باشد.',
    'required_with_all'    => 'فیلد :attribute اجباری است تا زمانی که :values وجود داشته باشد.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'حجم :attribute باید به اندازه :size کیلوبایت باشد.',
        'string'  => 'مقدار :attribute باید به اندازه :size کاراکتر باشد.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'   => 'The :attribute must be a string.',
    'timezone' => ':attribute باید دارای مقدار یک ناحیه معتبر باشد.',
    'unique'   => ':attribute قبلا انتخاب شده است.',
    'url'      => 'فرمت :attribute نامعتبر می‌باشد.',

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
            'rule-name' => 'پیام سفارشی',
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