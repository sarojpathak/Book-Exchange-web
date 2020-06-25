<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class UserRegistrationTest extends TestCase
{
    /** @test */
    public function a_user_can_register_into_system()
    {
        
        // $response = $this->post('/users');
        // $response->assertStatus(200);

       $this->withoutExceptionHandling();
        $response = $this->post('/users/register',[
            'name' => 'Victor',
            'email' => 'Victor@gmail.com',
            'password' => 'V123456',
            'phone' => '1234567890',
            'address'=> 'ktm'
        ]);

        $response->assertOK();
        $response->assertCount(1,User::all());
    }
}
