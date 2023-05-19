<?php


namespace App\Repository;

use App\Models\Comment;
use App\Models\Product;

class CommentRepository implements CommentRepositoryInterface {


    public function showAllComments()
    {
        return Comment::all();
    }

    public function createComment($request)
    {
        return Comment::create($request->all());
    }



}



?>