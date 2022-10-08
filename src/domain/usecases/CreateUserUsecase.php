<?php

namespace App\domain\usecases;

use App\domain\protocols\usecases\ICreateUserUsecase;


class CreateUserUsecase implements ICreateUserUsecase
{

  public static function execute(): bool
  {
    $x = true;

    return $x;
  }
}
