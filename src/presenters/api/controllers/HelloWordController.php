<?php

namespace App\presenters\api\controllers;

use App\domain\usecases\users\CreateUserUsecase;
use App\presenters\api\protocols\Controller;
use App\presenters\api\protocols\HttpRequest;
use App\presenters\api\protocols\HttpResponse;
use Throwable;


class HelloWordController extends Controller
{

  /**
   *
   * @param HttpRequest $httpRequest
   *
   * @return HttpResponse
   */
  public function __construct(private CreateUserUsecase $createUserUsecase)
  {
    parent::__construct();
  }


  public function handler(HttpRequest $httpRequest): HttpResponse
  {
    try {
      $result = $this->createUserUsecase->execute(params: $httpRequest->body);
      if ($result) {
        return $this->httpResponse->httpOk([
          'msg' => 'Ok'
        ]);
      }
      return $this->httpResponse->httpbadRequest([
        'msg' => 'Error Ocurred'
      ]);
    } catch (Throwable $e) {
      return $this->httpResponse->httpBadRequest(['msg' => $e->getMessage()]);
    }
  }
}
