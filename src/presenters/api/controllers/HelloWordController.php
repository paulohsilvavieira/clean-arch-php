<?php

namespace App\presenters\api\controllers;

use App\presenters\api\helpers\Response;
use App\presenters\api\protocols\Controller;
use App\presenters\api\protocols\HttpRequest;
use App\presenters\api\protocols\HttpResponse;


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
    $result = Response::ok(['msg' => 'Hello word']);
    return $result;
  }
}
