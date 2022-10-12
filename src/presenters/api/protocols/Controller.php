<?php

namespace App\presenters\api\protocols;

use App\presenters\api\helpers\Response;

abstract class Controller
{
  public Response $httpResponse;

  /**zz
   *
   * @param HttpRequest $httpRequest
   *
   * @return HttpResponse
   */
  public function __construct()
  {
    $this->httpResponse = new Response();
  }

  abstract public function handler(HttpRequest $httpRequest): HttpResponse;
}
