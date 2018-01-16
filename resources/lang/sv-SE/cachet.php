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
            0 => 'Okänd',
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
        'none'         => 'Inga händelser har rapporterats',
        'past'         => 'Tidigare händelser',
        'stickied'     => 'Fästa incidenter',
        'scheduled'    => 'Planerat underhåll',
        'scheduled_at' => ', schemalagda: tidsstämpel',
        'posted'       => 'Upplagd :timestamp',
        'posted_at'    => 'Posted at :timestamp',
        'status'       => [
            1 => 'Undersöker',
            2 => 'Identifierat',
            3 => 'Bevakar',
            4 => 'Löst',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Kommande',
            1 => 'Pågående',
            2 => 'Slutförd',
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
        'subscribe'   => 'Prenumerera för att få de senaste uppdateringarna',
        'unsubscribe' => 'Avsluta prenumerationen på: länk',
        'button'      => 'Prenumerera',
        'manage'      => [
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
    'description'     => 'Håll dig uppdaterad med de senaste service-uppdateringarna från :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Tider visas i :timezone.',
    'about_this_site' => 'Om sidan',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Statusflöde',

];
