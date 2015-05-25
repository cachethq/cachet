<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joe@cachethq.io>
 * (c) Graham Campbell <graham@cachethq.io>
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

    'accepted'             => 'Le champ :attribute doit être accepté.',
    'active_url'           => "Le champ :attribute n'est pas une URL valide.",
    'after'                => 'Le champ :attribute doit être une date postérieure à :date.',
    'alpha'                => 'Le champ :attribute ne peut contenir que des lettres.',
    'alpha_dash'           => 'Le champ :attribute ne peut contenir que des lettres, chiffres et tirets.',
    'alpha_num'            => 'Le champ :attribute ne peut contenir que des lettres ou des chiffres.',
    'array'                => 'Le champ :attribute doit être un tableau.',
    'before'               => 'Le champ :attribute doit être une date antérieure à :date.',
    'between'              => [
        'numeric' => 'Le champ :attribute doit être entre :min et :max.',
        'file'    => 'Le champ :attribute doit être entre :min et :max kilobytes.',
        'string'  => 'Le champ :attribute doit contenir entre :min et :max caractères.',
        'array'   => 'Le champ :attribute doit avoir entre :min et :max objets.',
    ],
    'confirmed'            => 'Le champ :attribute confirmation ne correspond pas.',
    'date'                 => "Le champ :attribute n'est pas une date valide.",
    'date_format'          => 'Le champ :attribute ne correspond pas au format :format.',
    'different'            => 'Le champ :attribute et :other doivent être différents.',
    'digits'               => 'Le champ :attribute doit être composé de :digits chiffres.',
    'digits_between'       => "Le champ :attribute doit être composé de :min jusqu'à :max chiffres.",
    'email'                => 'Le champ :attribute doit être une adresse email valide.',
    'exists'               => 'Le champ selected :attribute est invalide.',
    'image'                => 'Le champ :attribute doit être une image.',
    'in'                   => 'Le champ selected :attribute est invalide.',
    'integer'              => 'Le champ :attribute doit être un entier.',
    'ip'                   => 'Le champ :attribute doit être une adresse IP valide.',
    'max'                  => [
        'numeric' => 'Le champ :attribute ne doit pas être supérieure à :max.',
        'file'    => 'Le champ :attribute ne doit pas être supérieure à :max kilobytes.',
        'string'  => 'Le champ :attribute ne doit pas être supérieure à :max caractères.',
        'array'   => 'Le champ :attribute ne doit pas avoir plus de :max objets.',
    ],
    'mimes'                => 'Le champ :attribute doit être un fichier de type : :values.',
    'min'                  => [
        'numeric' => 'Le champ :attribute doit être supérieur à :min.',
        'file'    => 'Le champ :attribute  doit être supérieur à :min kilobytes.',
        'string'  => 'Le champ :attribute  doit être supérieur à :min caractères.',
        'array'   => 'Le champ :attribute  doit avoir au moins :min objets.',
    ],
    'not_in'               => 'Le champ sélectionné :attribute est invalide.',
    'numeric'              => 'Le champ :attribute doit être un nombre.',
    'regex'                => 'Le format du champ :attribute est invalide.',
    'required'             => 'Le champ :attribute est obligatoire.',
    'required_if'          => 'Le champ :attribute est obligatoire quand :other est :value.',
    'required_with'        => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_with_all'    => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_without'     => "Le champ :attribute est obligatoire quand :values n'est pas présent.",
    'required_without_all' => "Le champ :attribute est obligatoire quand aucun des champs :values n'est présent.",
    'same'                 => 'Le champ :attribute et :other doivent être identiques.',
    'size'                 => [
        'numeric' => 'La taille du champ :attribute doit être de :size.',
        'file'    => 'Le poids du champ :attribute doit être de :size kilobytes.',
        'string'  => 'Le nombre de caractères du champ :attribute doit être de :size caractères.',
        'array'   => 'Le champ :attribute doit contenir :size objets.',
    ],
    'unique'               => 'Le champ :attribute est déjà utilisé.',
    'url'                  => 'Le format du champ :attribute est invalide.',

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

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
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

    'attributes'           => [],

];
