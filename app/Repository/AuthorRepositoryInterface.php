<?php

namespace App\Repository;

interface AuthorRepositoryInterface
{
    public function showAllAuthors();
    public function showOneAuthor($id);
    public function deleteAuthor($id);
    public function createAuthor($request);
    public function updateAuthor($id, $request);
}