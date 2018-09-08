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

    'accepted'   => ':attribute が承認されました。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after'      => ':attribute は :date よりも後で無ければいけません。',
    'alpha'      => ':attribute は文字のみ含めることができます。',
    'alpha_dash' => ':attribute は文字と数字とダッシュ(-)のみ含めることができます。',
    'alpha_num'  => ':attribute は文字と数字のみ含めることができます。',
    'array'      => ':attribute は配列である必要があります。',
    'before'     => ':attribute は :date よりも前である必要があります。',
    'between'    => [
        'numeric' => ':attribute は :min から :max の間である必要があります。',
        'file'    => ':attribute は :min から :max KBである必要があります。',
        'string'  => ':attribute は :min から :max 文字である必要があります。',
        'array'   => ':attribute は :min から :max 要素である必要があります。',
    ],
    'boolean'        => ':attribute はtrueかfalseである必要があります。',
    'confirmed'      => ':attribute の確認が一致しません。',
    'date'           => ':attribute が日付の形式ではありません。',
    'date_format'    => ':attribute がフォーマット「 :format 」と一致しません。',
    'different'      => ':attribute と :other は同じではいけません。',
    'digits'         => ':attribute は :digits 数字である必要があります。',
    'digits_between' => ':attribute は :min から :max である必要があります・',
    'email'          => ':attribute はメールアドレスの形式ではありません。',
    'exists'         => '選択した :attribute は無効です。',
    'distinct'       => ':attribute フィールドが重複しています。',
    'filled'         => ':attribute フィールドは必須です。',
    'image'          => ':attribute は画像である必要があります。',
    'in'             => '選択した :attribute が無効です。',
    'in_array'       => ':attribute フィールドが :other に存在しません。',
    'integer'        => ':attribute は整数である必要があります。',
    'ip'             => ':attribute はIPアドレスではありません。',
    'json'           => ':attribute はJSON形式ではありません。',
    'max'            => [
        'numeric' => ':attribute は :max より大きくてはいけません。',
        'file'    => ':attribute は :max KBより大きくてはいけません。',
        'string'  => ':attribute は :max 文字以上ではいけません。',
        'array'   => ':attribute は要素数が :max 以上ではいけません。',
    ],
    'mimes' => ':attribute はファイル形式が :values でないといけません。',
    'min'   => [
        'numeric' => ':attribute は :min より小さくてはいけません。',
        'file'    => ':attribute は :min KBより小さくてはいけません。',
        'string'  => ':attribute は :min 文字より少なくてはいけません。',
        'array'   => ':attribute は :min より少なくてはいけません',
    ],
    'not_in'               => '選択した :attribute は無効です。',
    'numeric'              => ':attribute は数字である必要があります。',
    'present'              => ':attribute フィールドに値が必要です。',
    'regex'                => ':attribute のフォーマットが無効です。',
    'required'             => ':attribute フィールドは必須です。',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => ':attribute は :other 一致する必要があります。',
    'size'                 => [
        'numeric' => ':attribute は :size である必要があります。',
        'file'    => ':attribute は :size KBである必要があります。',
        'string'  => ':attribute は :size 文字である必要があります。',
        'array'   => ':attribute は要素数が :size である必要があります。',
    ],
    'string'   => ':attribute は文字列である必要があります。',
    'timezone' => ':attribute は無効なタイムゾーンです。',
    'unique'   => ':attribute は既に使用されています。',
    'url'      => ':attribute はフォーマットが無効です。',

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
            'rule-name' => 'カスタムメッセージ',
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
