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



$app->run();



