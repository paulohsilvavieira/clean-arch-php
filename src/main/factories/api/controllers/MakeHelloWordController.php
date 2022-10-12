<?php

namespace App\main\factories\api\controllers;

use App\presenters\api\controllers\HelloWordController;
use App\presenters\api\protocols\Controller;


class MakeHelloWordController
{
  public static function factory()
  {
    return new HelloWordController();
  }
}
