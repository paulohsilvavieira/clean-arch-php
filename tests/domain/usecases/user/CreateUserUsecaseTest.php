<?php

use App\domain\protocols\repositories\users\ICreateUserRepo;
use App\domain\protocols\usecases\users\DTO\CreateUserParamsDTO;
use App\domain\usecases\users\CreateUserUsecase;
use PHPUnit\Framework\TestCase;



class CreateUserUsecaseTest extends TestCase
{

  private function mocks()
  {
    $createUserRepoMock = $this->createMock(ICreateUserRepo::class);
    return [$createUserRepoMock];
  }

  public function testExecuteUsecase()
  {
    $params = new CreateUserParamsDTO('paulo', 'paulo.hsilvavieira', 'henrique');

    list($mockCreateUser) = $this->mocks();

    $mockCreateUser->method('create')->willreturn(true);

    $sut = new CreateUserUsecase($mockCreateUser);
    $result = $sut->execute($params);

    $this->assertEquals(true, $result);
  }


  public function testVerifyParamsOnCreateUserRepo()
  {
    $params = new CreateUserParamsDTO('john', 'johndoe@mail.com', 'doe');

    list($mockCreateUser) = $this->mocks();

    $mockCreateUser->method('create')->willreturn(true);

    $mockCreateUser->expects($this->once())->method('create')->with(new CreateUserParamsDTO('john', 'johndoe@mail.com', 'doe'));

    $sut = new CreateUserUsecase($mockCreateUser);

    $sut->execute($params);
  }
}
