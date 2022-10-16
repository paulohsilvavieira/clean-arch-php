<?php

namespace App\main\factories\api\controllers;

use App\main\factories\usecases\users\MakeCreateUserUsecase;
use App\presenters\api\controllers\HelloWordController;


class MakeHelloWordController
{
  public static function factory()
  {
    $createUserUsecase = MakeCreateUserUsecase::factory();
    return new HelloWordController($createUserUsecase);
  }
}
