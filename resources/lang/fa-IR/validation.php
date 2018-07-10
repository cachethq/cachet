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
        'numeric' => 'مقدار :attribute باید یک تاریخ قبل از :date باشد.',
        'file'    => 'The :attribute must be between :min and :max.',
        'string'  => 'The :attribute must be between :min and :max kilobytes.',
        'array'   => 'تعداد :attribute باید بین :min و :max باشد.',
    ],
    'boolean'        => 'تعداد :attribute باید بین :min و :max باشد.',
    'confirmed'      => 'The :attribute field must be true or false.',
    'date'           => 'The :attribute confirmation does not match.',
    'date_format'    => 'The :attribute is not a valid date.',
    'different'      => 'The :attribute does not match the format :format.',
    'digits'         => 'The :attribute and :other must be different.',
    'digits_between' => 'The :attribute must be :digits digits.',
    'email'          => 'The :attribute must be between :min and :max digits.',
    'exists'         => 'The :attribute must be a valid email address.',
    'distinct'       => 'مقدار :attribute یک مقدار تکراری دارد.',
    'filled'         => 'فرمت :attribute نامعتبر می‌باشد.',
    'image'          => ':attribute باید یک عکس باشد.',
    'in'             => ':attribute باید یک عکس باشد.',
    'in_array'       => 'مقدار :attribute در :other وجود ندارد.',
    'integer'        => 'The selected :attribute is invalid.',
    'ip'             => 'The :attribute must be an integer.',
    'json'           => 'مقدار :attribute باید یک JSON معتبر باشد.',
    'max'            => [
        'numeric' => 'The :attribute must be a valid IP address.',
        'file'    => 'The :attribute may not be greater than :max.',
        'string'  => 'The :attribute may not be greater than :max kilobytes.',
        'array'   => ':attribute نباید بیشتر از :max آیتم داشته باشد.',
    ],
    'mimes' => ':attribute نباید بیشتر از :max آیتم داشته باشد.',
    'min'   => [
        'numeric' => 'The :attribute must be a file of type: :values.',
        'file'    => 'حجم :attribute باید حداقل :min کیلوبایت باشد.',
        'string'  => 'حجم :attribute باید حداقل :min کیلوبایت باشد.',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => 'The selected :attribute is invalid.',
    'present'              => ':attribute باید وجود داشته باشد.',
    'regex'                => 'The :attribute must be a number.',
    'required'             => 'فرمت :attribute نامعتبر می‌باشد.',
    'required_if'          => 'The :attribute field is required.',
    'required_unless'      => 'فیلد :attribute اجباری است تا زمانی که :other در :values باشد.',
    'required_with'        => 'The :attribute field is required when :other is :value.',
    'required_with_all'    => 'فیلد :attribute اجباری است تا زمانی که :values وجود داشته باشد.',
    'required_without'     => 'فیلد :attribute اجباری است تا زمانی که :values وجود داشته باشد.',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => 'The :attribute and :other must match.',
        'file'    => 'حجم :attribute باید به اندازه :size کیلوبایت باشد.',
        'string'  => 'مقدار :attribute باید به اندازه :size کاراکتر باشد.',
        'array'   => 'مقدار :attribute باید به اندازه :size کاراکتر باشد.',
    ],
    'string'   => 'The :attribute must contain :size items.',
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
