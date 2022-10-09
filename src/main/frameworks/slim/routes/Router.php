<?php

namespace App\main\frameworks\slim\routes;

use App\main\factories\api\controllers\MakeHelloWordController;
use App\main\frameworks\slim\adapters\AdapterSlimRouter;

use Slim\App;


class Router
{
  public static function route(App $app)
  {

    $app->get('/books/{id}/{book}', AdapterSlimRouter::routerAdapter(MakeHelloWordController::factory()));
  }
}
