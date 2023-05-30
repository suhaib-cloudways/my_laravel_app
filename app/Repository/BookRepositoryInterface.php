<?php

namespace App\Repository;

interface BookRepositoryInterface
{
    public function showAllBooks();
    public function addBook($request);
}