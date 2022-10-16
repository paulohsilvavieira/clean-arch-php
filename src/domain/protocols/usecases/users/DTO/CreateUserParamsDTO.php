<?php

namespace App\domain\protocols\usecases\users\DTO;


class CreateUserParamsDTO
{
  public function __construct(
    private string $name,
    private string $lastName,
    private string $email
  ) {
  }
}
