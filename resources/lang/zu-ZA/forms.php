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

    // Setup form fields
    'setup' => [
        'email'            => 'crwdns1098:0crwdne1098:0',
        'username'         => 'crwdns1099:0crwdne1099:0',
        'password'         => 'crwdns1100:0crwdne1100:0',
        'site_name'        => 'crwdns1101:0crwdne1101:0',
        'site_domain'      => 'crwdns1102:0crwdne1102:0',
        'site_timezone'    => 'crwdns1103:0crwdne1103:0',
        'site_locale'      => 'crwdns1104:0crwdne1104:0',
        'enable_google2fa' => 'crwdns1105:0crwdne1105:0',
        'cache_driver'     => 'crwdns1106:0crwdne1106:0',
        'queue_driver'     => 'crwdns1107:0crwdne1107:0',
        'session_driver'   => 'crwdns1108:0crwdne1108:0',
        'mail_driver'      => 'crwdns1109:0crwdne1109:0',
        'mail_host'        => 'crwdns1110:0crwdne1110:0',
        'mail_address'     => 'crwdns1111:0crwdne1111:0',
        'mail_username'    => 'crwdns1112:0crwdne1112:0',
        'mail_password'    => 'crwdns1113:0crwdne1113:0',
    ],

    // Login form fields
    'login' => [
        'login'         => 'crwdns1114:0crwdne1114:0',
        'email'         => 'crwdns1115:0crwdne1115:0',
        'password'      => 'crwdns1116:0crwdne1116:0',
        '2fauth'        => 'crwdns1117:0crwdne1117:0',
        'invalid'       => 'crwdns1118:0crwdne1118:0',
        'invalid-token' => 'crwdns1119:0crwdne1119:0',
        'cookies'       => 'crwdns1120:0crwdne1120:0',
        'rate-limit'    => 'crwdns1121:0crwdne1121:0',
        'remember_me'   => 'crwdns1122:0crwdne1122:0',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'crwdns1123:0crwdne1123:0',
        'status'             => 'crwdns1124:0crwdne1124:0',
        'component'          => 'crwdns1125:0crwdne1125:0',
        'component_status'   => 'crwdns1425:0crwdne1425:0',
        'message'            => 'crwdns1126:0crwdne1126:0',
        'message-help'       => 'crwdns1127:0crwdne1127:0',
        'occurred_at'        => 'crwdns1128:0crwdne1128:0',
        'notify_subscribers' => 'crwdns1129:0crwdne1129:0',
        'notify_disabled'    => 'crwdns1426:0crwdne1426:0',
        'visibility'         => 'crwdns1130:0crwdne1130:0',
        'stick_status'       => 'crwdns1131:0crwdne1131:0',
        'stickied'           => 'crwdns1132:0crwdne1132:0',
        'not_stickied'       => 'crwdns1133:0crwdne1133:0',
        'public'             => 'crwdns1134:0crwdne1134:0',
        'logged_in_only'     => 'crwdns1135:0crwdne1135:0',
        'templates'          => [
            'name'     => 'crwdns1136:0crwdne1136:0',
            'template' => 'crwdns1137:0crwdne1137:0',
            'twig'     => 'crwdns1138:0crwdne1138:0',
        ],
    ],

    'schedules' => [
        'name'         => 'crwdns1139:0crwdne1139:0',
        'status'       => 'crwdns1140:0crwdne1140:0',
        'message'      => 'crwdns1141:0crwdne1141:0',
        'message-help' => 'crwdns1142:0crwdne1142:0',
        'scheduled_at' => 'crwdns1143:0crwdne1143:0',
        'completed_at' => 'crwdns1144:0crwdne1144:0',
        'templates'    => [
            'name'     => 'crwdns1145:0crwdne1145:0',
            'template' => 'crwdns1146:0crwdne1146:0',
            'twig'     => 'crwdns1147:0crwdne1147:0',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'crwdns1148:0crwdne1148:0',
        'status'      => 'crwdns1149:0crwdne1149:0',
        'group'       => 'crwdns1150:0crwdne1150:0',
        'description' => 'crwdns1151:0crwdne1151:0',
        'link'        => 'crwdns1152:0crwdne1152:0',
        'tags'        => 'crwdns1153:0crwdne1153:0',
        'tags-help'   => 'crwdns1154:0crwdne1154:0',
        'enabled'     => 'crwdns1155:0crwdne1155:0',

        'groups' => [
            'name'                     => 'crwdns1156:0crwdne1156:0',
            'collapsing'               => 'crwdns1157:0crwdne1157:0',
            'visible'                  => 'crwdns1158:0crwdne1158:0',
            'collapsed'                => 'crwdns1159:0crwdne1159:0',
            'collapsed_incident'       => 'crwdns1160:0crwdne1160:0',
            'visibility'               => 'crwdns1161:0crwdne1161:0',
            'visibility_public'        => 'crwdns1162:0crwdne1162:0',
            'visibility_authenticated' => 'crwdns1163:0crwdne1163:0',
        ],
    ],

    // Action form fields
    'actions' => [
        'name'               => 'crwdns1164:0crwdne1164:0',
        'description'        => 'crwdns1165:0crwdne1165:0',
        'start_at'           => 'crwdns1166:0crwdne1166:0',
        'timezone'           => 'crwdns1167:0crwdne1167:0',
        'schedule_frequency' => 'crwdns1168:0crwdne1168:0',
        'completion_latency' => 'crwdns1169:0crwdne1169:0',
        'group'              => 'crwdns1170:0crwdne1170:0',
        'active'             => 'crwdns1171:0crwdne1171:0',
        'groups'             => [
            'name' => 'crwdns1172:0crwdne1172:0',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'                     => 'crwdns1173:0crwdne1173:0',
        'suffix'                   => 'crwdns1174:0crwdne1174:0',
        'description'              => 'crwdns1175:0crwdne1175:0',
        'description-help'         => 'crwdns1176:0crwdne1176:0',
        'display-chart'            => 'crwdns1177:0crwdne1177:0',
        'default-value'            => 'crwdns1178:0crwdne1178:0',
        'calc_type'                => 'crwdns1179:0crwdne1179:0',
        'type_sum'                 => 'crwdns1180:0crwdne1180:0',
        'type_avg'                 => 'crwdns1181:0crwdne1181:0',
        'places'                   => 'crwdns1182:0crwdne1182:0',
        'default_view'             => 'crwdns1183:0crwdne1183:0',
        'threshold'                => 'crwdns1184:0crwdne1184:0',
        'visibility'               => 'crwdns1185:0crwdne1185:0',
        'visibility_authenticated' => 'crwdns1186:0crwdne1186:0',
        'visibility_public'        => 'crwdns1187:0crwdne1187:0',
        'visibility_hidden'        => 'crwdns1188:0crwdne1188:0',

        'points' => [
            'value' => 'crwdns1189:0crwdne1189:0',
        ],
    ],

    // Settings
    'settings' => [
        // Application setup
        'app-setup' => [
            'site-name'                             => 'crwdns1190:0crwdne1190:0',
            'site-url'                              => 'crwdns1191:0crwdne1191:0',
            'display-graphs'                        => 'crwdns1192:0crwdne1192:0',
            'about-this-page'                       => 'crwdns1193:0crwdne1193:0',
            'days-of-incidents'                     => 'crwdns1194:0crwdne1194:0',
            'time_before_refresh'                   => 'crwdns1434:0crwdne1434:0',
            'major_outage_rate'                     => 'crwdns1444:0crwdne1444:0',
            'banner'                                => 'crwdns1195:0crwdne1195:0',
            'banner-help'                           => 'crwdns1435:0crwdne1435:0',
            'subscribers'                           => 'crwdns1197:0crwdne1197:0',
            'suppress_notifications_in_maintenance' => 'crwdns1427:0crwdne1427:0',
            'skip_subscriber_verification'          => 'crwdns1198:0crwdne1198:0',
            'automatic_localization'                => 'crwdns1199:0crwdne1199:0',
            'enable_external_dependencies'          => 'crwdns1200:0crwdne1200:0',
            'show_timezone'                         => 'crwdns1436:0crwdne1436:0',
            'only_disrupted_days'                   => 'crwdns1202:0crwdne1202:0',
        ],
        'analytics' => [
            'analytics_google'       => 'crwdns1203:0crwdne1203:0',
            'analytics_gosquared'    => 'crwdns1204:0crwdne1204:0',
            'analytics_piwik_url'    => 'crwdns1524:0crwdne1524:0',
            'analytics_piwik_siteid' => 'crwdns1206:0crwdne1206:0',
        ],
        'localization' => [
            'site-timezone'        => 'crwdns1207:0crwdne1207:0',
            'site-locale'          => 'crwdns1208:0crwdne1208:0',
            'date-format'          => 'crwdns1209:0crwdne1209:0',
            'incident-date-format' => 'crwdns1210:0crwdne1210:0',
        ],
        'security' => [
            'allowed-domains'           => 'crwdns1211:0crwdne1211:0',
            'allowed-domains-help'      => 'crwdns1212:0crwdne1212:0',
            'always-authenticate'       => 'crwdns1445:0crwdne1445:0',
            'always-authenticate-help'  => 'crwdns1446:0crwdne1446:0',
        ],
        'stylesheet' => [
            'custom-css' => 'crwdns1213:0crwdne1213:0',
        ],
        'theme' => [
            'background-color'        => 'crwdns1214:0crwdne1214:0',
            'background-fills'        => 'crwdns1215:0crwdne1215:0',
            'banner-background-color' => 'crwdns1216:0crwdne1216:0',
            'banner-padding'          => 'crwdns1217:0crwdne1217:0',
            'fullwidth-banner'        => 'crwdns1442:0crwdne1442:0',
            'text-color'              => 'crwdns1219:0crwdne1219:0',
            'dashboard-login'         => 'crwdns1220:0crwdne1220:0',
            'reds'                    => 'crwdns1221:0crwdne1221:0',
            'blues'                   => 'crwdns1222:0crwdne1222:0',
            'greens'                  => 'crwdns1223:0crwdne1223:0',
            'yellows'                 => 'crwdns1224:0crwdne1224:0',
            'oranges'                 => 'crwdns1225:0crwdne1225:0',
            'metrics'                 => 'crwdns1226:0crwdne1226:0',
            'links'                   => 'crwdns1227:0crwdne1227:0',
        ],
    ],

    'user' => [
        'username'       => 'crwdns1228:0crwdne1228:0',
        'email'          => 'crwdns1229:0crwdne1229:0',
        'password'       => 'crwdns1230:0crwdne1230:0',
        'api-token'      => 'crwdns1231:0crwdne1231:0',
        'api-token-help' => 'crwdns1232:0crwdne1232:0',
        'gravatar'       => 'crwdns1233:0crwdne1233:0',
        'user_level'     => 'crwdns1234:0crwdne1234:0',
        'levels'         => [
            'admin' => 'crwdns1235:0crwdne1235:0',
            'user'  => 'crwdns1236:0crwdne1236:0',
        ],
        '2fa' => [
            'help' => 'crwdns1237:0crwdne1237:0',
        ],
        'team' => [
            'description' => 'crwdns1238:0crwdne1238:0',
            'email'       => 'crwdns1423:0crwdne1423:0',
        ],
    ],

    'general' => [
        'timezone' => 'crwdns1240:0crwdne1240:0',
    ],

    'seo' => [
        'title'        => 'crwdns1526:0crwdne1526:0',
        'description'  => 'crwdns1528:0crwdne1528:0',
    ],

    // Buttons
    'add'            => 'crwdns1241:0crwdne1241:0',
    'save'           => 'crwdns1242:0crwdne1242:0',
    'update'         => 'crwdns1243:0crwdne1243:0',
    'create'         => 'crwdns1244:0crwdne1244:0',
    'edit'           => 'crwdns1245:0crwdne1245:0',
    'delete'         => 'crwdns1246:0crwdne1246:0',
    'submit'         => 'crwdns1247:0crwdne1247:0',
    'cancel'         => 'crwdns1248:0crwdne1248:0',
    'remove'         => 'crwdns1249:0crwdne1249:0',
    'invite'         => 'crwdns1250:0crwdne1250:0',
    'signup'         => 'crwdns1251:0crwdne1251:0',
    'manage_updates' => 'crwdns1424:0crwdne1424:0',

    // Other
    'optional' => 'crwdns1252:0crwdne1252:0',
];
