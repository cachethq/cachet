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
            1 => 'Operativo',
            2 => 'Problemi sulle prestazioni',
            3 => 'Disservizio parziale',
            4 => 'Interruzione del servizio',
        ],
        'group' => [
            'other' => 'Altri Componenti',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Nessun incidente segnalato',
        'past'          => 'Problemi passati',
        'previous_week' => 'Settimana Precedente',
        'next_week'     => 'Prossima Settimana',
        'scheduled'     => 'Manutenzione programmata',
        'scheduled_at'  => ', programmata il :timestamp',
        'status'        => [
            0 => 'Programmata', // TODO: Hopefully remove this.
            1 => 'Analisi',
            2 => 'Identificato',
            3 => 'Osservazione',
            4 => 'Risolto',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Sistema operativo|[2,Inf] Tutti i sistemi sono operativi',
        'bad'   => '[0,1] Il sistema al momento presenta problemi|[2,Inf] Alcuni sistemi presentano problemi',
        'major' => '[0,1] Il servizio presenta presenta un grave problema|[2,Inf] Alcuni sistemi presentano un grave problema',
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
        'subscribe' => 'Iscriviti per ricevere gli aggiornamenti più recenti',
        'button'    => 'Iscriviti',
        'manage'    => [
            'no_subscriptions' => 'Sei attualmente iscritto a tutti gli aggiornamenti.',
            'my_subscriptions' => 'Sei attualmente iscritto ai seguenti suggerimenti.',
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
            'verify'             => [
                'text'   => "Conferma l'iscrizione a :app_name. \n:link",
                'html'   => 'Per favore conferma la tua iscrizione tramite email su :app_name',
                'button' => 'Conferma iscrizione',
            ],
            'maintenance' => [
                'subject' => '[Manutenzione programmata] :name',
            ],
            'incident' => [
                'subject' => '[Nuova segnalazione] :status: :name',
            ],
            'component' => [
                'subject'       => 'Aggiornamento di stato del componente',
                'text'          => 'Lo stato del componente: :component_name è cambiato. Il nuovo stato del componente è :component_human_status.\nGrazie, :app_name',
                'html'          => '<p>Lo stato del componente :component_name è cambiato. Il nuovo stato del componente è :component_human_status.</p><p>Grazie, :app_name</p>',
                'tooltip-title' => 'Iscriviti alle notifiche di :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Sei stato invitato nel team :app_name status page, per iscriverti segui il prossimo link.\n:link\nGrazie, :app_name",
                'html' => '<p>Sei stato invitato nel team :app_name status page, per iscriverti segui il prossimo link.</p><p><a href=":link">:link</a></p><p>Grazie, :app_name</p>',
            ],
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

    // Other
    'home'            => 'Home',
    'description'     => 'Resta informato sugli ultimi aggiornamenti dei servizi di :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links"> Cachet</a>.',
    'about_this_site' => 'Informazioni sul sito',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status Feed',

];
