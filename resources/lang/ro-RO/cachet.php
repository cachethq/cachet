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
            0 => 'Unknown',
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
        'none'         => 'Nici un incident raportat',
        'past'         => 'Incidente anterioare',
        'stickied'     => 'Incidente fixate',
        'scheduled'    => 'Întreținere programată',
        'scheduled_at' => ', programată: timestamp',
        'posted'       => 'Publicat :timestamp',
        'status'       => [
            1 => 'Sub investigație',
            2 => 'Identificat',
            3 => 'Sub observație',
            4 => 'Remediat',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Upcoming',
            1 => 'In Progress',
            2 => 'Complete',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] Sistem operaţional|[2,Inf] Toate sistemele sunt operaţionale',
        'bad'   => '[0,1] Sistemul se confruntă cu probleme|[2,Inf] Unele sisteme se confruntă cu probleme',
        'major' => '[0,1] Serviciul se confruntă cu o întrerupere a funcționării majoră| [2, Inf] Unele sisteme se confruntă cu întreruperi de funcţionare majore',
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
        'subscribe'   => 'Abonează-te pentru a primi cele mai recente actualizări',
        'unsubscribe' => 'Unsubscribe at :link',
        'button'      => 'Abonează-te',
        'manage'      => [
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
    'timezone'        => 'Orele sunt afișate după fusul orar :timezone.',
    'about_this_site' => 'Despre acest Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Feed Stare',

];