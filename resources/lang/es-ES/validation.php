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
        'file'    => ':attribute debe estar entre :min y :max.',
        'string'  => ':attribute debe estar entre :min y :max de kilobytes.',
        'array'   => 'El :attribute debe tener entre :min y :max objetos.',
    ],
    'boolean'        => 'El :attribute debe tener entre :min y :max objetos.',
    'confirmed'      => 'El campo :attribute debe ser verdadero ó falso.',
    'date'           => 'La confirmación de :attribute no coincide.',
    'date_format'    => ':attribute no es una fecha válida.',
    'different'      => ':attribute no coincide con el formato :format.',
    'digits'         => ':attribute y :other deben ser diferentes.',
    'digits_between' => ':attribute debe contener un número de :digits dígitos.',
    'email'          => ':attribute debe contener entre :min y :max dígitos.',
    'exists'         => ':attribute debe ser una dirección válida de correo electrónico.',
    'distinct'       => 'El campo :attribute tiene un valor duplicado.',
    'filled'         => 'El formato :attribute es inválido.',
    'image'          => 'El :attribute debe ser una imagen.',
    'in'             => 'El :attribute debe ser una imagen.',
    'in_array'       => 'El campo :attribute no existe en :other.',
    'integer'        => 'El :attribute seleccionado no es válido.',
    'ip'             => ':attribute debe ser un entero.',
    'json'           => 'El :attribute debe ser una cadena JSON válida.',
    'max'            => [
        'numeric' => ':attribute debe ser una dirección IP válida.',
        'file'    => ':attribute no puede ser superior a :max.',
        'string'  => ':attribute no puede ser mayor de :max kilobytes.',
        'array'   => 'El :attribute no puede tener más de :max objetos.',
    ],
    'mimes' => 'El :attribute no puede tener más de :max objetos.',
    'min'   => [
        'numeric' => ':attribute debe ser un archivo con formato: :values.',
        'file'    => 'El :attribute debe tener al menos :min kilobytes.',
        'string'  => 'El :attribute debe tener al menos :min kilobytes.',
        'array'   => ':attribute debe ser al menos :min caracteres.',
    ],
    'not_in'               => ':attribute debe contener al menos :min elementos.',
    'numeric'              => 'El :attribute seleccionado no es válido.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => ':attribute debe ser un número.',
    'required'             => 'El formato :attribute es inválido.',
    'required_if'          => 'El campo :attribute es requerido.',
    'required_unless'      => 'El campo :attribute es obligatorio a no ser que :other se encuentre en :values.',
    'required_with'        => 'El campo :attribute se requiere cuando :other es :value.',
    'required_with_all'    => 'El campo del :attribute se requiere cuando :values es presente.',
    'required_without'     => 'El campo del :attribute se requiere cuando :values es presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando :values no está presente.',
    'same'                 => 'El campo :attribute se requiere cuando ninguno de :values están presentes.',
    'size'                 => [
        'numeric' => ':attribute y :other deben coincidir.',
        'file'    => 'El :attribute debe ser :size kilobytes.',
        'string'  => 'El :attribute debe tener :size caracteres.',
        'array'   => 'El :attribute debe tener :size caracteres.',
    ],
    'string'   => ':attribute debe contener :size elementos.',
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
