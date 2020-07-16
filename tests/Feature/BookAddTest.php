<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Book;
use App\User;

class BookAddTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAddBookAValidUser()
    {
        $book = factory(Book::class)->make();

        $response = $this->post('users/addbook', [
            'name' => $book->name,
            'author' => $book->author,
            'description' => $book->description,
            'image' => $book->image,
            'condition'=> $book->condition,
            'belongs_to'=>$book->belongs_to,
        ]);

        $response->assertStatus(302);
    }

    public function testgetAddBookAValidUser()
    {
        $book = factory(Book::class)->make();

        $response = $this->get('users/addbook', [
            'name' => $book->name,
            'author' => $book->author,
            'description' => $book->description,
            'image' => $book->image,
            'condition'=> $book->condition,
            'belongs_to'=>$book->belongs_to,
        ]);

        $response->assertStatus(302);
    }

    public function testgetUserBookDetailsbyId()
    {
        $book = factory(Book::class)->make();

        $response = $this->get('users/book-detail/{id}', [
            'name' => $book->name,
            'author' => $book->author,
            'description' => $book->description,
            'image' => $book->image,
            'condition'=> $book->condition,
            'belongs_to'=>$book->belongs_to,
        ]);

        $response->assertStatus(500);
    }
}
