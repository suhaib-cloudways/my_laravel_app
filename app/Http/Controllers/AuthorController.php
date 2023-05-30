<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Repository\AuthorRepositoryInterface;
use App\Http\Resources\AuthorResource;
use App\Http\Requests\CreateAuthorRequest;

class AuthorController extends Controller
{

    private AuthorRepositoryInterface $authorRepository;

    public function __construct(AuthorRepositoryInterface $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }
    
    public function index()
    {
        return AuthorResource::collection( $this->authorRepository->showAllAuthors());
    }


    public function showOneAuthor($id)
    {
        return new AuthorResource( $this->authorRepository->showAllAuthors($id));
    }


    public function create(CreateAuthorRequest $request)
    {
        return new AuthorResource($this->authorRepository->createAuthor($request));
    }

    public function update($id, CreateAuthorRequest $request)
    {
        return new AuthorResource($this->authorRepository->updateAuthor($request));
    }


    public function delete($id)
    {
        return new AuthorResource( $this->authorRepository->deleteAuthor($id));
    }
}