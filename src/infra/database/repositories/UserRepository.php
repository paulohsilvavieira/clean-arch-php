<?php

namespace App\infra\database\repositories;

use App\domain\protocols\repositories\users\ICreateUserRepo;
use App\domain\protocols\usecases\users\DTO\CreateUserParamsDTO;

class UserRepository implements ICreateUserRepo
{
  public function create(CreateUserParamsDTO $params): bool
  {
    return true;
  }
}
