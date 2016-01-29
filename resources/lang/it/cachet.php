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
        'status' => [
            1 => 'Operativo',
            2 => 'Problemi di performance',
            3 => 'Interruzioni parziali',
            4 => 'Interruzione prolungata',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Nessun incidente riportato.',
        'past'          => 'Incidenti passati',
        'previous_week' => 'Settimana precedente',
        'next_week'     => 'Settimana successiva',
        'none'          => 'Niente da segnalare',
        'scheduled'     => 'Manutenzione programmata',
        'scheduled_at'  => ', pianificato alle :timestamp',
        'status'        => [
            0 => 'Pianificato', // TODO: Hopefully remove this.
            1 => 'In analisi',
            2 => 'Identificato',
            3 => 'In osservazione',
            4 => 'Risolto',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System operational|[2,Inf] All systems are operational',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Rigenera chiave API',
        'revoke'     => 'Revoca chiave API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Last Hour',
            'hourly'    => 'Ultime 12 ore',
            'weekly'    => 'Settimana',
            'monthly'   => 'Mese',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Iscriviti per ricevere gli aggiornamenti più recenti.',
        'button'    => 'Iscriviti',
        'email'     => [
            'subscribe'          => 'Iscriviti agli aggiornamenti via email.',
            'subscribed'         => 'Sei stato iscritto alle notifiche via email, controlla la tua casella per confermare l\'iscrizione.',
            'verified'           => 'La tua iscrizione via email è stata confermata. Grazie!',
            'unsubscribe'        => 'Annulla l\'iscrizione agli aggiornamenti via email.',
            'unsubscribed'       => 'La tua iscrizione via email è stata cancellata.',
            'failure'            => 'Qualcosa è andato storto con l\'iscrizione.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
                'text'           => "Conferma la tua iscrizione via email agli aggiornamenti dello stato di :app_name.\n:link\Grazie, :app_name",
                'html-preheader' => 'Conferma la tua iscrizione via email agli aggiornamento dello stato di :app_name.',
                'html'           => '<p>Conferma la tua iscrizione via email agli aggiornamenti dello stato di :app_name.</p><p><a href=":link">:link</a></p><p>Grazie, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Una nuova manutenzione è stata pianificata su :app_name.\nGrazie, :app_name",
                'html-preheader' => 'Una nuova manutenzione è stata pianificata su :app_name.',
                'html'           => '<p>Una nuova manutenzione è stata pianificata su :app_name.</p>',
            ],
            'incident' => [
                'text'           => "Un nuovo incidente è stato riportato su :app_name.\nGrazie, :app_name",
                'html-preheader' => 'Un nuovo incidente è stato riportato su :app_name.',
                'html'           => '<p>Un nuovo incidente è stato riportato su :app_name.</p><p>Grazie, :app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'Su questo sito',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
