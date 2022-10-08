<?php

namespace App\presenters\api\protocols;

interface Controller
{
  public function handler(HttpRequest $httpRequest): HttpResponse;
}
