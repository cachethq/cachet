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
        'numeric' => ':attribute doit être une date inférieur à :date.',
        'file'    => ':attribute doit être compris entre :min et :max.',
        'string'  => ':attribute doit être compris entre :min et :max kilo-octets.',
        'array'   => 'attribute doit être entre :min et :max éléments.',
    ],
    'boolean'        => 'attribute doit être entre :min et :max éléments.',
    'confirmed'      => 'Le champ :attribute doit être vrai ou faux.',
    'date'           => 'La confirmation de :attribute ne correspond pas.',
    'date_format'    => ':attribute n\'est pas une date valide.',
    'different'      => ':attribute ne correspond pas au format :format.',
    'digits'         => ':attribute et :other doivent être différents.',
    'digits_between' => ':attribute doit avoir :digits chiffres.',
    'email'          => ':attribute doit être entre :min et :max chiffres.',
    'exists'         => ':attribute doit être une adresse courriel valide.',
    'distinct'       => ':attribute possède une valeur en double.',
    'filled'         => 'Le format de :attribute n\'est pas valide.',
    'image'          => ':attribute doit être une image.',
    'in'             => ':attribute doit être une image.',
    'in_array'       => 'Le champ :attribute n\'existe pas dans :other.',
    'integer'        => 'Le :attribute sélectionné est invalide.',
    'ip'             => ':attribute doit être un nombre entier.',
    'json'           => ':attribut doit être une chaîne JSON valide.',
    'max'            => [
        'numeric' => ':attribute doit être une adresse IP valide.',
        'file'    => ':attribute ne doit pas dépasser :max.',
        'string'  => ':attribute ne peut être plus grand que :max kilo-octets.',
        'array'   => ':attribute ne doit dépasser :max éléments.',
    ],
    'mimes' => ':attribute ne doit dépasser :max éléments.',
    'min'   => [
        'numeric' => ':attribute doit être un fichier de type: :values.',
        'file'    => ':attribute doit être au moins de :min kilo-octets.',
        'string'  => ':attribute doit être au moins de :min kilo-octets.',
        'array'   => ':attribute doit comporter au minimum :min caractères.',
    ],
    'not_in'               => ':attribute doit contenir au moins :min éléments.',
    'numeric'              => 'Le :attribute sélectionné est invalide.',
    'present'              => 'Le champs :attribute doit être rempli.',
    'regex'                => ':attribute doit être un nombre.',
    'required'             => 'Le format de :attribute n\'est pas valide.',
    'required_if'          => 'Le champ :attribute est requis.',
    'required_unless'      => 'Le champ :attribute est requis sauf si :other est dans :values.',
    'required_with'        => 'Le champ :attribute est requis lorsque :other est :value.',
    'required_with_all'    => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_without'     => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_without_all' => 'Le champ :attribute est nécessaire quand :values n\'est pas présent.',
    'same'                 => 'Le champ :attribute est requis lorsque aucune des :values sont présentes.',
    'size'                 => [
        'numeric' => 'Le :attribute et :other doivent correspondre.',
        'file'    => 'attribute doit être de :size kilo-octets.',
        'string'  => 'L\'attribut ":attribute" doit faire :size caractères.',
        'array'   => 'L\'attribut ":attribute" doit faire :size caractères.',
    ],
    'string'   => ':attribute doit contenir :size éléments.',
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
