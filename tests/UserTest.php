<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
  // test for checking Login page
    public function testLogin()
    {
         $this->visit('login')
             ->see('Login | Contact Manager');
    }
  // test for checking signup page
    public function testSignup()
    {
         $this->visit('signup')
             ->see('SignUp | Contact Manager');
    }
}
