<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\BookResource;
use App\Repository\BookRepositoryInterface;

class BooksController extends Controller
{
    protected $Books;

    public function __construct(BookRepositoryInterface $Books) {
        $this->Books = $Books;
    }

    public function index()
    {
        return BookResource::collection( $this->Books->showAllBooks());
    }


    public function create(Request $request ) {
       

       return new BookResource($this->Books->addBook($request));

    }
    
}
