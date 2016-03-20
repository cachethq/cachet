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
        'scheduled_at' => 'Scheduled at :timestamp',
        'add'          => [
            'title'   => 'Add Scheduled Maintenance',
            'success' => 'Schedule added.',
            'failure' => 'Something went wrong adding the schedule, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit Scheduled Maintenance',
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
        'listed_group'       => 'Grouped under :name',
        'add'                => [
            'title'   => 'Lisää komponentti',
            'message' => 'You should add a component.',
            'success' => 'Component created.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'edit' => [
            'title'   => 'Muokkaa komponenttia',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component, please try again.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Component group|Component groups',
            'no_components' => 'You should add a component group.',
            'add'           => [
                'title'   => 'Lisää komponentti-ryhmä',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'edit' => [
                'title'   => 'Edit a component group',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'delete' => [
                'success' => 'Component group has been deleted!',
                'failure' => 'The component group could not be deleted, please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Mittarit',
        'add'     => [
            'title'   => 'Create a metric',
            'message' => 'You should add a metric.',
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit a metric',
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
        'no_subscriptions' => 'Subscribed to all updates',
        'add'              => [
            'title'   => 'Lisää uusi tilaaja',
            'success' => 'Tilaaja lisätty.',
            'failure' => 'Jotakin meni vikaan lisäessä uutta tilaajaa, ole hyvä ja yritä uudelleen.',
        ],
        'edit' => [
            'title'   => 'Update subscriber',
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

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your status page!',
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
