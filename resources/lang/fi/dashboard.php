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

    'dashboard' => 'Hallintanäkymä',

    // Incidents
    'incidents' => [
        'title'                    => 'Tapahtumat &amp; ajastaminen',
        'incidents'                => 'Tapahtumat',
        'logged'                   => '{0} There are no incidents, good work.|You have logged one incident.|You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => 'Luo mallipohja',
        'incident-templates'       => 'Tapahtuma pohja',
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

        // Incident templates
        'templates' => [
            'title' => 'Tapahtuma pohja',
            'add'   => [
                'title'   => 'Create an incident template',
                'message' => 'You should add an incident template.',
                'success' => 'Your new incident template has been created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => 'Edit Template',
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
        'schedule'     => 'Ajastettu huolto',
        'logged'       => '{0} There are no schedules, good work.|You have logged one schedule.|You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => 'Ajastettu :timestamp alkaen',
        'add'          => [
            'title'   => 'Lisää ajastettu huolto',
            'success' => 'Ajastus lisätty.',
            'failure' => 'Something went wrong adding the schedule, please try again.',
        ],
        'edit' => [
            'title'   => 'Muokkaa ajastettua huoltoa',
            'success' => 'Schedule has been updated!',
            'failure' => 'Something went wrong editing the schedule, please try again.',
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
            'message' => 'You should add a component.',
            'success' => 'Komponentti on luotu.',
            'failure' => 'Jokin meni vikaa luodessa komponenttia, ole hyvä ja yritä uudelleen.',
        ],
        'edit' => [
            'title'   => 'Muokkaa komponenttia',
            'success' => 'Komponentti päivitetty.',
            'failure' => 'Jokin meni vikaa luodessa komponenttia, ole hyvä ja yritä uudelleen.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'Komponenttia ei voitu poistaa, ole hyvä ja yritä uudelleen.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Component group|Component groups',
            'no_components' => 'Sinun tulisi lisätä komponentti ryhmä.',
            'add'           => [
                'title'   => 'Lisää komponentti-ryhmä',
                'success' => 'Komponenti ryhmä lisätty.',
                'failure' => 'Jokin meni vikaan luodessa komponenttiryhmää, ole hyvä ja yritä uudelleen.',
            ],
            'edit' => [
                'title'   => 'Muokkaa komponentti ryhmää',
                'success' => 'Komponentti ryhmä päivitetty.',
                'failure' => 'Jokin meni vikaan luodessa komponenttiryhmää, ole hyvä ja yritä uudelleen.',
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
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'Muokkaa kaaviota',
            'success' => 'Metric updated.',
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
        'description'      => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'verified'         => 'Vahvistettu',
        'not_verified'     => 'Not verified',
        'subscriber'       => ': sähköposti, tilannut: päivämäärä',
        'no_subscriptions' => 'Tilaa kaikki päivitykset',
        'add'              => [
            'title'   => 'Lisää uusi tilaaja',
            'success' => 'Tilaaja lisätty.',
            'failure' => 'Jotakin meni vikaan lisäessä uutta tilaajaa, ole hyvä ja yritä uudelleen.',
            'help'    => 'Enter each subscriber on a new line.',
        ],
        'edit' => [
            'title'   => 'Päivitä tilaaja',
            'success' => 'Subscriber has been updated!',
            'failure' => 'Something went wrong editing the subscriber, please try again.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Ryhmä',
        'member'      => 'Jäsen',
        'profile'     => 'Profiili',
        'description' => 'Käyttäjäjä voi luoda, muokata &amp; komponentteja ja tapahtumia.',
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
        'localization' => [
            'localization' => 'Sijainti',
        ],
        'customization' => [
            'customization' => 'Mukauttaminen',
            'header'        => 'Mukautettu ylätunniste HTML',
            'footer'        => 'Mukautettu alatunniste HTML',
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
            'credits'       => 'Credits',
            'contributors'  => 'Contributors',
            'license'       => 'Cachet is a BSD-3-licensed open source project, released by <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Backers & Sponsors',
            'backers'       => 'If you\'d like to support future development, check out the <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> campaign.',
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
        'support'          => 'Support Cachet',
        'support_subtitle' => 'Check out our <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> page!',
        'news'             => 'Latest News',
        'news_subtitle'    => 'Get the latest updates',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Tervetuloa tila-sivulle!',
        'message' => 'Your status page is almost ready! You might want to configure these extra settings',
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
