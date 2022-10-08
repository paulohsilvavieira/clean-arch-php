<?php

namespace App\presenters\api\protocols;

class HttpResponse
{
  private int $statusCode;
  private $body;

  public function __construct($statusCode, $body)
  {
    $this->statusCode = $statusCode;
    $this->body = $body;
  }

  public function getStatusCode()
  {
    return $this->statusCode;
  }

  public function getBody()
  {
    return $this->body;
  }
}
