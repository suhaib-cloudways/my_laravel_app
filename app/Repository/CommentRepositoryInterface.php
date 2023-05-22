<?php

namespace App\Repository;

interface CommentRepositoryInterface {

    public function showAllComments();

    public function createComment(Request $request);


}




?>