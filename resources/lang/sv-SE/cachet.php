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
            1 => 'Fungerar',
            2 => 'Prestandaproblem',
            3 => 'Mindre avbrott',
            4 => 'Större avbrott',
        ],
        'group' => [
            'other' => 'Other Components',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Inga händelser har rapporterats',
        'past'          => 'Tidigare händelser',
        'previous_week' => 'Förra veckan',
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
            'no_subscriptions' => 'You\'re currently subscribed to all updates.',
            'my_subscriptions' => 'You\'re currently subscribed to the following updates.',
        ],
        'email' => [
            'subscribe'          => 'Prenumerera på epost-uppdateringar.',
            'subscribed'         => 'Du har börjat prenumerera på e-postmeddelanden, vänligen kontrollera din e-post för att bekräfta din prenumeration.',
            'verified'           => 'Din epost-prenumeration har bekräftats. Tack!',
            'manage'             => 'Manage your subscription.',
            'unsubscribe'        => 'Avbeställ epost-uppdateringar.',
            'unsubscribed'       => 'Din epost-prenumeration har avbrutits.',
            'failure'            => 'Något blev fel med prenumerationen.',
            'already-subscribed' => 'Kan inte skapa en prenumeration för :email eftersom den redan prenumererar.',
            'verify'             => [
                'text'           => "Vänligen bekräfta din epost-prenumeration för: :app_name-statusuppdateringar.\n:link\nTack, :app_name",
                'html-preheader' => 'Vänligen bekräfta din epost-prenumeration på statusuppdateringar för :app_name.',
                'html'           => '<p>Vänligen bekräfta din epost-prenumeration på :app_names statusuppdateringar.</p> <p><a href=":link">: länk</a></p> <p>Tack, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "Nytt underhåll har schemalagts för :app_name.\nTack du, :app_name",
                'html-preheader' => 'Nytt underhåll har schemalagts för :app_name.',
                'html'           => '<p>Nytt underhåll har schemalagts för :app_name.</p>',
            ],
            'incident' => [
                'text'           => "Nya händelser har rapporterats hos :app_name.\nTack, :app_name",
                'html-preheader' => 'Nya händelser har rapporterats hos :app_name.',
                'html'           => '<p>Nya händelser har rapporterats hos :app_name.</p> <p>Tack, :app_name</p>',
            ],
            'component' => [
                'subject'        => 'Komponentstatusuppdatering',
                'text'           => 'Komponenten :component_name har fått en ny status. Komponenten har nu status :component_human_status.\nTack, :app_name',
                'html-preheader' => 'Komponentstatusuppdatering från :app_name',
                'html'           => '<p>Komponenten :component_name har fått en ny status. Komponenten har nu status :component_human_status.</p><p>Tack, :app_name</p>',
                'tooltip-title'  => 'Prenumerera på uppdateringar för :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text'           => "Du har blivit inbjuden till teamet för :app_names statussida, registrera dig genom att trycka på länken.\n:link\nTack, :app_name",
                'html-preheader' => 'Du har blivit inbjuden till teamet för :app_name.',
                'html'           => '<p>Du har blivit inbjuden till teamet :app_names statussida. Registrera dig genom att trycka på <a href=":link"> den här länken</a></p> <p>Tack, :app_name</p>',
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
    'home'            => 'Home',
    'description'     => 'Stay up to date with the latest service updates from :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Om sidan',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Statusflöde',

];
