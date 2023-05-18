<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentsRequest;

class CommentController extends Controller
{


    public function addComment(CreateCommentRequest $request, $id, array $data ) {

        $validated = $request->validated();
      

        return new CommentResource(Comment::create($data->all()));


    }




}