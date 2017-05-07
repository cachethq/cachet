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
        'numeric' => ':attribute doit être compris entre :min et :max.',
        'file'    => ':attribute doit être compris entre :min et :max kilo-octets.',
        'string'  => ':attribute doit être entre :min et :max caractères.',
        'array'   => 'attribute doit être entre :min et :max éléments.',
    ],
    'boolean'        => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed'      => 'La confirmation de :attribute ne correspond pas.',
    'date'           => ':attribute n\'est pas une date valide.',
    'date_format'    => ':attribute ne correspond pas au format :format.',
    'different'      => ':attribute et :other doivent être différents.',
    'digits'         => ':attribute doit avoir :digits chiffres.',
    'digits_between' => ':attribute doit être entre :min et :max chiffres.',
    'email'          => ':attribute doit être une adresse courriel valide.',
    'exists'         => 'Le :attribute sélectionné est invalide.',
    'distinct'       => ':attribute possède une valeur en double.',
    'filled'         => 'Le champ :attribute est requis.',
    'image'          => ':attribute doit être une image.',
    'in'             => 'Le :attribute sélectionné est invalide.',
    'in_array'       => 'Le champ :attribute n\'existe pas dans :other.',
    'integer'        => ':attribute doit être un nombre entier.',
    'ip'             => ':attribute doit être une adresse IP valide.',
    'json'           => ':attribut doit être une chaîne JSON valide.',
    'max'            => [
        'numeric' => ':attribute ne doit pas dépasser :max.',
        'file'    => ':attribute ne peut être plus grand que :max kilo-octets.',
        'string'  => ':attribute ne doit pas dépasser :max caractères.',
        'array'   => ':attribute ne doit dépasser :max éléments.',
    ],
    'mimes' => ':attribute doit être un fichier de type: :values.',
    'min'   => [
        'numeric' => ':attribute doit être au moins de :min.',
        'file'    => ':attribute doit être au moins de :min kilo-octets.',
        'string'  => ':attribute doit comporter au minimum :min caractères.',
        'array'   => ':attribute doit contenir au moins :min éléments.',
    ],
    'not_in'               => 'Le :attribute sélectionné est invalide.',
    'numeric'              => ':attribute doit être un nombre.',
    'present'              => 'Le champs :attribute doit être rempli.',
    'regex'                => 'Le format de :attribute n\'est pas valide.',
    'required'             => 'Le champ :attribute est requis.',
    'required_if'          => 'Le champ :attribute est requis lorsque :other est :value.',
    'required_unless'      => 'Le champ :attribute est requis sauf si :other est dans :values.',
    'required_with'        => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all'    => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_without'     => 'Le champ :attribute est nécessaire quand :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis lorsque aucune des :values sont présentes.',
    'same'                 => 'Le :attribute et :other doivent correspondre.',
    'size'                 => [
        'numeric' => ':attribute doit être :size.',
        'file'    => 'attribute doit être de :size kilo-octets.',
        'string'  => 'L\'attribut ":attribute" doit faire :size caractères.',
        'array'   => ':attribute doit contenir :size éléments.',
    ],
    'string'   => ':attribute doit être une chaîne de caractères.',
    'timezone' => ':attribute doit être une zone valide.',
    'unique'   => ':attribute a déjà été pris.',
    'url'      => 'Le format de :attribute n\'est pas valide.',

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
