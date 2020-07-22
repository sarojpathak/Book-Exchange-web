<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Book;
use App\Exchange;

class ExchangeBookTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExchangesbookValidUser()
    {
        $this->withoutExceptionHandling();
        $exchange = factory(Exchange::class)->make();

        $response = $this->post('users/exchangebook', [
            'book_offered' => $exchange->book_offered,
            'book_wanted' => $exchange->book_wanted,
            'requested_by' => $exchange->requested_by,
            'requested_to' => $exchange->requested_to,
            'status'=> $exchange->status,
        ]);

        $response->assertStatus(302);
    }
}
