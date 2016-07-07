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
        'file'    => 'El atributo :attribute debe estar entre :min y :max.',
        'string'  => 'El :attribute debe estar entre :min y :max kilobytes.',
        'array'   => 'El :attribute debe tener entre :min y :max objetos.',
    ],
    'boolean'        => 'El :attribute debe tener entre :min y :max objetos.',
    'confirmed'      => 'El campo :attribute debe ser verdadero o falso.',
    'date'           => 'La confirmación del :attribute no coincide.',
    'date_format'    => 'El :attribute no es una fecha válida.',
    'different'      => 'El :attribute no cumple el formato :format.',
    'digits'         => 'El atributo :attribute y :other deben ser diferentes.',
    'digits_between' => 'El :attribute debe tener :digits dígitos.',
    'email'          => 'El :attribute debe tener entre: min y :max dígitos.',
    'exists'         => 'El :attribute debe ser una dirección válida de correo electrónico.',
    'distinct'       => 'El campo :attribute tiene un valor duplicado.',
    'filled'         => 'El formato :attribute es inválido.',
    'image'          => 'El :attribute debe ser una imagen.',
    'in'             => 'El :attribute debe ser una imagen.',
    'in_array'       => 'El campo :attribute no existe en :other.',
    'integer'        => 'El :attribute seleccionado es inválido.',
    'ip'             => 'El :attribute debe ser un número entero.',
    'json'           => 'El :attribute debe ser una cadena JSON válida.',
    'max'            => [
        'numeric' => 'El :attribute debe ser una dirección IP válida.',
        'file'    => 'El atributo :attribute no puede ser mayor que :max.',
        'string'  => 'El atributo :attribute no puede ser mayor :max de kilobytes.',
        'array'   => 'El :attribute no puede tener más de :max objetos.',
    ],
    'mimes' => 'El :attribute no puede tener más de :max objetos.',
    'min'   => [
        'numeric' => 'El :attribute debe ser un archivo de tipo: :values.',
        'file'    => 'El :attribute debe tener al menos :min kilobytes.',
        'string'  => 'El :attribute debe tener al menos :min kilobytes.',
        'array'   => 'El atributo :attribute debe ser de al menos :min caracteres.',
    ],
    'not_in'               => 'El :attribute debe tener al menos :min objetos.',
    'numeric'              => 'El :attribute seleccionado es inválido.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El :attribute sebe ser un número.',
    'required'             => 'El formato :attribute es inválido.',
    'required_if'          => 'El campo :attribute es requerido.',
    'required_unless'      => 'El campo :attribute es obligatorio a no ser que :other se encuentre en :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_with_all'    => 'El campo del :attribute se requiere cuando :values es presente.',
    'required_without'     => 'El campo del :attribute se requiere cuando :values es presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'same'                 => 'El campo :attribute es obligatorio cuando ninguno de :values estén presentes.',
    'size'                 => [
        'numeric' => 'Los :attribute y :other deben coincidir.',
        'file'    => 'El :attribute debe ser :size kilobytes.',
        'string'  => 'El :attribute debe tener :size caracteres.',
        'array'   => 'El :attribute debe tener :size caracteres.',
    ],
    'string'   => 'El :attribute debe contener :size objetos.',
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
