<?php

return [
    'feeds' => [
        // 'main' => [
        //     /*
        //      * Here you can specify which class and method will return
        //      * the items that should appear in the feed. For example:
        //      * 'App\Model@getAllFeedItems'
        //      *
        //      * You can also pass an argument to that method:
        //      * ['App\Model@getAllFeedItems', 'argument']
        //      */
        //     'items' => '',

        //     /*
        //      * The feed will be available on this url.
        //      */
        //     'url' => sprintf('%s/feed/rss', env('APP_URL')),

        //     'title' => env('Cachet'),

        //     /*
        //      * The view that will render the feed.
        //      */
        //     'view' => 'feed::feed',
        // ],

        'incidents' => [
            /*
             * Here you can specify which class and method will return
             * the items that should appear in the feed. For example:
             * '\App\Model@getAllFeedItems'
             */
            'items' => 'CachetHQ\Cachet\Models\Incident@getFeedItems',

            /*
             * The feed will be available on this url.
             */
            'url' => '/feed/incidents',

            'title' => 'All Incidents',

            /*
             * Custom view for the items.
             *
             * Defaults to feed::feed if not present.
             */
            'view' => 'feed::feed',
        ],
    ],
];
