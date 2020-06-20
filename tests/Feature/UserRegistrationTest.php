<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserRegistrationTest extends TestCase
{
    /** @test */
    public function a_user_can_register_into_system()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/users');
        $response->assertStatus(200);

        // $response->assertStatus(200);
        // $response = $this->post('/users',[
        //     'full_name'=>'Cool Book Title',
        //     'address'=>'Victor',
        //     'email'=>'Victor@gmail.com',
        //     'phone'=>'1234567898'
        // ]);

        // $response->assertOK();
        // $response->assertCount(1,User::all());
    }
}
