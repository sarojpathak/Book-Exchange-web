<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class UserRegistrationTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_can_register_into_system()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/users/register',[
            'name' => 'Amos xxx',
            'email' => 'cccc@mailinator.com',
            'password' => '123456A',
            'phone' => '98430123654789569240',
            'address'=> 'Ut dolorem ut',
        ]);
        $this->assertCount(1,User::all());
        // $response->assertSuccessful();



    }
}
