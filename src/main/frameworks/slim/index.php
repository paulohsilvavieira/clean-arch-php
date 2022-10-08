<?php

use App\main\frameworks\slim\routes\Router;
use Slim\Factory\AppFactory;


$app = AppFactory::create();

Router::route($app);

$app->run();
