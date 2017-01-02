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

    'dashboard'          => 'Dashbord',
    'writeable_settings' => 'The Cachet settings directory is not writeable. Please make sure that <code>./bootstrap/cachet</code> is writeable by the web server.',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidents &amp; Schedule',
        'incidents'                => 'Hendelser',
        'logged'                   => '{0} Det er ingen hendelser, bra jobbet.|Du har en logget hendelse.|Du har rapportert <strong>:count</strong> hendelser.',
        'incident-create-template' => 'Opprett mal',
        'incident-templates'       => 'Hendelsesmaler',
        'updates'                  => '{0} null oppdateringer | Én oppdatering |: telle oppdateringer',
        'add'                      => [
            'title'   => 'Rapportere en hendelse',
            'success' => 'Hendelse lagt til.',
            'failure' => 'Det oppstod en feil når du la til til hendelsen, prøv igjen.',
        ],
        'edit' => [
            'title'   => 'Rediger en hendelse',
            'success' => 'Hendelse oppdatert.',
            'failure' => 'Det oppstod en feil under redigering av hendelsen, prøv igjen.',
        ],
        'delete' => [
            'success' => 'Hendelsen er slettet og vil ikke vises på statussiden din.',
            'failure' => 'Hendelsen kunne ikke slettes, prøv igjen.',
        ],
        'update' => [
            'title'    => 'Opprett ny hendelseoppdatering',
            'subtitle' => 'Legge til oppdatering av <strong>: hendelsen</strong>',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Hendelsesmaler',
            'add'   => [
                'title'   => 'Lag en hendelsesmal',
                'message' => 'Du bør legge til en hendelsesmal.',
                'success' => 'Din nye hendelsesmal er opprettet.',
                'failure' => 'Noe gikk galt med hendelsesmalen.',
            ],
            'edit' => [
                'title'   => 'Rediger mal',
                'success' => 'Hendelsensmalen er oppdatert.',
                'failure' => 'Noe gikk galt under oppdatering av hendelsesmalen',
            ],
            'delete' => [
                'success' => 'Hendelsesmalen er slettet.',
                'failure' => 'Hendelsesmalen kunne ikke slettes, prøv igjen.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Planlagt vedlikehold',
        'logged'       => '{0} Det er ingen tidsplaner, bra jobbet. | Du har logget en hendelse. | Du har rapportert <strong>: antall</strong> tidsplaner.',
        'scheduled_at' => 'Planlagt til :timestamp',
        'add'          => [
            'title'   => 'Legg til planlagt vedlikehold',
            'success' => 'Tidsplan lagt til.',
            'failure' => 'Noe gikk galt med å legge til tidsplanen, prøv igjen.',
        ],
        'edit' => [
            'title'   => 'Redigere planlagt vedlikehold',
            'success' => 'Tidsplanen er oppdatert!',
            'failure' => 'Noe gikk galt med å redigere tidsplanen, prøv igjen.',
        ],
        'delete' => [
            'success' => 'Planlagt vedlikehold er slettet og vil ikke vises på statussiden din.',
            'failure' => 'Planlagt vedlikehold kunne ikke slettes, prøv igjen.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponenter',
        'component_statuses' => 'Komponentstatus',
        'listed_group'       => 'Gruppert under :name',
        'add'                => [
            'title'   => 'Legg til komponent',
            'message' => 'Du burde legge til en komponent.',
            'success' => 'Komponent lagt til.',
            'failure' => 'Noe gikk galt med komponentgruppen, prøv igjen.',
        ],
        'edit' => [
            'title'   => 'Redigere en komponent',
            'success' => 'Komponent oppdatert.',
            'failure' => 'Noe gikk galt med komponentgruppen, prøv igjen.',
        ],
        'delete' => [
            'success' => 'Komponenten har blitt slettet!',
            'failure' => 'Komponenten kunne ikke slettes, prøv igjen.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentgruppe | Komponentgrupper',
            'no_components' => 'Du burde legge til en komponentgruppe.',
            'add'           => [
                'title'   => 'Legg til en komponentgruppe',
                'success' => 'Komponentgruppe lagt til.',
                'failure' => 'Noe gikk galt med komponentgruppen, prøv igjen.',
            ],
            'edit' => [
                'title'   => 'Rediger komponentgruppe',
                'success' => 'Komponentgruppe oppdatert.',
                'failure' => 'Noe gikk galt med komponentgruppen, prøv igjen.',
            ],
            'delete' => [
                'success' => 'Komponentgruppen har blitt slettet!',
                'failure' => 'Komponentgruppen kunne ikke slettes, prøv igjen.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Beregninger',
        'add'     => [
            'title'   => 'Opprett en beregning',
            'message' => 'Du bør legge til en beregning.',
            'success' => 'Beregning opprettet.',
            'failure' => 'Noe gikk galt med beregningen, prøv igjen.',
        ],
        'edit' => [
            'title'   => 'Rediger en beregning',
            'success' => 'Beregning oppdatert.',
            'failure' => 'Noe gikk galt med beregningen, prøv igjen.',
        ],
        'delete' => [
            'success' => 'Beregningen er slettet og vises ikke lenger på statussiden.',
            'failure' => 'Beregningen kunne ikke slettes, prøv igjen.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Abonnenter',
        'description'      => 'Abonnenter mottar e-postoppdateringer når hendelser opprettes eller komponenter er oppdatert.',
        'verified'         => 'Verifisert',
        'not_verified'     => 'Ikke verifisert',
        'subscriber'       => ': e-post, abonnert: dato',
        'no_subscriptions' => 'Abonnerer på alle oppdateringer',
        'add'              => [
            'title'   => 'Legge til en ny abonnent',
            'success' => 'Abonnenten er lagt til!',
            'failure' => 'Noe gikk galt med å legge til abonnenten, prøv igjen.',
            'help'    => 'Angi hver enkelt abonnent på en ny linje.',
        ],
        'edit' => [
            'title'   => 'Oppdatering abonnent',
            'success' => 'Abonnenten er oppdatert!',
            'failure' => 'Noe gikk galt med å redigere abonnenten, prøv igjen.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Bruker',
        'profile'     => 'Profil',
        'description' => 'Team Members will be able to add, modify &amp; edit components and incidents.',
        'add'         => [
            'title'   => 'Legge til nytt gruppemedlem',
            'success' => 'Gruppemedlem lagt til.',
            'failure' => 'Gruppemedlemmet kunne ikke legges til, prøv på nytt.',
        ],
        'edit' => [
            'title'   => 'Oppdater profil',
            'success' => 'Profilen oppdatert.',
            'failure' => 'Noe gikk galt med å oppdatere profilen, prøv igjen.',
        ],
        'delete' => [
            'success' => 'Gruppemedlemmet er slettet og vil ikke lenger ha tilgang til oversikten!',
            'failure' => 'Gruppemedlemmet kunne ikke legges til, prøv på nytt.',
        ],
        'invite' => [
            'title'   => 'Inviter en ny medarbeider',
            'success' => 'Invitasjon er sendt',
            'failure' => 'Invitasjonen kunne ikke sendes, vennligst prøv igjen.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Innstillinger',
        'app-setup' => [
            'app-setup'   => 'Applikasjonsoppsett',
            'images-only' => 'Bare bilder kan lastes opp.',
            'too-big'     => 'Filen du lastet opp er for stor. Last opp et bilde som er mindre enn :size',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'log' => [
            'log' => 'Logg',
        ],
        'localization' => [
            'localization' => 'Regioninnstillinger',
        ],
        'customization' => [
            'customization' => 'Tilpasninger',
            'header'        => 'Egendefinert topptekst HTML',
            'footer'        => 'Egendefinert bunntekst HTML',
        ],
        'mail' => [
            'mail'  => 'Mail',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Test notification from Cachet',
                'body'    => 'This is a test notification from Cachet.',
            ],
        ],
        'security' => [
            'security'   => 'Sikkerhet',
            'two-factor' => 'Brukere uten to-faktor autentifisering',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stilark',
        ],
        'theme' => [
            'theme' => 'Tema',
        ],
        'edit' => [
            'success' => 'Innstillinger lagret.',
            'failure' => 'Kan ikke lagre innstillingene.',
        ],
        'credits' => [
            'credits'       => 'Medvirkende',
            'contributors'  => 'Bidragsytere',
            'license'       => 'Cachet er en BSD-3-lisensiert åpen kildekode-prosjekt, utgitt av <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank"> Alt tre Services Limited</a>.',
            'backers-title' => 'Støttespillere & sponsorer',
            'backers'       => 'Hvis du ønsker å støtte fremtidig utvikling, sjekk ut <a href="https://patreon.com/jbrooksuk" target="_blank"> Cachet Patreon</a> kampanjen.',
            'thank-you'     => 'Takk til hver og en av de :count bidragsytere.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Logg inn',
        'logged_in'  => 'Du er logget inn.',
        'welcome'    => 'Velkommen tilbake!',
        'two-factor' => 'Skriv inn din token.',
    ],

    // Sidebar footer
    'help'        => 'Hjelp',
    'status_page' => 'Statusside',
    'logout'      => 'Logg ut',

    // Notifications
    'notifications' => [
        'notifications' => 'Varslinger',
        'awesome'       => 'Fantastisk.',
        'whoops'        => 'Uff da.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Støtt Cachet',
        'support_subtitle' => 'Sjekk ut vår <strong><a href="https://patreon.com/jbrooksuk" target="_blank"> Patreon</a></strong> side!',
        'news'             => 'Siste nyheter',
        'news_subtitle'    => 'Hent nyeste oppdatering',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Velkommen til den nye statussiden, :username!',
        'message' => 'Du er nesten klar, men du vil kanskje konfigurere disse ekstra innstillingene først...',
        'close'   => 'Jeg har det bra takk!',
        'steps'   => [
            'component'  => 'Legg til dine komponenter',
            'incident'   => 'Opprette en hendelse',
            'customize'  => 'Tilpass siden din',
            'team'       => 'Legg til gruppen din',
            'api'        => 'Generere et API-token',
            'two-factor' => 'Sett opp to-faktor autentisering',
        ],
    ],

];