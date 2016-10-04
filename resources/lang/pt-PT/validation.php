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

    'accepted'   => 'O :attribute tem de ser aceite.',
    'active_url' => 'O :attribute não é um URL válido.',
    'after'      => 'O :attribute deverá ser uma data posterior a :date.',
    'alpha'      => 'O campo :attribute deverá conter apenas letras.',
    'alpha_dash' => 'O :attribute deverá apenas conter letras, números e hífens.',
    'alpha_num'  => 'O campo :attribute só pode conter letras e números.',
    'array'      => 'O campo :attribute deve ser um vetor.',
    'before'     => 'O campo :attribute deverá conter uma data anterior a :date.',
    'between'    => [
        'numeric' => 'O campo :attribute deverá conter uma data anterior a :date.',
        'file'    => 'The :attribute must be between :min and :max.',
        'string'  => 'The :attribute must be between :min and :max kilobytes.',
        'array'   => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean'        => 'O campo :attribute deve ter entre :min e :max itens.',
    'confirmed'      => 'The :attribute field must be true or false.',
    'date'           => 'The :attribute confirmation does not match.',
    'date_format'    => 'The :attribute is not a valid date.',
    'different'      => 'The :attribute does not match the format :format.',
    'digits'         => 'The :attribute and :other must be different.',
    'digits_between' => 'The :attribute must be :digits digits.',
    'email'          => 'The :attribute must be between :min and :max digits.',
    'exists'         => 'The :attribute must be a valid email address.',
    'distinct'       => 'The :attribute field has a duplicate value.',
    'filled'         => 'O formato de :attribute é inválido.',
    'image'          => 'O :attribute deve ser uma imagem.',
    'in'             => 'O :attribute deve ser uma imagem.',
    'in_array'       => 'The :attribute field does not exist in :other.',
    'integer'        => 'The selected :attribute is invalid.',
    'ip'             => 'The :attribute must be an integer.',
    'json'           => 'O :attribute tem que ser uma string JSON válida.',
    'max'            => [
        'numeric' => 'The :attribute must be a valid IP address.',
        'file'    => 'The :attribute may not be greater than :max.',
        'string'  => 'The :attribute may not be greater than :max kilobytes.',
        'array'   => 'A: atributo não pode ter mais de que :max itens.',
    ],
    'mimes' => 'A: atributo não pode ter mais de que :max itens.',
    'min'   => [
        'numeric' => 'The :attribute must be a file of type: :values.',
        'file'    => 'O :attribute deve ter pelo menos :min kilobytes.',
        'string'  => 'O :attribute deve ter pelo menos :min kilobytes.',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => 'The selected :attribute is invalid.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute must be a number.',
    'required'             => 'O formato de :attribute é inválido.',
    'required_if'          => 'The :attribute field is required.',
    'required_unless'      => 'O campo :attribute é obrigatório a não ser que :other estiver em :values.',
    'required_with'        => 'The :attribute field is required when :other is :value.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => 'The :attribute and :other must match.',
        'file'    => 'O :attribute deve ter :size kilobytes.',
        'string'  => 'O :attribute deve ter :size caracteres.',
        'array'   => 'O :attribute deve ter :size caracteres.',
    ],
    'string'   => 'The :attribute must contain :size items.',
    'timezone' => 'O :attribute deve ser uma zona válida.',
    'unique'   => 'O :attribute já existe.',
    'url'      => 'O formato de :attribute é inválido.',

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
            'rule-name' => 'Mensagem-personalizada',
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
