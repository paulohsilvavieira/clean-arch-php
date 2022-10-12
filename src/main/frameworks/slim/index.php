<?php

use App\main\frameworks\slim\routes\Router;
use Slim\Factory\AppFactory;


$app = AppFactory::create();
$router = new Router();
$router->route($app);

$app->run();
