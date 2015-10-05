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

    'accepted'   => 'O campo :attribute deve ser aceito.',
    'active_url' => 'O campo :attribute não é uma URL válida.',
    'after'      => 'O campo :attribute deverá conter uma data posterior a :date.',
    'alpha'      => 'O campo :attribute deverá conter apenas letras.',
    'alpha_dash' => 'O campo :attribute só pode conter letras, números, e hifens.',
    'alpha_num'  => 'O campo :attribute só pode conter letras e números.',
    'array'      => 'O campo :attribute deve ser um vetor.',
    'before'     => 'O campo :attribute deverá conter uma data anterior a :date.',
    'between'    => [
        'numeric' => 'O campo :attribute deverá ter um valor entre :min - :max.',
        'file'    => 'O campo :attribute deverá ter um tamanho entre :min - :max kilobytes.',
        'string'  => 'O campo :attribute deverá conter entre :min - :max caracteres.',
        'array'   => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean'        => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'      => 'A confirmação para o campo :attribute não coincide.',
    'date'           => 'O :attribute não é uma data válida.',
    'date_format'    => 'O :attribute não corresponde ao formato :format.',
    'different'      => 'O :attribute e :other devem ser diferentes.',
    'digits'         => 'O campo :attribute deverá conter :digits dígitos.',
    'digits_between' => 'O :attribute deve ter entre :min e :max dígitos.',
    'email'          => 'A: attribute deve ser um endereço de email válido.',
    'exists'         => 'O :attribute selecionado é inválido.',
    'image'          => 'O :attribute deve ser uma imagem.',
    'in'             => 'O :attribute selecionado é inválido.',
    'integer'        => 'O :attribute deve ser um número inteiro.',
    'ip'             => 'O :attribute deve ser um endereço de IP válido.',
    'max'            => [
        'numeric' => 'O :attribute não pode ser maior do que :max.',
        'file'    => 'O campo :attribute não deverá ter um tamanho superior a :max kilobytes.',
        'string'  => 'O :attribute não pode ser maior do que :max caracteres.',
        'array'   => 'A: atributo não pode ter mais de que :max itens.',
    ],
    'mimes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min'   => [
        'numeric' => 'O :attribute deve ter pelo menos :min.',
        'file'    => 'O :attribute deve ter pelo menos :min kilobytes.',
        'string'  => 'O :attribute deve ter pelo menos :min caracteres.',
        'array'   => 'O :attribute deve ter pelo menos :min itens.',
    ],
    'not_in'               => 'O :attribute selecionado é inválido.',
    'numeric'              => 'O :attribute deve ser um número.',
    'regex'                => 'O formato de :attribute é inválido.',
    'required'             => 'O campo de :attribute é obrigatório.',
    'required_if'          => 'O campo de :attribute é obrigatório quando :other é :value.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo de :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo de :attribute é obrigatório quando qualquer um dos :values estão presentes.',
    'same'                 => 'O :attribute e :other devem corresponder.',
    'size'                 => [
        'numeric' => 'O :attribute deve ser :size.',
        'file'    => 'O :attribute deve ter :size kilobytes.',
        'string'  => 'O :attribute deve ter :size caracteres.',
        'array'   => 'O :attribute deve ter :size itens.',
    ],
    'string'   => 'O :attribute deve ser uma string.',
    'unique'   => 'O :attribute já existe.',
    'url'      => 'O formato de :attribute é inválido.',
    'timezone' => 'O :attribute deve ser uma zona válida.',

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
            'rule-name' => 'Mensagem personalizada',
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
