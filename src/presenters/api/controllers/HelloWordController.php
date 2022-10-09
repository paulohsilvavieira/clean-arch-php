<?php

namespace App\presenters\api\controllers;

use App\presenters\api\helpers\Response;
use App\presenters\api\protocols\Controller;
use App\presenters\api\protocols\HttpRequest;
use App\presenters\api\protocols\HttpResponse;
use PHPUnit\Runner\Exception;
use Throwable;


class HelloWordController implements Controller
{
  /**
   *
   * @param HttpRequest $httpRequest
   *
   * @return HttpResponse
   */
  public function handler(HttpRequest $httpRequest): HttpResponse
  {
    try {


      $result = Response::ok(['msg' => 'Hello word']);
      return $result;
    } catch (Throwable $e) {
      return Response::badRequest(['msg' => $e->getMessage()]);
    }
  }
}
