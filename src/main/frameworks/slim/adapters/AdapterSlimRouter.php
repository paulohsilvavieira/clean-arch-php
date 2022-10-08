<?php

namespace App\main\frameworks\slim\adapters;

use App\presenters\api\protocols\Controller;
use App\presenters\api\protocols\HttpRequest;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class AdapterSlimRouter
{
  public static function routerAdapter(Controller $controller)
  {
    return function (Request &$request, Response &$response, &$args) use ($controller) {
      $httpRequest = new HttpRequest($request->getBody(), $args, $request->getQueryParams());
      $httpResponse = $controller->handler($httpRequest);

      $response->getBody()->write(json_encode($httpResponse->getBody()));
      return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus($httpResponse->getStatusCode());
    };
  }
}
