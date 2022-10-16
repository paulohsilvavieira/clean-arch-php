<?php

namespace App\main\factories\usecases\users;

use App\domain\usecases\users\CreateUserUsecase;
use App\main\factories\infra\database\repositories\MakeUserRepository;


class MakeCreateUserUsecase
{
  public static function factory()
  {
    $userRepository = MakeUserRepository::factory();
    return new CreateUserUsecase($userRepository);
  }
}
