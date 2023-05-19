<?php
namespace App\Repository;

interface IProductRepository {

    public function getAllProducts();

    public function getSingleProduct($id);

    public function createProduct(Request $request);


}




?>