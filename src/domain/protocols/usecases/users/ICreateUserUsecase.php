<?php

namespace App\domain\protocols\usecases\users;

use App\domain\protocols\usecases\users\DTO\CreateUserParamsDTO;

interface ICreateUserUsecase
{
  public function execute(CreateUserParamsDTO $params): bool;
}
