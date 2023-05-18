<?php

namespace App\Repository;

interface AdminRepositoryInterface {

    public function adminShowAllProduct();

    public function adminGetAllComments();

    public function adminDeleteComment($id);

    public function adminDeleteProduct($id);

}




?>