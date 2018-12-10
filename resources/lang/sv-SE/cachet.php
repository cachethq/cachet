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
        'last_updated' => 'Senast uppdaterad :timestamp',
        'status'       => [
            1 => 'Fungerar',
            2 => 'Prestandaproblem',
            3 => 'Mindre avbrott',
            4 => 'Större avbrott',
        ],
        'group' => [
            'other' => 'Andra komponenter',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Inga händelser har rapporterats',
        'past'          => 'Tidigare händelser',
        'previous_week' => 'Föregående vecka',
        'next_week'     => 'Nästa vecka',
        'scheduled'     => 'Planerat underhåll',
        'scheduled_at'  => ', schemalagda: tidsstämpel',
        'status'        => [
            0 => 'Schemalagd', // TODO: Hopefully remove this.
            1 => 'Undersöker',
            2 => 'Identifierat',
            3 => 'Bevakar',
            4 => 'Löst',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Systemet fungerar |[2,Inf] Alla system fungerar',
        'bad'   => '[0,1] Systemet har för närvarande problem|[2,Inf] Vissa system har problem',
        'major' => '[0,1] Stora störningar på tjänsten [2,Inf] Stora störningar på vissa system',
    ],

    'api' => [
        'regenerate' => 'Generera om API-nyckel',
        'revoke'     => 'Återkalla API-nyckel',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Senaste timmen',
            'hourly'    => 'Senaste 12 timmarna',
            'weekly'    => 'Vecka',
            'monthly'   => 'Månad',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Prenumerera för att få de senaste uppdateringarna',
        'button'    => 'Prenumerera',
        'manage'    => [
            'no_subscriptions' => 'Du prenumererar på alla uppdateringar.',
            'my_subscriptions' => 'Du prenumererar på följande uppdateringar.',
        ],
        'email' => [
            'subscribe'          => 'Prenumerera på epost-uppdateringar.',
            'subscribed'         => 'Du har börjat prenumerera på e-postmeddelanden, vänligen kontrollera din e-post för att bekräfta din prenumeration.',
            'verified'           => 'Din epost-prenumeration har bekräftats. Tack!',
            'manage'             => 'Hantera din prenumeration',
            'unsubscribe'        => 'Avbeställ epost-uppdateringar.',
            'unsubscribed'       => 'Din epost-prenumeration har avbrutits.',
            'failure'            => 'Något blev fel med prenumerationen.',
            'already-subscribed' => 'Kan inte skapa en prenumeration för :email eftersom den redan prenumererar.',
            'verify'             => [
                'text'   => "Vänligen bekräfta din e-post prenumeration på :app_name status uppdateringar.\n:link",
                'html'   => '<p>Vänligen bekräfta din e-post prenumeration :app_name statusuppdateringar.</p>',
                'button' => 'Bekräfta prenumeration',
            ],
            'maintenance' => [
                'subject' => '[Planerat underhåll] :name',
            ],
            'incident' => [
                'subject' => '[Ny Incident] :status: :name',
            ],
            'component' => [
                'subject'       => 'Komponentstatusuppdatering',
                'text'          => 'Komponenten :component_name har fått en ny status. Komponenten har nu status :component_human_status.\nTack, :app_name',
                'html'          => '<p>Komponenten :component_name har fått en ny status. Komponenten har nu status :component_human_status.</p><p>Tack, :app_name</p>',
                'tooltip-title' => 'Prenumerera på uppdateringar för :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Du har blivit inbjuden till teamet för :app_names statussida, registrera dig genom att trycka på länken.\n:link\nTack, :app_name",
                'html' => '<p>Du har blivit inbjuden till teamet :app_names statussida. Registrera dig genom att trycka på <a href=":link"> den här länken</a></p> <p>Tack, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Registrera dig',
        'username' => 'Användarnamn',
        'email'    => 'E-post',
        'password' => 'Lösenord',
        'success'  => 'Ditt konto har skapats.',
        'failure'  => 'Något gick fel med registreringen.',
    ],

    'system' => [
        'update' => 'Det finns en nyare version av Cachet tillgänglig. Du kan lära dig hur du uppdaterar <a href="https://docs.cachethq.io/docs/updating-cachet">här</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Stäng',
        'subscribe' => [
            'title'  => 'Prenumerera på komponentuppdateringar',
            'body'   => 'Fyll i din epostadress för att prenumerera på uppdateringar för den här kompontenten. Om du redan prenumererar, får du redan epost om den här komponenten.',
            'button' => 'Prenumerera',
        ],
    ],

    // Other
    'home'            => 'Hem',
    'description'     => 'Håll dig uppdaterad med de senaste uppdateringarna från :app.',
    'powered_by'      => 'Drivs av <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Om sidan',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Statusflöde',

];
