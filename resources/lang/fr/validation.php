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

    'accepted'   => ':attribute doit être accepté.',
    'active_url' => ':attribute n\'est pas une URL valide.',
    'after'      => ':attribute doit être une date supérieure à :date.',
    'alpha'      => ':attribute ne doit contenir que des lettres.',
    'alpha_dash' => ':attribute doit contenir seulement des lettres, nombres et des tirets.',
    'alpha_num'  => ':attribute ne doit contenir que des lettres et des nombres.',
    'array'      => ':attribute doit être un tableau.',
    'before'     => ':attribute doit être une date inférieur à :date.',
    'between'    => [
        'numeric' => ':attribute doit être entre :min et :max.',
        'file'    => 'attribute doit être entre :min et :max kilo-octets.',
        'string'  => 'attribute doit être entre :min et :max caractères.',
        'array'   => 'attribute doit être entre :min et :max éléments.',
    ],
    'boolean'        => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed'      => 'Le champ de confirmation :attribute ne correspond pas.',
    'date'           => ':attribute n\'est pas une date valide.',
    'date_format'    => ':attribute ne correspond pas au format :format.',
    'different'      => ':attribute et :other doivent être différents.',
    'digits'         => ':attribute doit être de :digits chiffres.',
    'digits_between' => ':attribute doit être entre :min et :max chiffres.',
    'email'          => ':attribute doit être une adresse électronique valide.',
    'exists'         => 'Le champ :attribute sélectionné est invalide.',
    'image'          => ':attribute doit être une image.',
    'in'             => 'Le champ :attribute sélectionné est invalide.',
    'integer'        => ':attribute doit être un entier.',
    'ip'             => ':attribute doit être une adresse IP valide.',
    'max'            => [
        'numeric' => ':attribute ne doit pas être plus grand que :max.',
        'file'    => 'attribute ne doit pas être plus grand que :max kilo-octets.',
        'string'  => 'L\'attribut ":attribute" ne doit pas faire plus de :max caractères.',
        'array'   => 'attribute ne devrait pas avoir plus de :max éléments.',
    ],
    'mimes' => ':attribute doit être un fichier de type : :values.',
    'min'   => [
        'numeric' => ':attribute doit être au moins de :min.',
        'file'    => 'attribute doit être au moins de :min kilo-octets.',
        'string'  => 'L\'attribut ":attribute" doit faire au moins :min caractères.',
        'array'   => 'attribute doit avoir au moins :min éléments.',
    ],
    'not_in'               => 'Le champ sélectionné :attribute est invalide.',
    'numeric'              => ':attribute doit être un nombre.',
    'regex'                => 'Le format de :attribute est invalide.',
    'required'             => 'Le champ :attribute est requis.',
    'required_if'          => 'Le champ :attribute est requis lorsque :other est :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all'    => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_without'     => 'Le champ :attribute est requis lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis lorsqu\'aucun des :values ne sont présent.',
    'same'                 => ':attribute et :other doivent correspondre.',
    'size'                 => [
        'numeric' => ':attribute doit être de :size.',
        'file'    => 'attribute doit être de :size kilo-octets.',
        'string'  => 'L\'attribut ":attribute" doit faire :size caractères.',
        'array'   => 'attribute doit contenir :size éléments.',
    ],
    'string'   => ':attribute doit être une chaîne.',
    'unique'   => ':attribute a déjà été pris.',
    'url'      => 'Le format de :attribute n\'est pas valide.',
    'timezone' => ':attribute doit être une zone valide.',

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
            'rule-name' => 'Message personnalisé',
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
