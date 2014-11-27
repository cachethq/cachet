<?php

Route::model('component', 'Component');
Route::model('incident', 'Incident');
Route::model('incident_template', 'IncidentTemplate');
Route::model('setting', 'Setting');
Route::model('webhook', 'WebHook');
Route::model('user', 'User');

routesInDirectory();

function routesInDirectory($app = '') {
    $routeDir = app_path('routes/' . $app . ($app !== '' ? '/' : null));
    $iterator = new RecursiveDirectoryIterator($routeDir);
    $iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);

    foreach ($iterator as $route) {
        $isDotFile = strpos($route->getFilename(), '.') === 0;

        if (!$isDotFile && !$route->isDir()) {
            require $routeDir . $route->getFilename();
        }
    }
}
