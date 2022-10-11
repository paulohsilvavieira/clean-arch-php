<?php

namespace App\domain\protocols\repositories\users;

use App\domain\protocols\usecases\users\DTO\CreateUserParamsDTO;

interface ICreateUserRepo
{
  public function create(CreateUserParamsDTO $params): bool;
}
