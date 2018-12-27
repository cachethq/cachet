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
        'last_updated' => 'Ultimo aggiornamento :timestamp',
        'status'       => [
            0 => 'Sconosciuto',
            1 => 'Operativo',
            2 => 'Problemi sulle prestazioni',
            3 => 'Disservizio parziale',
            4 => 'Interruzione del servizio',
        ],
        'group' => [
            'other' => 'Altri componenti',
        ],
        'select_all'   => 'Select All',
        'deselect_all' => 'Deselect All',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Nessun incidente segnalato',
        'past'         => 'Problemi passati',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Maintenance',
        'scheduled_at' => ', programmata il :timestamp',
        'posted'       => 'Pubblicato :timestamp',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => 'Analisi',
            2 => 'Identificato',
            3 => 'Osservazione',
            4 => 'Risolto',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Upcoming',
            1 => 'In corso',
            2 => 'Completato',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1]System operational|[2,*]All systems are operational',
        'bad'   => '[0,1]The system is experiencing issues|[2,*]Some systems are experiencing issues',
        'major' => '[0,1]The system is experiencing major issues|[2,*]Some systems are experiencing major issues',
    ],

    'api' => [
        'regenerate' => 'Rigenera API Key',
        'revoke'     => 'Revoca API Key',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Ultima Ora',
            'hourly'    => 'Ultime 12 Ore',
            'weekly'    => 'Settimana',
            'monthly'   => 'Mese',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'           => 'Subscribe to status changes and incident updates',
        'unsubscribe'         => 'Unsubscribe',
        'button'              => 'Iscriviti',
        'manage_subscription' => 'Manage subscription',
        'manage'              => [
            'notifications'       => 'Notifiche',
            'notifications_for'   => 'Manage notifications for',
            'no_subscriptions'    => 'Sei attualmente iscritto a tutti gli aggiornamenti.',
            'update_subscription' => 'Update Subscription',
            'my_subscriptions'    => 'Sei attualmente iscritto ai seguenti suggerimenti.',
            'manage_at_link'      => 'Manage your subscriptions at :link',
        ],
        'email' => [
            'subscribe'          => 'Iscriviti agli aggiornamenti via email.',
            'subscribed'         => 'Ti sei appena iscritto agli aggiornamenti email, controlla la tua casella per confermare la sottoscrizione',
            'verified'           => 'La tua iscrizione &egrave; stata confermata. Grazie!',
            'manage'             => 'Gestisci la tua iscrizione',
            'unsubscribe'        => 'Annulla l\'iscrizione agli aggiornamenti email.',
            'unsubscribed'       => 'La tua iscrizione &egrave; stata rimossa.',
            'failure'            => 'Qualcosa è andato storto con l\'iscrizione.',
            'already-subscribed' => 'Non è possibile iscrivere :email perchè risulta già iscritto.',
        ],
    ],

    'signup' => [
        'title'    => 'Registrati',
        'username' => 'Nome Utente',
        'email'    => 'Email',
        'password' => 'Password',
        'success'  => 'Il tuo account è stato creato.',
        'failure'  => 'Qualcosa non ha funzionato durante la procedura d\'iscrizione.',
    ],

    'system' => [
        'update' => 'E\' disponibile una nuova versione di Cachet. Scopri come fare <a href="https://docs.cachethq.io/docs/updating-cachet">qui</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Chiudi',
        'subscribe' => [
            'title'  => 'Iscriviti agli aggiornamenti dei componenti',
            'body'   => 'Inserisci il tuo indirizzo e-mail per iscriverti agli aggiornamenti di questo componente. Se sei già iscritto, riceverai già email relative a questo componente.',
            'button' => 'Iscriviti',
        ],
    ],

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details and updates about the :name incident that occurred on :date',
            'schedule'  => 'Details about the scheduled maintenance period :name starting :startDate',
            'subscribe' => 'Subscribe to :app in order to receive updates of incidents and scheduled maintenance periods',
            'overview'  => 'Resta informato sugli ultimi aggiornamenti dei servizi di :app.',
        ],
    ],

    // Other
    'home'            => 'Home',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links"> Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'Informazioni sul sito',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
