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
            'title'   => 'Add an Incident',
            'success' => 'Το περιστατικό προστέθηκε.',
            'failure' => 'Κάτι πήγε στραβά με την προσθήκη του περιστατικού.',
        ],
        'edit' => [
            'title'   => 'Edit an Incident',
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
                'title'   => 'Create an Incident Template',
                'message' => 'You should add an Incident Template.',
                'success' => 'Επιτυχής δημιουργία προτύπου.',
                'failure' => 'Κάτι πήγε στραβά με την δημιουργία προτύπου.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
                'success' => 'Επιτυχής ενημέρωση προτύπου!',
                'failure' => 'Κάτι πήγε στραβά με την ενημέρωση του προτύπου',
            ],
            'delete' => [
                'success' => 'The tmplate has been deleted.',
                'failure' => 'The template could not be deleted. Please try again.',
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
            'title'   => 'Edit Scheduled Maintenance',
            'success' => 'Schedule has been updated!',
            'failure' => 'Something went wrong editing the schedule.',
        ],
        'delete' => [
            'success' => 'The schedule has been deleted and will not show on your status page.',
            'failure' => 'The schedule could not be deleted. Please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Components',
        'component_statuses' => 'Component Statuses',
        'listed_group'       => 'Grouped under :name',
        'add'                => [
            'title'   => 'Add a Component',
            'message' => 'You should add a component.',
            'success' => 'Component created.',
            'failure' => 'Something went wrong with the component.',
        ],
        'edit' => [
            'title'   => 'Edit a Component',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component.',
        ],
        'delete' => [
            'success' => 'Component deleted.',
            'failure' => 'The Component could not be deleted. Please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Component group|Component groups',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Add a Component Group',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group.',
            ],
            'edit' => [
                'title'   => 'Edit a Component Group',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group.',
            ],
            'delete' => [
                'success' => 'Component Group deleted.',
                'failure' => 'The Component Group could not be deleted. Please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metrics',
        'add'     => [
            'title'   => 'Create a Metric',
            'message' => 'You should add a Metric.',
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric.',
        ],
        'edit' => [
            'title'   => 'Edit a Metric',
            'success' => 'Metric updated.',
            'failure' => 'Something went wrong with the metric.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will not show on your status page.',
            'failure' => 'The metric could not be deleted. Please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Subscribers',
        'description'  => 'Subscribers will receive email updates when incidents are created.',
        'verified'     => 'Verified',
        'not_verified' => 'Not Verified',
        'add'          => [
            'title'   => 'Add a New Subscriber',
            'success' => 'Subscriber added.',
            'failure' => 'Something went wrong with the component.',
        ],
        'edit' => [
            'title'   => 'Update Subscriber',
            'success' => 'Subscriber updated.',
            'failure' => 'Something went wrong when updating.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Ομάδα',
        'member'      => 'Member',
        'profile'     => 'Profile',
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
        'add'         => [
            'title'   => 'Add a New Team Member',
            'success' => 'Team member added.',
            'failure' => 'Something went wrong with the user.',
        ],
        'edit' => [
            'title'   => 'Update Profile',
            'success' => 'Profile updated.',
            'failure' => 'Something went wrong when updating.',
        ],
        'delete' => [
            'success' => 'User deleted.',
            'failure' => 'Something went wrong when deleting this user.',
        ],
        'invite' => [
            'title'   => 'Invite a New Team Member',
            'success' => 'The users invited.',
            'failure' => 'Something went wrong with the invite.',
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
