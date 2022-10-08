<?php

namespace App\presenters\api\protocols;

class HttpRequest
{
  private $body;
  private $params;
  private $query;
  public function __construct(
    $body,
    $params,
    $query
  ) {
    $this->params = $params;
    $this->body = $body;
    $this->query = $query;
  }
  public function getParams(string $field = null)
  {
    if (!isset($field)) return $this->params;
    return $this->params[$field];
  }

  public function getBody(string $field = null)
  {
    if (!isset($field)) return $this->body;

    return $this->body[$field];
  }
  public function getQuery(string $field = null)
  {
    if (!isset($field)) return $this->query;

    return $this->query[$field];
  }
}
