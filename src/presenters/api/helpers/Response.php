<?php

namespace App\presenters\api\helpers;

use App\presenters\api\protocols\HttpResponse;


class Response
{
  public function httpOk($msg): HttpResponse
  {
    return  new HttpResponse(200, $msg);
  }

  public  function httpbadRequest($msg): HttpResponse
  {
    return  new HttpResponse(400, $msg);
  }


  public  function httpUnauthorized($msg): HttpResponse
  {
    return  new HttpResponse(401, $msg);
  }

  public static function httpServerError($msg): HttpResponse
  {
    return  new HttpResponse(500, $msg);
  }

  public static function httpNotContent(): HttpResponse
  {
    return  new HttpResponse(500, null);
  }
}
