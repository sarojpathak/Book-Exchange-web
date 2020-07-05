<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_can_login()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/users/login',[
            'email'=>'cccc@mailinator.com',
            'password'=>'123456A',
        ]);
        // $response->assertOK();
        $this->assertCount(1,User::('email','password'));
        

    }
}
