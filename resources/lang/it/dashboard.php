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

    'dashboard' => 'Dashboard',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidenti &amp; Pianificazione',
        'incidents'                => 'Incidenti',
        'logged'                   => '{0} Non ci sono incidenti, ottimo lavoro!|Hai registrato un incidente.|Hai riportato <strong>:count</strong> incidenti.',
        'incident-create-template' => 'Crea modello',
        'incident-templates'       => 'Modelli incidente',
        'add'                      => [
            'title'   => 'Aggiungi un incidente',
            'success' => 'Incidente aggiunto.',
            'failure' => 'Qualcosa è andato storto con l\'incidente.',
        ],
        'edit' => [
            'title'   => 'Modifica un incidente',
            'success' => 'Incidente aggiornato.',
            'failure' => 'Qualcosa è andato storto con l\'incidente.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Modelli incidente',
            'add'   => [
                'title'   => 'Crea un modello di incidente',
                'success' => 'Modello creato.',
                'failure' => 'Qualcosa è andato storto con il modello di incidente.',
            ],
            'edit' => [
                'title'   => 'Modifica modello',
                'success' => 'Il modello è stato aggiornato.',
                'failure' => 'Qualcosa è andato storto con il modello di incidente.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Manutenzione programmata',
        'scheduled_at' => 'Pianificato alle :timestamp',
        'add'          => [
            'title'   => 'Aggiungi Manutenzione programmata',
            'success' => 'Pianificazione aggiunta.',
            'failure' => 'Qualcosa è andato storto con la pianificazione.',
        ],
        'edit' => [
            'title'   => 'Modifica Manutenzione programmata',
            'success' => 'La pianificazione è stata aggiornata.',
            'failure' => 'Qualcosa è andato storto con la pianificazione.',
        ],
        'delete' => [
            'success' => 'La pianificazione è stata eliminate e non verrà visualizzata nella Status Page.',
            'failure' => 'Non è stato possibile eliminare la pianificazione. Riprova.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Componenti',
        'component_statuses' => 'Stato componenti',
        'listed_group'       => 'Raggruppati sotto :name',
        'add'                => [
            'title'   => 'Aggiungi un componente',
            'message' => 'Dovresti aggiungere un componente.',
            'success' => 'Componente creato.',
            'failure' => 'Qualcosa è andato storto con il componente.',
        ],
        'edit' => [
            'title'   => 'Modifica un componente',
            'success' => 'Componente aggiornato.',
            'failure' => 'Qualcosa è andato storto con il componente.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Gruppo di componenti|Gruppi di componenti',
            'no_components' => 'Dovresti aggiungere un gruppo di componenti.',
            'add'           => [
                'title'   => 'Aggiungi un gruppo di componenti',
                'success' => 'Gruppo di componenti aggiunto.',
                'failure' => 'Qualcosa è andato storto con il componente.',
            ],
            'edit' => [
                'title'   => 'Modifica un gruppo di componenti',
                'success' => 'Gruppo di componenti aggiornato.',
                'failure' => 'Qualcosa è andato storto con il componente.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Misurazioni',
        'add'     => [
            'title'   => 'Crea una misurazione',
            'success' => 'Misurazione creata.',
            'failure' => 'Qualcosa è andato storto con la misurazione.',
        ],
        'edit' => [
            'title'   => 'Modifica una misurazione',
            'success' => 'Misurazione aggiornata.',
            'failure' => 'Qualcosa è andato storto con la misurazione.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'  => 'Iscritti',
        'description'  => 'Gli iscritti riceveranno aggiornamenti via email quando verranno creati gli incidenti.',
        'verified'     => 'Verificato',
        'not_verified' => 'Non Verificato',
        'add'          => [
            'title'   => 'Aggiungi un nuovo iscritto',
            'success' => 'Iscrizione aggiunta.',
            'failure' => 'Qualcosa è andato storto con il componente.',
        ],
        'edit' => [
            'title'   => 'Aggiorna iscritto',
            'success' => 'Iscrizione aggiornata.',
            'failure' => 'Qualcosa è andato storto durante l\'aggiornamento.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Membro',
        'profile'     => 'Profilo',
        'description' => 'I membri di un Team saranno in grado di aggiungere e modificare componenti e incidenti.',
        'add'         => [
            'title'   => 'Aggiungi un nuovo membro del Team',
            'success' => 'Membro del Team aggiunto.',
            'failure' => 'Qualcosa è andato storto con il componente.',
        ],
        'edit' => [
            'title'   => 'Aggiorna profilo',
            'success' => 'Profilo aggiornato.',
            'failure' => 'Qualcosa è andato storto durante l\'aggiornamento.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Impostazioni',
        'app-setup' => [
            'app-setup'   => 'Configurazione applicazione',
            'images-only' => 'Possono essere caricate solo immagini.',
            'too-big'     => 'Il file che hai caricato è troppo grande. Carica un\'immagine più piccola di :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'security' => [
            'security'   => 'Sicurezza',
            'two-factor' => 'Utenti senza verifica in 2 passaggi',
        ],
        'stylesheet' => [
            'stylesheet' => 'Foglio di stile',
        ],
        'theme' => [
            'theme' => 'Tema',
        ],
        'edit' => [
            'success' => 'Impostazioni salvate.',
            'failure' => 'Le impostazioni non possono essere salvate.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Accedi',
        'logged_in'  => 'Sei loggato.',
        'welcome'    => 'Ben tornato!',
        'two-factor' => 'Inserisci il tuo token.',
    ],

    // Sidebar footer
    'help'        => 'Aiuto',
    'status_page' => 'Status Page',
    'logout'      => 'Esci',

    // Notifications
    'notifications' => [
        'notifications' => 'Notifiche',
        'awesome'       => 'Fantastico.',
        'whoops'        => 'Whoops.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Benvenuto in Cachet',
        'message' => 'La tua Status Page è quasi pronta! Potresti voler configurare queste impostazioni aggiuntive',
        'close'   => 'Vai alla dashboard',
        'steps'   => [
            'component'  => 'Crea componenti',
            'incident'   => 'Crea incidenti',
            'customize'  => 'Personalizza',
            'team'       => 'Aggiungi utenti',
            'api'        => 'Genera un API Token',
            'two-factor' => 'Verifica in 2 passaggi',
        ],
    ],

];
