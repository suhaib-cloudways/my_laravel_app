<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;
use App\Repository\CommentRepositoryInterface;
use App\Http\Requests\CreateCommentsRequest;

class CommentController extends Controller
{

    protected $Comments;

    public function __construct(CommentRepositoryInterface $Comments) {
        $this->Comments = $Comments;
    }


    public function create(CreateCommentsRequest $request ) {
       

       return new CommentResource($this->Comments->createComment($request));


    }

    public function index()
    {
        return CommentResource::collection($this->Comments->showAllComments());
    }


}