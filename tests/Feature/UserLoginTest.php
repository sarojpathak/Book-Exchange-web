<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function register_user_can_login()
    {
        $user = factory(User::class)->make();

        $response = $this->post('/users/login', [
            'email' => $user->email,
            'password' => 'secret',
            'password_confirmation' => 'secret',
        ]);

        $response->assertStatus(302);
    }

    public function testGetUserDetailsById()
    {
         //Given we have task in the database
        $user = factory('App\User')->create();
        //When user visit the task's URI
        $response = $this->get('/users/profile/{id}'.$user->id);
        //He can see the task details
        $response->assertSee($user->name)
        ->assertSee($user->email);

    }

    public function testPostUserInformation()
    {
        $user = factory('App\User')->create();
        $response = $this->get('/users/user-info',['id'=>25]);
        $response->assertSee($user->name)
        ->assertSee($user->email);
    }

    public function testGetRequestedTo()
    {
        $exchangeRequests = factory('App\Exchange')->create();
        $response = $this->get('/users/requests-to',['id' => 100]);
        $response->assertSee($exchangeRequests->requested_by)
        ->assertSee($exchangeRequests->requested_to)
        ->assertSee($exchangeRequests->book_offered)
        ->assertSee($exchangeRequests->book_wanted);


        
    }
}
