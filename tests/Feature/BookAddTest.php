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

    // public function testgetAddBookAValidUser()
    // {
    //     $book = (Book::class);

    //     $response = $this->get('users/addbook');

    //     $response->assertViewIs($book);
    // }

    // public function testgetUserBookDetailsbyId()
    // {
    //     $book = factory(Book::class)->make();

    //     $response = $this->get('users/book-detail/{id}', [
    //         'name' => $book->name,
    //         'author' => $book->author,
    //         'description' => $book->description,
    //         'image' => $book->image,
    //         'condition'=> $book->condition,
    //         'belongs_to'=>$book->belongs_to,
    //     ]);

    //     $response->assertOk();
    // }

    public function testGetBooksDetails()
    {
        //Given we have books in the database
        $books = factory('App\Book')->create();

        //When user visit the books page
        $response = $this->get('/');
        
        //He should be able to read the books
        $response->assertSee($books->name);

    }

    public function testGetBooksDetailsById()
    {
         //Given we have task in the database
        $book = factory('App\Book')->create();
        //When user visit the task's URI
        $response = $this->get('/users/book-detail/{id}'.$book->id);
        //He can see the task details
        $response->assertSee($book->name)
        ->assertSee($book->author);

    }
}
