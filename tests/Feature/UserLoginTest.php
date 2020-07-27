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

    public function testGetUserBookListById()
    {
         //Given we have task in the database
        $book = factory('App\Book')->create();
        //When user visit the task's URI
        $response = $this->get('/users/booklist/{id}',['id' => 1]);
        //He can see the task details
        $response->assertSee($book->name);
    }
}
