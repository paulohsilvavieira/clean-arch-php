<?php

namespace App\main\frameworks\slim\routes;

use App\main\factories\api\controllers\MakeHelloWordController;
use App\main\frameworks\slim\adapters\AdapterSlimRouter;

use Slim\App;


class Router
{
  public static function route(App $app)
  {

    $app->post('/', AdapterSlimRouter::routerAdapter(MakeHelloWordController::factory()));
  }
}
