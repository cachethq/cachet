<?php

return [

    // Setup form fields
    'setup' => [
        'email'          => 'Email',
        'username'       => 'Username',
        'password'       => 'Password',
        'site_name'      => 'Site Name',
        'site_domain'    => 'Site Domain',
        'site_timezone'  => 'Select your timezone',
        'site_locale'    => 'Select your language',
    ],

    // Login form fields
    'login' => [
        'email'    => 'Email',
        'password' => 'Password',
    ],

    // Incidents form fields
    'incidents' => [
        'name'         => 'Name',
        'status'       => 'Status',
        'message'      => 'Message',
        'message-help' => 'You may also use Markdown.',

        'templates' => [
            'name'     => 'Name',
            'template' => 'Template',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Name',
        'status'      => 'Status',
        'group'       => 'Group',
        'description' => 'Description',
        'link'        => 'Link',
        'tags'        => 'Tags',
        'tags-help'   => 'Comma separated.',

        'groups' => [
            'name' => 'Name',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'         => 'Site Name',
            'site-url'          => 'Site URL',
            'site-timezone'     => 'Site Timezone',
            'site-locale'       => 'Site Language',
            'about-this-page'   => 'About this page',
            'days-of-incidents' => 'How many days of incidents to show?',
            'banner'            => 'Banner Image',
            'banner-help'       => "It's recommended that you upload files no bigger than 930px wide .",
        ],
        'security' => [
            'allowed-domains'      => 'Allowed domains',
            'allowed-domains-help' => 'Comma separated. The domain set above is automatically allowed by default.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color' => 'Background Color',
            'text-color'       => 'Text Color',
        ],
    ],

    'user' => [
        'username'     => 'Username',
        'email'        => 'Email',
        'password'     => 'Password',
        'api-key'      => 'API Key',
        'api-key-help' => 'Regenerating your API key will revoke all existing applications.',
    ],

    // Buttons
    'add'    => 'Add',
    'save'   => 'Save',
    'update' => 'Update',
    'create' => 'Create',
    'edit'   => 'Edit',
    'delete' => 'Delete',
    'submit' => 'Submit',
    'cancel' => 'Cancel',
    'remove' => 'Remove'
];
