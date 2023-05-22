<?php
namespace App\Repository;

interface ProductRepositoryInterface {

    public function getAllProducts();

    public function getSingleProduct($id);

    public function createProduct(Request $request);


}




?>