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
}
