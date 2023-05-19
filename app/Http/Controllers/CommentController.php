<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Repository\CommentRepositoryInterface;
use App\Http\Requests\CreateCommentsRequest;

class CommentController extends Controller
{

    protected $Comments;

    public function __construct(CommentRepositoryInterface $Comments) {
        $this->Comments = $Comments;
    }


    public function create(CreateCommentRequest $request ) {
       

        $comments = $this->Comments->createComment($request);
        return new CommentResource(Comment::create($request->all()));


    }

    public function index()
    {
        $comments =  $this->Comments->showAllComments();
        return CommentResource::collection(Comment::all());
    }

    public function store(CreateCommentRequest $request, Product $product)
    {
        $comment = Comment::make($request);
        $comment->post()->associate($product);
        $comment->save();

        return new CommentResource($comment->fresh());
    }

}