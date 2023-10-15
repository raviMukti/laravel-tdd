<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookReservationTest extends TestCase
{
    
    use RefreshDatabase;

    /**
     * Method a_book_can_added_to_library
     *
     * @return void
     */
    public function test_a_book_can_added_to_library()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/api/books', 
            [
                "title" => "Test Book",
                "author" => "Test Author",
            ]
        );

        $response->assertOk();
        $this->assertCount(1, Book::all());
    }
}
