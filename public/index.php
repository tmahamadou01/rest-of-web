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
$app->get('/grimoire-url',\App\Controllers\RessourcesController::class . ':index')->setName('ressources');
$app->post('/submit-form',\App\Controllers\RessourcesController::class . ':store')->setName('submit');
$app->get('/grimoire-url/categorie/{name}/{id}',\App\Controllers\RessourcesController::class . ':getRessourcesListOfCategory')->setName('category');



$app->run();



