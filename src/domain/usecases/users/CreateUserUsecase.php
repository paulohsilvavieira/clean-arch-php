<?php

/**
 * Tips: When you use static functions on class, isn`t possible use  `$this` inside, if you will 
 * use attributes and functions from class inside static function, use `self::`
 * 
 */

namespace App\domain\usecases\users;

use App\domain\protocols\repositories\users\ICreateUserRepo;
use App\domain\protocols\usecases\users\ICreateUserUsecase;
use App\domain\protocols\usecases\users\DTO\CreateUserParamsDTO;

class CreateUserUsecase implements ICreateUserUsecase
{
  public function __construct(protected ICreateUserRepo  $userRepository)
  {
  }

  public function execute(CreateUserParamsDTO $params): bool
  {
    $result = $this->userRepository->create($params);

    return $result;
  }
}
