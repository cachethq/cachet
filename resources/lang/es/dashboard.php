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

    'dashboard' => 'Panel de Control',

    // Incidents
    'incidents' => [
        'title'                    => 'Ereignisse &amp; Termine',
        'incidents'                => 'Vorfälle',
        'logged'                   => '{0} Es gibt keine Vorfälle, gute Arbeit.|Du hast einen Vorfall gemeldet.|Du hast <strong>:count</strong> Vorfälle gemeldet.',
        'incident-create-template' => 'Vorlage erstellen',
        'incident-templates'       => 'Vorfall Vorlagen',
        'add'                      => [
            'title'   => 'Vorfall hinzufügen',
            'success' => 'Incidente agregado.',
            'failure' => 'Hubo un error agregando el incidente, por favor intente de nuevo.',
        ],
        'edit' => [
            'title'   => 'Vorfall bearbeiten',
            'success' => 'Vorfall aktualisiert.',
            'failure' => 'Hubo un error editando el incidente, por favor intente de nuevo.',
        ],
        'delete' => [
            'success' => 'El incidente se ha eliminado y no se mostrará en tu página de estado.',
            'failure' => 'El incidente no se pudo eliminar, por favor intente de nuevo.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Plantillas de incidente',
            'add'   => [
                'title'   => 'Vorfallvorlage erstellen',
                'message' => 'Deberías añadir una plantilla de incidente.',
                'success' => 'Su nueva plantilla de incidentes ha sido creada.',
                'failure' => 'Algo salió mal con la plantilla de incidente.',
            ],
            'edit' => [
                'title'   => 'Vorlage bearbeiten',
                'success' => 'La plantilla de incidente ha sido actualizada.',
                'failure' => 'Algo salió mal actualizando la plantilla de incidente',
            ],
            'delete' => [
                'success' => 'La plantilla de incidente se ha eliminado.',
                'failure' => 'La plantilla de incidente no se pudo eliminar. Por favor, inténtalo de nuevo.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Geplante Wartungen',
        'logged'       => '{0} No hay planificaciones, buen trabajo.|Has registrado una planificación.|Has registrado <strong>:count</strong> planificaciones.',
        'scheduled_at' => 'Geplant am :timestamp',
        'add'          => [
            'title'   => 'Agregar mantenimiento programado',
            'success' => 'Planificación agregada.',
            'failure' => 'Algo salió mal agregando la planificación, por favor intente de nuevo.',
        ],
        'edit' => [
            'title'   => 'Editar Mantenimiento Programado',
            'success' => 'La planificación ha sido actualzada!',
            'failure' => 'Algo salió mal editando la planificación, por favor intente de nuevo.',
        ],
        'delete' => [
            'success' => 'La planificación ha sido eliminada y no será mostrada en su página de estado.',
            'failure' => 'El mantenimiento programado no pudo ser eliminado, por favor, inténtelo de nuevo.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Komponenten',
        'component_statuses' => 'Komponentenstatus',
        'listed_group'       => 'Gruppiert unter :name',
        'add'                => [
            'title'   => 'Komponente hinzufügen',
            'message' => 'Sie sollten eine Komponente erstellen.',
            'success' => 'Componente creado.',
            'failure' => 'Algo salió mal con el componente, por favor intente de nuevo.',
        ],
        'edit' => [
            'title'   => 'Komponente bearbeiten',
            'success' => 'Componente actualizado.',
            'failure' => 'Algo salió mal con el componente, por favor intente de nuevo.',
        ],
        'delete' => [
            'success' => 'El componente se ha eliminado!',
            'failure' => 'El componente no pudo ser eliminado, por favor, inténtelo de nuevo.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Komponentgruppe|Komponentgruppen',
            'no_components' => 'Sie sollten eine Komponentengruppe hinzufügen.',
            'add'           => [
                'title'   => 'Eine Komponentengruppe hinzufügen',
                'success' => 'Grupo de componentes agregado.',
                'failure' => 'Algo salió mal con el grupo de componentes, por favor vuelva a intentarlo.',
            ],
            'edit' => [
                'title'   => 'Komponentengruppe bearbeiten',
                'success' => 'Grupo de componentes actualizado.',
                'failure' => 'Algo salió mal con el grupo de componentes, por favor vuelva a intentarlo.',
            ],
            'delete' => [
                'success' => 'El grupo de componentes se ha eliminado!',
                'failure' => 'El grupo de componentes no pudo ser eliminado, por favor, inténtelo de nuevo.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metriken',
        'add'     => [
            'title'   => 'Metrik erstellen',
            'message' => 'Deberías añadir una métrica.',
            'success' => 'Métrica creada.',
            'failure' => 'Algo salió mal con la métrica, por favor, inténtelo de nuevo.',
        ],
        'edit' => [
            'title'   => 'Metrik bearbeiten',
            'success' => 'Métrica actualizada.',
            'failure' => 'Algo salió mal con la métrica, por favor, inténtelo de nuevo.',
        ],
        'delete' => [
            'success' => 'La métrica se ha eliminado y no se mostrará más en tu página de estado.',
            'failure' => 'La métrica no pudo ser eliminada, por favor, inténtelo de nuevo.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Abonnenten',
        'description'      => 'Los suscriptores recibirán actualizaciones por correo electrónico cuando se creen incidentes o se actualicen componentes.',
        'verified'         => 'Verifiziert',
        'not_verified'     => 'Nicht verifiziert',
        'subscriber'       => ':email, suscrito :date',
        'no_subscriptions' => 'Suscrito a todas las actualizaciones',
        'add'              => [
            'title'   => 'Einen neuen Abonnenten hinzufügen',
            'success' => 'Abonnent hinzugefügt.',
            'failure' => 'Algo salió mal al agregar el suscriptor, por favor, inténtelo de nuevo.',
        ],
        'edit' => [
            'title'   => 'Abonnent aktualisieren',
            'success' => 'Abonnent aktualisiert.',
            'failure' => 'Algo salió mal al editar el suscriptor, por favor, inténtelo de nuevo.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Team',
        'member'      => 'Mitglied',
        'profile'     => 'Profil',
        'description' => 'Teammitglieder werden die M&ouml;glichkeit haben, Komponente sowie Vorf&auml;lle hinzuzuf&uuml;gen und zu ver&auml;ndern.',
        'add'         => [
            'title'   => 'Neues Teammitglied hinzufügen',
            'success' => 'Miembro del equipo agregado.',
            'failure' => 'No se pudo agregar el miembro del equipo, por favor vuelva a intentarlo.',
        ],
        'edit' => [
            'title'   => 'Profil aktualisieren',
            'success' => 'Perfil actualizado.',
            'failure' => 'Algo salió mal actualizando el perfil, por favor intente de nuevo.',
        ],
        'delete' => [
            'success' => 'Benutzer aktualisiert.',
            'failure' => 'No se pudo agregar el miembro del equipo, por favor vuelva a intentarlo.',
        ],
        'invite' => [
            'title'   => 'Invitar a un nuevo miembro al equipo',
            'success' => 'Se ha enviado una invitación',
            'failure' => 'La invitación no pudo ser enviada, por favor intente de nuevo.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Einstellungen',
        'app-setup' => [
            'app-setup'   => 'Anwendungsinstallation',
            'images-only' => 'Es können nur Bilder hochgeladen werden.',
            'too-big'     => 'Die von Ihnen hochgeladene Datei ist zu groß. Laden Sie ein Bild welches kleiner als :size ist hoch',
        ],
        'analytics' => [
            'analytics' => 'Analytics',
        ],
        'localization' => [
            'localization' => 'Localization',
        ],
        'customization' => [
            'customization' => 'Personalización',
            'header'        => 'Cabecera HTML personalizada',
            'footer'        => 'Pie HTML personalizado',
        ],
        'security' => [
            'security'   => 'Sicherheit',
            'two-factor' => 'Nutzer ohne Zwei-Faktor-Authentifizierung',
        ],
        'stylesheet' => [
            'stylesheet' => 'Stylesheet',
        ],
        'theme' => [
            'theme' => 'Theme',
        ],
        'edit' => [
            'success' => 'Einstellungen gespeichert.',
            'failure' => 'Einstellungen konnten nicht gespeichert werden.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Anmelden',
        'logged_in'  => 'Sie sind angemeldet.',
        'welcome'    => 'Willkommen zurück!',
        'two-factor' => 'Bitte geben Sie Ihren Token ein.',
    ],

    // Sidebar footer
    'help'        => 'Hilfe',
    'status_page' => 'Statusseite',
    'logout'      => 'Abmelden',

    // Notifications
    'notifications' => [
        'notifications' => 'Benachrichtigungen',
        'awesome'       => 'Großartig.',
        'whoops'        => 'Hoppla.',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Bienvenido a tu página de estado!',
        'message' => 'Ihre Statusseite ist fast fertig! Vielleicht möchten Sie diese zusätzlichen Einstellungen konfigurieren',
        'close'   => 'Llévame directamente a mi dashboard',
        'steps'   => [
            'component'  => 'Komponenten erstellen',
            'incident'   => 'Vorfälle erstellen',
            'customize'  => 'Personalisieren',
            'team'       => 'Benutzer hinzufügen',
            'api'        => 'API Token generieren',
            'two-factor' => 'Zwei-Faktor-Authentifizierung',
        ],
    ],

];
