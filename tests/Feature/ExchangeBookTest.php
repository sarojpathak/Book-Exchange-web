<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Book;
use App\Exchanges;

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
        $exchanges = factory(Exchanges::class)->make();

        $response = $this->post('users/exchangebook', [
            'book_wanted' => $exchanges->book_wanted,
            'book_offered' => $exchanges->book_offered,
            'requested_by' => $exchanges->requested_by,
            'requested_to' => $exchanges->requested_to,
            'status'=> $exchanges->status,
        ]);

        $response->assertStatus(302);
    }
}
