<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class UserRegistrationTest extends TestCase
{
    use RefreshDatabase;
    /** @test */

    public function testRegisterFormDisplayed()
    {
        $response = $this->get('/users/register');

        $response->assertStatus(200);
        $response->assertSuccessful();
    }


    // public function a_user_can_register_into_system()
    // {
    //     $this->withoutExceptionHandling();
    //     $response = $this->post('/users/register',[
    //         'name' => 'Amos xxx',
    //         'email' => 'cccc@mailinator.com',
    //         'password' => '123456A',
    //         'phone' => '1236547898',
    //         'address'=> 'Ut dolorem ut',
    //     ]);
    //     $this->assertCount(1,User::all());
    //     // $response->assertSuccessful();



    // }

    public function testRegistersAValidUser()
    {
        $user = factory(User::class)->make();

        $response = $this->post('/users/register', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => 'secret',
            'password_confirmation' => 'secret',
            'phone' => '1254789654',
            'address'=> $user->address,
        ]);

        $response->assertStatus(302);
    }

    public function testDoesNotRegisterAnInvalidUser()
    {
        $user = factory(User::class)->make();

        $response = $this->post('/users/register', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => 'secret',
            'password_confirmation' => 'invalid',
            'phone' => $user->phone,
            'address'=> $user->address,
        ]);

        $response->assertSessionHasErrors();
    }
}
