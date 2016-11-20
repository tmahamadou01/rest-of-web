<?php

//chargeent de l'autoloader de composer
require "../vendor/autoload.php";

//initialisation de slim
$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

require "../app/Container.php";

//routes
$app->get('/',\App\Controllers\IndexController::class . ':index');
$app->get('/rest-of-web',\App\Controllers\RessourcesController::class . ':index')->setName('ressources');
$app->post('/submit-form',\App\Controllers\RessourcesController::class . ':store')->setName('submit');



$app->run();



