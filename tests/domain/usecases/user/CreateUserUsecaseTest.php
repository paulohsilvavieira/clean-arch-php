<?php

use App\domain\usecases\CreateUserUsecase;
use PHPUnit\Framework\TestCase;

class CreateUserUsecaseTest extends TestCase
{

  public function testExecuteUsecase()
  {
    $sut = new CreateUserUsecase();
    $result = $sut::execute();

    $this->assertEquals(true, $result);
  }
}
