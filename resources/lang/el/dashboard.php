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

    'dashboard' => 'Πίνακας Ελέγχου',

    // Incidents
    'incidents' => [
        'title'                    => 'Περιστατικά &amp; Πρόγραμμα',
        'incidents'                => 'Περιστατικά',
        'logged'                   => '{0} Δεν υπάρχουν περιστατικά, καλλή δουλειά.|Έχετε καταγράψει ένα περιστατικό.|Έχετε ανάφερει <strong>:count</strong> περιστατικά.',
        'incident-create-template' => 'Δημιουργία προτύπου',
        'incident-templates'       => 'Πρότυπα Περιστατικών',
        'add'                      => [
            'title'   => 'Report an incident',
            'success' => 'Το περιστατικό προστέθηκε.',
            'failure' => 'Κάτι πήγε στραβά με την προσθήκη του περιστατικού.',
        ],
        'edit' => [
            'title'   => 'Edit an incident',
            'success' => 'Επεξεργασία περιστατικού επιτυχής.',
            'failure' => 'Κάτι πήγε στραβά με την προσθήκη του περιστατικού.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted. Please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Πρότυπα Περιστατικών',
            'add'   => [
                'title'   => 'Create an incident template',
                'message' => 'You should add an incident template.',
                'success' => 'Επιτυχής δημιουργία προτύπου.',
                'failure' => 'Κάτι πήγε στραβά με την δημιουργία προτύπου.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
                'success' => 'Επιτυχής ενημέρωση προτύπου!',
                'failure' => 'Κάτι πήγε στραβά με την ενημέρωση του προτύπου',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted. Please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Προγραμματισμένη Συντήρηση',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Προγραμματισμένη στις :timestamp',
        'add'          => [
            'title'   => 'Προσθήκη Προγραμματισμένης Συντήρησης',
            'success' => 'Επιτυχής προσθήκη προγραμματισμού.',
            'failure' => 'Κάτι πήγε στραβά με την προσθήκη του προγραμματισμού.',
        ],
        'edit' => [
            'title'   => 'Edit scheduled maintenance',
            'success' => 'Scheduled maintenance has been edited!',
            'failure' => 'The scheduled maintenance could not be edited. Please try again.',
        ],
        'delete' => [
            'success' => 'Scheduled maintenance has been deleted!',
            'failure' => 'The scheduled maintenance could not be deleted. Please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Components',
        'component_statuses' => 'Component Statuses',
        'listed_group'       => 'Grouped under :name',
        'add'                => [
            'title'   => 'Add a component',
            'message' => 'You should add a component.',
            'success' => 'Component has been added!',
            'failure' => 'The component could not be added. Please try again.',
        ],
        'edit' => [
            'title'   => 'Edit a component',
            'success' => 'Component has been updated!',
            'failure' => 'The component could not be updated. Please try again.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'The component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Component group|Component groups',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Add a component group',
                'success' => 'Component group has been added!',
                'failure' => 'The component group could not be added. Please try again.',
            ],
            'edit' => [
                'title'   => 'Edit a component group',
                'success' => 'Component group has been edited!',
                'failure' => 'The component group could not be edited. Please try again.',
            ],
            'delete' => [
                'success' => 'Component group has been deleted!',
                'failure' => 'The component group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrics',
        'add'     => [
            'title'   => 'Create a metric',
            'message' => 'You should add a metric.',
            'success' => 'Metric has been added!',
            'failure' => 'The metric could not be added. Please try again.',
        ],
        'edit' => [
            'title'   => 'Edit a metric',
            'success' => 'Metric has been updated!',
            'failure' => 'The metric could not be updated. Please try again.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Subscribers',
        'description'  => 'Subscribers will receive email updates when incidents are created.',
        'verified'     => 'Verified',
        'not_verified' => 'Not verified',
        'add'          => [
            'title'   => 'Add a new subscriber',
            'success' => 'Subscriber has been added!',
            'failure' => 'The subscriber could not be added. Please try again.',
        ],
        'edit' => [
            'title'   => 'Update subscriber',
            'success' => 'Subscriber has been updated!',
            'failure' => 'The subscriber could not be updated. Please try again.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Ομάδα',
        'member'      => 'Member',
        'profile'     => 'Profile',
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
        'add'         => [
            'title'   => 'Add a new team member',
            'success' => 'Team member has been added!',
            'failure' => 'The team member could not be added. Please try again.',
        ],
        'edit' => [
            'title'   => 'Update profile',
            'success' => 'Team member has been updated!',
            'failure' => 'The team member could not be updated. Please try again.',
        ],
        'delete' => [
            'success' => 'Team member has been deleted and will no longer have access to the dashboard!',
            'failure' => 'The team member could not be added. Please try again.',
        ],
        'invite' => [
            'title'   => 'Invite a new team member',
            'success' => 'An invite has been sent',
            'failure' => 'The invite could not be sent. Please try again.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Ρυθμίσεις',
        'app-setup' => [
            'app-setup'   => 'Application Setup',
            'images-only' => 'Only images may be uploaded.',
            'too-big'     => 'The file you uploaded is too big. Upload an image smaller than :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'security' => [
            'security'   => 'Security',
            'two-factor' => 'Users without two-factor authentication',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Θέμα',
        ],
        'edit' => [
            'success' => 'Settings saved.',
            'failure' => 'Settings could not be saved.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Σύνδεση',
        'logged_in'  => 'You\'re logged in.',
        'welcome'    => 'Welcome Back!',
        'two-factor' => 'Please enter your token.',
    ],

    // Sidebar footer
    'help'        => 'Βοήθεια',
    'status_page' => 'Σελίδα Κατάστασης',
    'logout'      => 'Έξοδος',

    // Notifications
    'notifications' => [
        'notifications' => 'Ειδοποιήσεις',
        'awesome'       => 'Φανταστικό.',
        'whoops'        => 'Ούπς.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your status page!',
        'message' => 'Η σελίδα κατάστασής σας είναι σχεδόν έτοιμη! Ίσως να θέλετε να κάνετε κάποιες παραμετροποιήσεις',
        'close'   => 'Απλά πηγαίνε κατευθείαν στον πίνακα ελέγχου μου',
        'steps'   => [
            'component'  => 'Δημιουργία συστατικών',
            'incident'   => 'Δημιουργία περιστατικών',
            'customize'  => 'Προσαρμογή',
            'team'       => 'Προσθήκη χρηστών',
            'api'        => 'Δημιουργία κλειδιού API',
            'two-factor' => 'Two Factor Authentication',
        ],
    ],

];
