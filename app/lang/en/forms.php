<?php

return [

    // Setup form fields
    'setup' => [
        'email'       => 'Email',
        'username'    => 'Username',
        'password'    => 'Password',
        'site_name'   => 'Site Name',
        'site_domain' => 'Site Domain'
    ],

    // Login form fields
    'login' => [
        'email'    => 'Email',
        'password' => 'Password',
    ],

    // Incidents form fields
    'incidents' => [
        'name' => 'Incident Name',
        'status' => 'Incident Status',
        'message' => 'Message',
        'message-help' => 'You may also use Markdown.',

        'templates' => [
            'name' => 'Template Name',
            'template' => 'Template'
        ]
    ],

    // Components form fields
    'components' => [
        'name' => 'Name',
        'status' => 'Status',
        'description' => 'Description',
        'link' => 'Link',
        'tags' => 'Tags',
        'tag-help' => 'Comma separated.'
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name' => 'Site Name',
            'site-url' => 'Site URL',
            'about-this-page' => 'About this page',
            'days-of-incidents' => 'How many days of incidents to show?',
            'banner' => 'Banner Image',
            'banner-help' => "It's recommended that you upload files no bigger than 930px wide ."
        ],
        'security' => [
            'allowed-domains' => 'Allowed Domains <em>Comma Seperated</em>',
            'allowed-domains-help' => 'The domain set above is automatically allowed by default.'
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet'
        ],
        'theme' => [
            'background-color' => 'Background Color',
            'text-color' => 'Text Color'
        ]
    ],

    'user' => [
        'username' => 'Username',
        'email'    => 'Email',
        'password' => 'Password'
    ],

    // Buttons
    'save' => 'Save',
    'create' => 'Create',
    'edit' => 'Edit',
    'delete' => 'Delete',
    'submit' => 'Submit',
    'cancel' => 'Cancel',
    'remove' => 'Remove'
];