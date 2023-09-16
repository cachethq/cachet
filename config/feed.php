<?php

return [
    'feeds' => [
        'incidents' => [
            /*
             * Here you can specify which class and method will return
             * the items that should appear in the feed. For example:
             * [App\Model::class, 'getAllFeedItems']
             *
             * You can also pass an argument to that method. Note that their key must be the name of the parameter:
             * [App\Model::class, 'getAllFeedItems', 'parameterName' => 'argument']
             */
            'items' => 'CachetHQ\Cachet\Models\Incident@getFeedItems',

            /*
             * The feed will be available on this url.
             */
            'url' => '/feed/incidents',

            'title' => 'Incidents',
            'description' => 'All Incidents',
            'language' => config('app.locale'),

            /*
             * The format of the feed. Acceptable values are 'rss', 'atom', or 'json'.
             */
            'format' => 'atom',

            /*
             * The view that will render the feed.
             */
            'view' => 'feed::atom',
        ],
        'maintenance' => [
            /*
             * Here you can specify which class and method will return
             * the items that should appear in the feed. For example:
             * [App\Model::class, 'getAllFeedItems']
             *
             * You can also pass an argument to that method. Note that their key must be the name of the parameter:
             * [App\Model::class, 'getAllFeedItems', 'parameterName' => 'argument']
             */
            'items' => 'CachetHQ\Cachet\Models\Schedule@getFeedItems',

            /*
             * The feed will be available on this url.
             */
            'url' => '/feed/maintenance',

            'title' => 'Maintenance',
            'description' => 'All Maintenance Windows',
            'language' => config('app.locale'),

            /*
             * The format of the feed. Acceptable values are 'rss', 'atom', or 'json'.
             */
            'format' => 'atom',

            /*
             * The view that will render the feed.
             */
            'view' => 'feed::atom',
        ],
    ],
];
