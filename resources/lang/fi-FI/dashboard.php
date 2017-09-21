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

    'dashboard'          => 'Hallintanäkymä',
    'writeable_settings' => 'The Cachet settings directory is not writeable. Please make sure that <code>./bootstrap/cachet</code> is writeable by the web server.',

    // Incidents
    'incidents' => [
        'title'                    => 'Tapahtumat &amp; ajastaminen',
        'incidents'                => 'Tapahtumat',
        'logged'                   => '{0} There are no incidents, good work.|You have logged one incident.|You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'Luo mallipohja',
        'incident-templates'       => 'Tapahtumamalli',
        'updates'                  => '{0} Zero Updates|One Update|:count Updates',
        'add'                      => [
            'title'   => 'Ilmoita tapahtuma',
            'success' => 'Tapahtuma lisätty.',
            'failure' => 'There was an error adding the incident, please try again.',
        ],
        'edit' => [
            'title'   => 'Muokkaa tapahtumaa',
            'success' => 'Tapahtuma päivitetty.',
            'failure' => 'There was an error editing the incident, please try again.',
        ],
        'delete' => [
            'success' => 'Tapaus on poistettu ja ei näytetä tila-sivulla.',
            'failure' => 'The incident could not be deleted, please try again.',
        ],
        'update' => [
            'title'    => 'Luo tapahtuma malli',
            'subtitle' => 'Add an update to <strong>:incident</strong>',
            'success'  => 'Update added.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Tapahtumamalli',
            'add'   => [
                'title'   => 'Luo uusi tapahtuma malli',
                'message' => 'You should add an incident template.',
                'success' => 'Your new incident template has been created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'Muokkaa sivupohjaa',
                'success' => 'The incident template has been updated.',
                'failure' => 'Something went wrong updating the incident template',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted, please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Ajastettu tapahtuma',
        'logged'       => '{0} Täälä ei ole ajastettuja tapahtumia, hyvää työtä | Olet ajastanut yhden tapahtuman | Olet ajastanut <strong>:count</strong> tapahtumia.',
        'scheduled_at' => 'Ajastettu :timestamp alkaen',
        'add'          => [
            'title'   => 'Lisää ajastettu tapahtuma',
            'success' => 'Ajastus lisätty.',
            'failure' => 'Jokin meni pielen lisättäessä aikataulua, yritäthän uudelleen.',
        ],
        'edit' => [
            'title'   => 'Muokkaa ajastettua tapahtumaa',
            'success' => 'Aikataulu päivitettiin!',
            'failure' => 'Jokin meni pieleen muokattaessa aikataulua, yritäthän uudelleen.',
        ],
        'delete' => [
            'success' => 'The scheduled maintenance has been deleted and will not show on your status page.',
            'failure' => 'The scheduled maintenance could not be deleted, please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponentit',
        'component_statuses' => 'Komponenttien tilat',
        'listed_group'       => 'Ryhmitetään :name alle',
        'add'                => [
            'title'   => 'Lisää komponentti',
            'message' => 'Sinun tulisi lisätä uusi komponentti.',
            'success' => 'Komponentti on luotu.',
            'failure' => 'Jokin meni vikaa luodessa komponenttia, ole hyvä ja yritä uudelleen.',
        ],
        'edit' => [
            'title'   => 'Muokkaa komponenttia',
            'success' => 'Komponentti päivitetty.',
            'failure' => 'Jokin meni vikaa luodessa komponenttia, ole hyvä ja yritä uudelleen.',
        ],
        'delete' => [
            'success' => 'Komponentti on poistettu!',
            'failure' => 'Komponenttia ei voitu poistaa, ole hyvä ja yritä uudelleen.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponenttiryhmä|Komponenttirymät',
            'no_components' => 'Sinun tulisi lisätä komponentti ryhmä.',
            'add'           => [
                'title'   => 'Lisää komponentti-ryhmä',
                'success' => 'Komponenti ryhmä lisätty.',
                'failure' => 'Jokin meni vikaa luodessa komponenttia, ole hyvä ja yritä uudelleen.',
            ],
            'edit' => [
                'title'   => 'Muokkaa komponentti ryhmää',
                'success' => 'Komponentti ryhmä päivitetty.',
                'failure' => 'Jokin meni vikaa luodessa komponenttia, ole hyvä ja yritä uudelleen.',
            ],
            'delete' => [
                'success' => 'Komponentti ryhmä poistettu!',
                'failure' => 'Komponenttiryhmää ei voitu poistaa, ole hyvä ja yritä uudelleen.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Mittarit',
        'add'     => [
            'title'   => 'Luo kaavio',
            'message' => 'Sinun tulisi lisätä kaavio.',
            'success' => 'Metriikka luotu.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'Muokkaa kaaviota',
            'success' => 'Metriikka päivitetty.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted, please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Tilaajat',
        'description'      => 'Tilaajat saavat sähköposti päivityksiä kun tapahtumia luodaan tai komponentteja päivitetään.',
        'verified'         => 'Vahvistettu',
        'not_verified'     => 'Ei todennettu',
        'subscriber'       => ':email, subscribed :date',
        'no_subscriptions' => 'Tilaa kaikki päivitykset',
        'add'              => [
            'title'   => 'Lisää uusi tilaaja',
            'success' => 'Tilaaja lisätty.',
            'failure' => 'Jotakin meni vikaan lisäessä uutta tilaajaa, ole hyvä ja yritä uudelleen.',
            'help'    => 'Syötä jokaisen tilajan sähköpostiosoite uudelle riville.',
        ],
        'edit' => [
            'title'   => 'Päivitä tilaaja',
            'success' => 'Tilaajan tiedot on pävitetty!',
            'failure' => 'Jotakin meni vikaan lisätessä uusia tilaajia, ole hyvä ja yritä uudelleen.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Ryhmä',
        'member'      => 'Jäsen',
        'profile'     => 'Profiili',
        'description' => 'Käyttäjä voi luoda, muokata &amp; komponentteja ja tapahtumia.',
        'add'         => [
            'title'   => 'Lisää uusi käyttäjä',
            'success' => 'Käyttäjä on lisätty.',
            'failure' => 'Käyttäjää ei voitu luoda, ole hyvä ja yritä uudelleen.',
        ],
        'edit' => [
            'title'   => 'Päivitä profiili',
            'success' => 'Profiili on päivitetty.',
            'failure' => 'Jokin meni vikaan päivittäessä profiilia, ole hyvä ja yritä uudelleen.',
        ],
        'delete' => [
            'success' => 'Käyttäjä on poistettu ja ei ole enään pääsyä hallintapaneeliin!',
            'failure' => 'Käyttäjää ei voitu luoda, ole hyvä ja yritä uudelleen.',
        ],
        'invite' => [
            'title'   => 'Kutsu uusi käyttäjä',
            'success' => 'Kutsu on lähetetty',
            'failure' => 'Kutsua ei voitu lähettää, ole hyvä ja yritä uudelleen.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Asetukset',
        'app-setup' => [
            'app-setup'   => 'Sovelluksen asetukset',
            'images-only' => 'Vain kuvia voi lähettää.',
            'too-big'     => 'Lähettämäsi tiedosto on liian suuri. Lähetä pienempi kuva kuin :size',
        ],
        'analytics' => [
            'analytics' => 'Analytiikka',
        ],
        'log' => [
            'log' => 'Loki',
        ],
        'localization' => [
            'localization' => 'Sijainti',
        ],
        'customization' => [
            'customization' => 'Mukauttaminen',
            'header'        => 'Mukautettu ylätunniste HTML',
            'footer'        => 'Mukautettu alatunniste HTML',
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
            'security'   => 'Turvallisuus',
            'two-factor' => 'Käyttäjät ilman kaksivaiheista todennusta',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Teema',
        ],
        'edit' => [
            'success' => 'Asetukset tallennettu.',
            'failure' => 'Asetuksia ei voitu tallentaa.',
        ],
        'credits' => [
            'credits'       => 'Tekijät',
            'contributors'  => 'Kehittäjät',
            'license'       => 'Cachet on BSD-3-lisenssillä varustettu avoimen lähdekoodin projekti, julkaustu <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank"> Alt Three Services Limited</a>.',
            'backers-title' => 'Tukijoita & sponsorit',
            'backers'       => 'Jos haluat tukea kehitystä, katso <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> kampanjaa.',
            'thank-you'     => 'Thank you to each and every one of the :count contributors.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Kirjaudu',
        'logged_in'  => 'Olet kirjautunut sisään.',
        'welcome'    => 'Tervetuloa takaisin!',
        'two-factor' => 'Please enter your token.',
    ],

    // Sidebar footer
    'help'        => 'Tuki',
    'status_page' => 'Tila-sivu',
    'logout'      => 'Kirjaudu ulos',

    // Notifications
    'notifications' => [
        'notifications' => 'Ilmoitukset',
        'awesome'       => 'Mahtavaa.',
        'whoops'        => 'Hupsis.',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Tue Cachet:iä',
        'support_subtitle' => 'Check out our <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> page!',
        'news'             => 'Viimeisimmät uutiset',
        'news_subtitle'    => 'Hanki uusin päivitys',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Tervetuloa tila-sivulle!',
        'message' => 'You\'re almost ready but you might want to configure these extra settings first...',
        'close'   => 'Siirry suoraan hallintapaneeliin',
        'steps'   => [
            'component'  => 'Luo uusi komponentti',
            'incident'   => 'Luo uusi tapahtuma',
            'customize'  => 'Muokkaa',
            'team'       => 'Lisää käyttäjä',
            'api'        => 'Luo API tunnus',
            'two-factor' => 'Kaksivaiheinen todennus',
        ],
    ],

];
