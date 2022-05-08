<?php

use App\Account;
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase{

    public function testIfAccountThrowExeptionIfPasswordDoesntContainSpecialCharacter(){

        $account = new Account();

        $this->expectException(\Exception::class);

        $account->setPassword('admin');
    }

    public function testIfAccountThrowRightExceptionMessage()
    {
        try{
            $account = new Account();
            $account->setPassword('password');
        } catch (\Exception $exception) {
            $this->assertStringContainsString('Le mot de passe doit être plus complexe', $exception->getMessage());
        }
    }
}