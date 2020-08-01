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
        'select_all'   => 'Select All',
        'deselect_all' => 'Deselect All',
    ],

    // Incidents
    'incidents' => [
        'none'         => 'Nici un incident raportat',
        'past'         => 'Incidente anterioare',
        'stickied'     => 'Stickied Incidents',
        'scheduled'    => 'Maintenance',
        'scheduled_at' => ', programată: timestamp',
        'posted'       => 'Posted :timestamp by :username',
        'posted_at'    => 'Posted at :timestamp',
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
        'good'  => '[0,1]System operational|[2,*]All systems are operational',
        'bad'   => '[0,1]The system is experiencing issues|[2,*]Some systems are experiencing issues',
        'major' => '[0,1]The system is experiencing major issues|[2,*]Some systems are experiencing major issues',
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
        'subscribe'           => 'Subscribe to status changes and incident updates',
        'unsubscribe'         => 'Unsubscribe',
        'button'              => 'Abonează-te',
        'manage_subscription' => 'Manage subscription',
        'manage'              => [
            'notifications'       => 'Notificări',
            'notifications_for'   => 'Manage notifications for',
            'no_subscriptions'    => 'Acum eşti abonat la toate actualizările.',
            'update_subscription' => 'Update Subscription',
            'my_subscriptions'    => 'Acum eşti abonat la următoarele actualizări.',
            'manage_at_link'      => 'Manage your subscriptions at :link',
        ],
        'email' => [
            'manage_subscription' => 'We\'ve sent you an email, please click the link to manage your subscription',
            'subscribe'           => 'Abonează-te la actualizări prin email.',
            'subscribed'          => 'Te-ai abonat la actualizări prin email, te rugăm să îți verifici adresa email și să confirmi abonarea.',
            'updated-subscribe'   => 'You\'ve succesfully updated your subscriptions.',
            'verified'            => 'Abonarea prin email a fost confirmată. Mulțumim!',
            'manage'              => 'Gestionează-ţi abonările',
            'unsubscribe'         => 'Dezabonare de la actualizări prin email.',
            'unsubscribed'        => 'Actualizările prin email au fost anulate.',
            'failure'             => 'Ceva nu a funcționat în legătură cu abonarea.',
            'already-subscribed'  => 'Adresa :email nu poate fi folosită deoarece este deja abonată.',
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

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details and updates about the :name incident that occurred on :date',
            'schedule'  => 'Details about the scheduled maintenance period :name starting :startDate',
            'subscribe' => 'Subscribe to :app in order to receive updates of incidents and scheduled maintenance periods',
            'overview'  => 'Fii la curent cu cele mai recente actualizări ale serviciilor pentru :app.',
        ],
    ],

    // Other
    'home'            => 'Acasă',
    'powered_by'      => 'Cu sprijinul <a href="https://cachethq.io" class="links">Cachet</a>.',
    'timezone'        => 'Times are shown in :timezone.',
    'about_this_site' => 'Despre acest Site',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Feed Stare',

];
