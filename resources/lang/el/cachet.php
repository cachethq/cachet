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
    // Components
    'components' => [
        'last_updated' => 'Last updated :timestamp',
        'status'       => [
            1 => 'Λειτουργικό',
            2 => 'Προβλήματα επιδόσης',
            3 => 'Μερική Διακοπή',
            4 => 'Σημαντική Διακοπή',
        ],
        'group' => [
            'other' => 'Other Components',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Δεν υπάρχουν περιστατικά',
        'past'          => 'Προηγούμενα περιστατικά',
        'previous_week' => 'Προηγούμενη εβδομάδα',
        'next_week'     => 'Επόμενη εβδομάδα',
        'scheduled'     => 'Προγραμματισμένη Συντήρηση',
        'scheduled_at'  => ', προγραμματισμένη :timestamp',
        'status'        => [
            0 => 'Προγραμματίστηκε', // TODO: Hopefully remove this.
            1 => 'Διερευνάται',
            2 => 'Προσδιορίστηκε',
            3 => 'Παρακολούθηση',
            4 => 'Διορθωμένο',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Το σύστημα βρίσκεται σε λειτουργία[2,Inf] Όλα τα συστήματα βρίσκονται σε λειτουργία',
        'bad'   => '[0,1] Το σύστημα αντιμετωπίζει προβλήματα|[2,Inf] Κάποια συστήματα αντιμετωπίζουν προβλήματα',
        'major' => '[0,1] Η υπηρεσία αντιμετωπίζει μία σημαντική διακοπή|[2,Inf] Κάποια συστήματα αντιμετωπίζουν μία σημαντική διακοπή',
    ],

    'api' => [
        'regenerate' => 'Αλλαγή κλειδιού API',
        'revoke'     => 'Ακύρωση κλειδιού API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Τελευταία ώρα',
            'hourly'    => 'Τελευταίες 12 ώρες',
            'weekly'    => 'Εβδομάδα',
            'monthly'   => 'Μήνας',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Εγγραφείτε για να λάβετε τις τελευταίες ενημερώσεις',
        'button'    => 'Εγγραφή',
        'manage'    => [
            'no_subscriptions' => 'You\'re currently subscribed to all updates.',
            'my_subscriptions' => 'You\'re currently subscribed to the following updates.',
        ],
        'email' => [
            'subscribe'          => 'Εγγραφή στις ενημερώσεις μέσω email.',
            'subscribed'         => 'Έχετε εγγραφεί στις ενημερώσεις μέσω email, παρακαλώ ελέγξτε το email σας για να επιβεβαιώσετε την εγγραφή σας.',
            'verified'           => 'Η εγγραφή σας έχει επιβεβαιωθεί. Ευχαριστούμε!',
            'manage'             => 'Manage your subscription',
            'unsubscribe'        => 'Διαγραφή από τις ενημερώσεις μέσω email.',
            'unsubscribed'       => 'Η εγγραφή σας έχει ακυρωθεί.',
            'failure'            => 'Προέκυψε ένα σφάλμα σχετικά με την εγγραφή.',
            'already-subscribed' => 'Δεν ήταν δυνατή η εγγραφή του :email επειδή είναι ήδη εγγεγραμμένο.',
            'verify'             => [
                'text'   => "Please confirm your email subscription to :app_name status updates.\n:link",
                'html'   => '<p>Please confirm your email subscription to :app_name status updates.</p>',
                'button' => 'Confirm Subscription',
            ],
            'maintenance' => [
                'subject' => '[Maintenance Scheduled] :name',
            ],
            'incident' => [
                'subject' => '[New Incident] :status: :name',
            ],
            'component' => [
                'subject'       => 'Ενημέρωση κατάστασης στοιχείου',
                'text'          => 'Η κατάσταση του στοιχείου :component_name έχει ενημερωθεί. Το στοιχείο είναι πλέον :component_human_status.\nΕυχαριστούμε, :app_name',
                'html'          => '<p>Η κατάσταση του στοιχείου :component_name έχει ενημερωθεί. Το στοιχείο είναι πλέον :component_human_status.</p><p>Ευχαριστούμε, :app_name</p>',
                'tooltip-title' => 'Εγγραφείτε στις ενημερώσεις σχετικά με :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Έχετε προσκληθεί στη σελίδα ενημερώσεων της ομάδας :app_name, εγγραφείτε στον παρακάτω σύνδεσμο.\n:link\nΕυχαριστούμε, :app_name",
                'html' => '<p>Έχετε προσκληθεί στη σελίδα ενημερώσεων της ομάδας :app_name, εγγραφείτε στον παρακάτω σύνδεσμο.</p><p><a href=":link">:link</a></p><p>Ευχαριστούμε, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Εγγραφή',
        'username' => 'Username',
        'email'    => 'E-mail',
        'password' => 'Κωδικός πρόσβασης',
        'success'  => 'Ο λογαριασμός σας έχει δημιουργηθεί.',
        'failure'  => 'Προέκυψε κάποιο σφάλμα σχετικά με την εγγραφή.',
    ],

    'system' => [
        'update' => 'Μια ενημερωμένη έκδοση του Cache είναι διαθέσιμη. Δείτε πως μπορείτε να αναβαθμίσετε <a href="https://docs.cachethq.io/docs/updating-cachet">εδώ</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Κλείσιμο',
        'subscribe' => [
            'title'  => 'Εγγραφή στις ενημερώσεις στοιχείων',
            'body'   => 'Συμπληρώστε το email σας για να εγγραφείτε στις ενημερώσεις αυτού του στοιχείου. Αν είστε ήδη εγγεγραμένος, τότε λαμβάνεται ήδη emails για αυτό το στοιχείο.',
            'button' => 'Εγγραφή',
        ],
    ],

    // Other
    'home'            => 'Home',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Σχετικά με αυτόν τον ιστότοπο',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
