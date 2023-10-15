<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    /**
     * Store a new book.
     *
     * @param Request $request The HTTP request object.
     * @throws \Exception A description of the exception.
     * @return void
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required",
            "author" => "required",
        ]);

        Book::create($data);
    }
}
