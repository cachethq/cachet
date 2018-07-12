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

    'accepted'   => 'El :attribute debe ser aceptado.',
    'active_url' => 'El :attribute no es un enlace válido.',
    'after'      => 'El :attribute debe ser una fecha después de :date.',
    'alpha'      => 'El :attribute sólo puede contener letras.',
    'alpha_dash' => 'El :attribute sólo puede contener letras, números y guiones.',
    'alpha_num'  => 'El :attribute sólo puede contener letras y números.',
    'array'      => 'El :attribute debe ser una matriz.',
    'before'     => 'El :attribute debe ser una fecha antes de :date.',
    'between'    => [
        'numeric' => 'El :attribute debe ser una fecha antes de :date.',
        'file'    => 'The :attribute must be between :min and :max.',
        'string'  => 'The :attribute must be between :min and :max kilobytes.',
        'array'   => 'El :attribute debe tener entre :min y :max objetos.',
    ],
    'boolean'        => 'El :attribute debe tener entre :min y :max objetos.',
    'confirmed'      => 'The :attribute field must be true or false.',
    'date'           => 'The :attribute confirmation does not match.',
    'date_format'    => 'The :attribute is not a valid date.',
    'different'      => 'The :attribute does not match the format :format.',
    'digits'         => 'The :attribute and :other must be different.',
    'digits_between' => 'The :attribute must be :digits digits.',
    'email'          => 'The :attribute must be between :min and :max digits.',
    'exists'         => 'The :attribute must be a valid email address.',
    'distinct'       => 'El campo :attribute tiene un valor duplicado.',
    'filled'         => 'El formato :attribute es inválido.',
    'image'          => 'El :attribute debe ser una imagen.',
    'in'             => 'El :attribute debe ser una imagen.',
    'in_array'       => 'El campo :attribute no existe en :other.',
    'integer'        => 'The selected :attribute is invalid.',
    'ip'             => 'The :attribute must be an integer.',
    'json'           => 'El :attribute debe ser una cadena JSON válida.',
    'max'            => [
        'numeric' => 'The :attribute must be a valid IP address.',
        'file'    => 'The :attribute may not be greater than :max.',
        'string'  => 'The :attribute may not be greater than :max kilobytes.',
        'array'   => 'El :attribute no puede tener más de :max objetos.',
    ],
    'mimes' => 'El :attribute no puede tener más de :max objetos.',
    'min'   => [
        'numeric' => 'The :attribute must be a file of type: :values.',
        'file'    => 'El :attribute debe tener al menos :min kilobytes.',
        'string'  => 'El :attribute debe tener al menos :min kilobytes.',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => 'The selected :attribute is invalid.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'The :attribute must be a number.',
    'required'             => 'El formato :attribute es inválido.',
    'required_if'          => 'The :attribute field is required.',
    'required_unless'      => 'El campo :attribute es obligatorio a no ser que :other se encuentre en :values.',
    'required_with'        => 'The :attribute field is required when :other is :value.',
    'required_with_all'    => 'El campo del :attribute se requiere cuando :values es presente.',
    'required_without'     => 'El campo del :attribute se requiere cuando :values es presente.',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => 'The :attribute and :other must match.',
        'file'    => 'El :attribute debe ser :size kilobytes.',
        'string'  => 'El :attribute debe tener :size caracteres.',
        'array'   => 'El :attribute debe tener :size caracteres.',
    ],
    'string'   => 'The :attribute must contain :size items.',
    'timezone' => 'El :attribute debe ser una zona válida.',
    'unique'   => 'El :attribute ya ha sido usado.',
    'url'      => 'El formato :attribute es inválido.',

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
            'rule-name' => 'mensaje-personalizado',
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
