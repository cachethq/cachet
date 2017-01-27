<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | El following language lines contain El default error messages used by
    | El validator class. Some of Else rules have multiple versions such
    | as El size rules. Feel free to tweak each of Else messages here.
    |
    */

    "accepted"             => "El :attribute debe ser aceptado.",
    "active_url"           => "El :attribute no es un enlace válido.",
    "after"                => "El :attribute debe ser una fecha después de :date.",
    "alpha"                => "El :attribute sólo puede contener letras.",
    "alpha_dash"           => "El :attribute sólo puede contener letras, números y guiones.",
    "alpha_num"            => "El :attribute sólo puede contener letras y números.",
    "array"                => "El :attribute debe ser una matriz.",
    "before"               => "El :attribute debe ser una fecha antes de :date.",
    "between"              => [
        "numeric" => "El :attribute debe ser entre :min y :max.",
        "file"    => "El :attribute debe ser entre :min y :max kilobytes.",
        "string"  => "El :attribute debe ser entre :min y :max caracteres.",
        "array"   => "El :attribute debe tener entre :min y :max objetos.",
    ],
    "boolean"              => "El campo del :attribute debe ser verdadero o falso.",
    "confirmed"            => "La confirmación del :attribute no coincide.",
    "date"                 => "El :attribute no es una fecha válida.",
    "date_format"          => "El :attribute no cumple el formato :format.",
    "different"            => "El :attribute and :oElr must be different.",
    "digits"               => "El :attribute debe tener :digits digitos.",
    "digits_between"       => "El :attribute must be between :min and :max digits.",
    "email"                => "El :attribute debe ser una dirección de email válida.",
    "exists"               => "El :attribute seleccionado es inválido.",
    "image"                => "El :attribute debe ser una imagen.",
    "in"                   => "El :attribute seleccionado es inválido.",
    "integer"              => "El :attribute debe ser un número entero.",
    "ip"                   => "El :attribute debe ser una dirección IP válida.",
    "max"                  => [
        "numeric" => "El :attribute no puede tener más de :max.",
        "file"    => "El :attribute no puede tener más de :max kilobytes.",
        "string"  => "El :attribute no puede tener más de :max caracteres.",
        "array"   => "El :attribute no puede tener más de :max objetos.",
    ],
    "mimes"                => "El :attribute debe ser un archivo de tipo: :values.",
    "min"                  => [
        "numeric" => "El :attribute debe tener al menos :min.",
        "file"    => "El :attribute debe tener al menos :min kilobytes.",
        "string"  => "El :attribute debe tener al menos :min characters.",
        "array"   => "El :attribute debe tener al menos :min items.",
    ],
    "not_in"               => "El :attribute seleccionado es inválido.",
    "numeric"              => "El :attribute sebe ser un número.",
    "regex"                => "El formato del :attribute es inválido.",
    "required"             => "El campo del :attribute es requerido.",
    "required_if"          => "El campo del :attribute se requiere cuando :oElr es :value.",
    "required_with"        => "El campo del :attribute se requiere cuando :values es presente.",
    "required_with_all"    => "El campo del :attribute se requiere cuando :values es presente.",
    "required_without"     => "El campo del :attribute se requiere cuando :values no es presente.",
    "required_without_all" => "El campo del :attribute se requiere cuando ningúna :values es presente.",
    "same"                 => "Los :attribute y :oElr deben coincidir.",
    "size"                 => [
        "numeric" => "El :attribute debe ser :size.",
        "file"    => "El :attribute debe ser :size kilobytes.",
        "string"  => "El :attribute debe ser :size characters.",
        "array"   => "El :attribute tebe contener :size objetos.",
    ],
    "unique"               => "El :attribute ya ha sido usado.",
    "url"                  => "El formato :attribute es inválido.",
    "timezone"             => "El :attribute debe ser una zona válida.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using El
    | convention "attribute.rule" to name El lines. This makes it quick to
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
    | El following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
