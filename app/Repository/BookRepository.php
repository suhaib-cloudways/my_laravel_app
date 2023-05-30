<?php


namespace App\Repository;

use App\Models\Books;
use App\Repository\BookRepositoryInterface;

class BookRepository implements BookRepositoryInterface {


    public function showAllBooks()
    {
        return Books::all();
    }

    public function addBook($data)
    {
        $books  = [1, 2, 3];
        $newBook = Books::create($data->all());
        $newBook->auhtors()->attach($books);
        return $newBook;

    }

}



?>