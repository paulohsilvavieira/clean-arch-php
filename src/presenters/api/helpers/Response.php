<?php

namespace App\presenters\api\helpers;

use App\presenters\api\protocols\HttpResponse;


class Response
{
  public  static function ok($msg): HttpResponse
  {
    return  new HttpResponse(200, $msg);
  }

  public static function badRequest($msg): HttpResponse
  {
    return  new HttpResponse(400, $msg);
  }


  public static function unauthorized($msg): HttpResponse
  {
    return  new HttpResponse(401, $msg);
  }

  public static function serverError($msg): HttpResponse
  {
    return  new HttpResponse(500, $msg);
  }

  public static function notContent(): HttpResponse
  {
    return  new HttpResponse(500, null);
  }
}
