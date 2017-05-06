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
        'numeric' => ':attribute debe estar entre :min y :max.',
        'file'    => ':attribute debe estar entre :min y :max de kilobytes.',
        'string'  => ':attribute debe estar entre :min y :max de caracteres.',
        'array'   => 'El :attribute debe tener entre :min y :max objetos.',
    ],
    'boolean'        => 'El campo :attribute debe ser verdadero ó falso.',
    'confirmed'      => 'La confirmación de :attribute no coincide.',
    'date'           => ':attribute no es una fecha válida.',
    'date_format'    => ':attribute no coincide con el formato :format.',
    'different'      => ':attribute y :other deben ser diferentes.',
    'digits'         => ':attribute debe contener un número de :digits dígitos.',
    'digits_between' => ':attribute debe contener entre :min y :max dígitos.',
    'email'          => ':attribute debe ser una dirección válida de correo electrónico.',
    'exists'         => 'El :attribute seleccionado no es válido.',
    'distinct'       => 'El campo :attribute tiene un valor duplicado.',
    'filled'         => 'El campo :attribute es requerido.',
    'image'          => 'El :attribute debe ser una imagen.',
    'in'             => 'El :attribute seleccionado no es válido.',
    'in_array'       => 'El campo :attribute no existe en :other.',
    'integer'        => ':attribute debe ser un entero.',
    'ip'             => ':attribute debe ser una dirección IP válida.',
    'json'           => 'El :attribute debe ser una cadena JSON válida.',
    'max'            => [
        'numeric' => ':attribute no puede ser superior a :max.',
        'file'    => ':attribute no puede ser mayor de :max kilobytes.',
        'string'  => ':attribute no debe ser mayor a :max caracteres.',
        'array'   => 'El :attribute no puede tener más de :max objetos.',
    ],
    'mimes' => ':attribute debe ser un archivo con formato: :values.',
    'min'   => [
        'numeric' => ':attribute debe tener al menos :min.',
        'file'    => 'El :attribute debe tener al menos :min kilobytes.',
        'string'  => ':attribute debe ser al menos :min caracteres.',
        'array'   => ':attribute debe contener al menos :min elementos.',
    ],
    'not_in'               => 'El :attribute seleccionado no es válido.',
    'numeric'              => ':attribute debe ser un número.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato :attribute es inválido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute se requiere cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es obligatorio a no ser que :other se encuentre en :values.',
    'required_with'        => 'El campo del :attribute se requiere cuando :values es presente.',
    'required_with_all'    => 'El campo del :attribute se requiere cuando :values es presente.',
    'required_without'     => 'El campo :attribute es requerido cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute se requiere cuando ninguno de :values están presentes.',
    'same'                 => ':attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => ':attribute debe ser :size.',
        'file'    => 'El :attribute debe ser :size kilobytes.',
        'string'  => 'El :attribute debe tener :size caracteres.',
        'array'   => ':attribute debe contener :size elementos.',
    ],
    'string'   => ':attribute debe ser una cadena de texto.',
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