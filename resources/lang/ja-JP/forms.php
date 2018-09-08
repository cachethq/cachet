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

    // Setup form fields
    'setup' => [
        'email'            => 'メールアドレス',
        'username'         => 'ユーザー名',
        'password'         => 'パスワード',
        'site_name'        => 'サイト名',
        'site_domain'      => 'サイトのドメイン',
        'site_timezone'    => 'タイムゾーン',
        'site_locale'      => '言語',
        'enable_google2fa' => 'Googleの2段階認証を有効にする',
        'cache_driver'     => 'キャッシュドライバー',
        'queue_driver'     => 'キュードライバー',
        'session_driver'   => 'セッションドライバー',
        'mail_driver'      => 'メールドライバー',
        'mail_host'        => 'メールサーバーアドレス',
        'mail_address'     => 'メールアドレス',
        'mail_username'    => 'ユーザー名',
        'mail_password'    => 'パスワード',
    ],

    // Login form fields
   'login' => [
        'login'         => 'ユーザー名またはメールアドレス',
        'email'         => 'メールアドレス',
        'password'      => 'パスワード',
        '2fauth'        => '認証コード',
        'invalid'       => 'ユーザ名またはパスワードが違います',
        'invalid-token' => '無効なトークン',
        'cookies'       => 'ログインするにはクッキーを有効にする必要があります。',
        'rate-limit'    => '試行可能回数の上限に達しました。',
        'remember_me'   => 'ユーザー名またはパスワードを忘れた',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => '名前',
        'status'             => '状況',
        'component'          => 'サービス',
        'component_status'   => 'サービス状況',
        'message'            => 'メッセージ',
        'message-help'       => 'Markdown記法を利用することができます。',
        'occurred_at'        => '発生日時',
        'notify_subscribers' => '購読者にメール通知する',
        'notify_disabled'    => '計画されたメンテナンスは通知が無効化されます。',
        'visibility'         => '公開範囲',
        'stick_status'       => '固定している障害情報',
        'stickied'           => '固定中',
        'not_stickied'       => '固定していません',
        'public'             => 'ログインしていないユーザーにも表示する(Public)',
        'logged_in_only'     => 'ログイン済みユーザーのみに表示する',
        'templates'          => [
            'name'     => '名前',
            'template' => 'テンプレート',
            'twig'     => 'テンプレートは<a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>言語のテンプレートを使用することができます。',
        ],
    ],

    'schedules' => [
        'name'         => '名前',
        'status'       => '状況',
        'message'      => 'メッセージ',
        'message-help' => 'Markdown記法を利用することができます。',
        'scheduled_at' => '開始日時',
        'completed_at' => '終了予定日時',
        'templates'          => [
            'name'     => '名前',
            'template' => 'テンプレート',
            'twig'     => 'テンプレートは<a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>言語のテンプレートを使用することができます。',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => '名前',
        'status'      => '状況',
        'group'       => 'グループ',
        'description' => '説明',
        'link'        => 'リンク(httpから入力して下さい)',
        'tags'        => 'タグ',
        'tags-help'   => 'カンマ(,)で複数指定することができます。',
        'enabled'     => 'サービスをステータスページに表示する',

        'groups' => [
            'name'               => '名前',
            'collapsing'         => 'アクセス時のグループの表示方法',
            'visible'            => '展開して表示させる',
            'collapsed'          => '閉じて表示させる',
            'collapsed_incident' => '障害発生時のみ展開して表示させる',
            'visibility'         => '公開範囲',
            'visibility_public'        => 'ログインしていないユーザーにも表示する(Public)',
            'visibility_authenticated' => 'ログイン済みユーザーのみに表示する',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => '名前',
        'description'        => '説明',
        'start_at'           => '開始日時',
        'timezone'           => 'タイムゾーン',
        'schedule_frequency' => '頻度 (秒単位)',
        'completion_latency' => '完了までの待機時間 (秒単位)',
        'group'              => 'グループ',
        'active'             => '有効化する',
        'groups'             => [
            'name' => 'グループ名',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => '名前',
        'suffix'           => '接尾語',
        'description'      => '説明',
        'description-help' => 'Markdown記法を利用することができます。',
        'display-chart'    => 'ステータスページにチャートを表示する',
        'default-value'    => '初期値',
        'calc_type'        => '計算方法',
        'type_sum'         => '合計',
        'type_avg'         => '平均',
        'places'           => '小数点以下の桁数',
        'default_view'     => 'デフォルトのビュー',
        'threshold'        => 'しきい値',
        'visibility'               => '公開範囲',
        'visibility_authenticated' => '認証済みユーザーのみ公開',
        'visibility_public'        => 'ログインしていないユーザーにも表示する(Public)',
        'visibility_hidden'        => '非公開',

        'points' => [
            'value' => '値',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'                             => 'サイト名',
            'site-url'                              => 'サイトのURL',
            'display-graphs'                        => 'ステータスページにグラフを表示する',
            'about-this-page'                       => 'このページについて',
            'days-of-incidents'                     => '表示する過去の障害(例:3と入力すると3日分表示します)',
            'time_before_refresh'                   => 'ステータスページの更新頻度(秒単位)',
            'major_outage_rate'                     => '停止と判断するしきい値 (in %)',
            'banner'                                => 'バナー画像',
            'banner-help'                           => '横幅が930px以内の画像をアップロードしてください。',
            'subscribers'                           => '更新情報の購読を許可する',
            'suppress_notifications_in_maintenance' => 'メンテナンス中障害が発生した際に通知を停止する',
            'skip_subscriber_verification'          => '購読の際にメール認証を行わないようにする(スパム防止のため非推奨)',
            'automatic_localization'                => 'アクセス元の言語に合わせてステータスページを表示する',
            'enable_external_dependencies'          => 'サードパーティーの依存を有効にする (Google Fonts, Trackersなど)',
            'show_timezone'                         => 'ステータスページにタイムゾーンを表示する',
            'only_disrupted_days'                   => '障害が発生した日のみをタイムラインに表示する',
        ],
        'analytics' => [
            'analytics_google'       => 'Googleアナリティクスコード',
            'analytics_gosquared'    => 'GoSquaredアナリティクスコード',
            'analytics_piwik_url'    => 'PiwikサーバーのURL(https://から入力して下さい)',
            'analytics_piwik_siteid' => 'PiwikのサイトID',
        ],
        'localization' => [
            'site-timezone'        => 'タイムゾーン',
            'site-locale'          => '言語',
            'date-format'          => '日付の表示方法',
            'incident-date-format' => '障害情報の日付の表示方法',
        ],
        'security' => [
            'allowed-domains'      => '許可するドメイン',
            'allowed-domains-help' => 'カンマ(,)で複数指定できます。上記に入力したドメインは自動で許可します。',
            'always-authenticate'       => '常に認証する',
            'always-authenticate-help'  => 'ページを表示する際に常にログインを要求させることができます',
        ],
        'stylesheet' => [
            'custom-css' => 'カスタムスタイルシート',
        ],
        'theme' => [
            'background-color'        => '背景色',
            'background-fills'        => '背景の塗りつぶし',
            'banner-background-color' => 'バナーの背景色',
            'banner-padding'          => 'バナーの空白',
            'fullwidth-banner'        => '全幅バナーにする',
            'text-color'              => '文字色',
            'dashboard-login'         => 'ダッシュボードページへのリンクをフッター部分に表示する',
            'reds'                    => 'レッド（エラー表示に使用されます）',
            'blues'                   => 'ブルー（インフォメーション表示に使用されます）',
            'greens'                  => 'グリーン（成功の表示に使用されます）',
            'yellows'                 => 'イエロー（アラート表示に使用されます）',
            'oranges'                 => 'オレンジ（通知表示に使用されます）',
            'metrics'                 => '評価基準のグラフ色',
            'links'                   => 'リンク',
        ],
    ],

    'user' => [
        'username'       => 'ユーザー名',
        'email'          => 'メールアドレス',
        'password'       => 'パスワード',
        'api-token'      => 'APIトークン',
        'api-token-help' => 'APIトークンを再生成すると、既存のAPIトークンは無効化されます。',
        'gravatar'       => 'プロフィール画像はGravatarから変更することができます。',
        'user_level'     => '権限設定',
        'levels'         => [
            'admin' => '管理者',
            'user'  => 'ユーザー',
        ],
        '2fa' => [
            'help' => 'セキュリティを強化するために2段階認証を有効化することをおすすめします。 <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a>または、互換性のあるアプリをスマートフォンにインストールしてご利用ください。',
        ],
        'team' => [
            'description' => '招待するチームメンバーのメールアドレスをここに入力して下さい。',
            'email'       => 'Email #:id',
        ],
    ],

    'general' => [
        'timezone' => 'タイムゾーン',
    ],

    // Buttons
    'add'    => '追加',
    'save'   => '保存',
    'update' => '更新',
    'create' => '作成',
    'edit'   => '編集',
    'delete' => '削除',
    'submit' => '送信',
    'cancel' => 'キャンセル',
    'remove' => '削除',
    'invite' => '招待',
    'signup' => '新規登録',
    'manage_updates' => '更新の管理',

    // Other
    'optional' => '※任意',
];
