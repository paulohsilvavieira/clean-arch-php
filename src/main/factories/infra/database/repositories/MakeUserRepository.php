<?php

namespace App\main\factories\infra\database\repositories;

use App\infra\database\pdo\repositories\UserRepository;


class MakeUserRepository
{
  public static function factory()
  {
    return new UserRepository();
  }
}
