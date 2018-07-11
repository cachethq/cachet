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
        'last_updated' => 'Ultima actualizare :timestamp',
        'status'       => [
            1 => 'Operaţional',
            2 => 'Probleme de performanţă',
            3 => 'Ȋntrerupere parțială',
            4 => 'Ȋntrerupere gravă',
        ],
        'group' => [
            'other' => 'Alte Componente',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Nici un incident raportat',
        'past'          => 'Incidente anterioare',
        'previous_week' => 'Previous Week',
        'next_week'     => 'Next Week',
        'scheduled'     => 'Întreținere programată',
        'scheduled_at'  => ', programată: timestamp',
        'status'        => [
            0 => 'Scheduled', // TODO: Hopefully remove this.
            1 => 'Sub investigație',
            2 => 'Identificat',
            3 => 'Sub observație',
            4 => 'Remediat',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Sistem operaţional|[2,Inf] Toate sistemele sunt operaţionale',
        'bad'   => '[0,1] The system is currently experiencing issues|[2,Inf] Some systems are experiencing issues',
        'major' => '[0,1] The service experiencing a major outage|[2,Inf] Some systems are experiencing a major outage',
    ],

    'api' => [
        'regenerate' => 'Regenerează cheia API',
        'revoke'     => 'Revocă cheia API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Ultima Oră',
            'hourly'    => 'Ultimele 12 ore',
            'weekly'    => 'Săptămână',
            'monthly'   => 'Lună',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates',
        'button'    => 'Abonează-te',
        'manage'    => [
            'no_subscriptions' => 'Acum eşti abonat la toate actualizările.',
            'my_subscriptions' => 'Acum eşti abonat la următoarele actualizări.',
        ],
        'email' => [
            'subscribe'          => 'Abonează-te la actualizări prin email.',
            'subscribed'         => 'Te-ai abonat la actualizări prin email, te rugăm să îți verifici adresa email și să confirmi abonarea.',
            'verified'           => 'Abonarea prin email a fost confirmată. Mulțumim!',
            'manage'             => 'Gestionează-ţi abonările',
            'unsubscribe'        => 'Dezabonare de la actualizări prin email.',
            'unsubscribed'       => 'Actualizările prin email au fost anulate.',
            'failure'            => 'Ceva nu a funcționat în legătură cu abonarea.',
            'already-subscribed' => 'Adresa :email nu poate fi folosită deoarece este deja abonată.',
            'verify'             => [
                'text'   => "Vă rugăm să confirmaţi abonarea la actualizările de stare pentru :app_name. \n:link",
                'html'   => '<p>Vă rugăm să confirmaţi abonarea via email la actualizările de stare pentru :app_name.</p>',
                'button' => 'Confirmați Abonarea',
            ],
            'maintenance' => [
                'subject' => '[Mentenanță Programată] :name',
            ],
            'incident' => [
                'subject' => '[Incident Nou] :status: :name',
            ],
            'component' => [
                'subject'       => 'Actualizare Stare Componentă',
                'text'          => 'Starea componentei :component_name s-a schimbat. Componenta este acum :component_human_status.\nMulțumim, :app_name',
                'html'          => '<p>Starea componentei :component_name s-a schimbat. Componenta este acum :component_human_status.</p><p>Mulțumim, :app_name</p>',
                'tooltip-title' => 'Abonează-te la notificările pentru :component_name.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Aţi fost invitat pe pagina de actualizări a echipei :app_name, ca să vă înscrieţi urmaţi următorul link.\n:link\nMulțumim, :app_name",
                'html' => '<p>Aţi fost invitat pe pagina de actualizări a echipei :app_name, ca să vă înscrieţi urmaţi următorul link.</p><p><a href=":link">:link</a></p><p>Mulțumim, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Înregistrează-te',
        'username' => 'Utilizator',
        'email'    => 'Email',
        'password' => 'Parolă',
        'success'  => 'Contul tău a fost creat.',
        'failure'  => 'Ceva a mers greșit cu procesul de înregistrare.',
    ],

    'system' => [
        'update' => 'O nouă versiune a Cachet este disponibilă. Află cum să o actualizezi <a href="https://docs.cachethq.io/docs/updating-cachet">aici</a>!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Închide',
        'subscribe' => [
            'title'  => 'Abonează-te la actualizările componentei',
            'body'   => 'Introdu adresa ta de email pentru a te abona la actualizări pentru această componentă. Dacă ești deja abonat, vei primi deja emailuri pentru această componentă.',
            'button' => 'Abonează-te',
        ],
    ],

    // Other
    'home'            => 'Acasă',
    'description'     => 'Fii la curent cu cele mai recente actualizări ale serviciilor pentru :app.',
    'powered_by'      => 'Cu sprijinul <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Despre acest Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Feed Stare',

];
