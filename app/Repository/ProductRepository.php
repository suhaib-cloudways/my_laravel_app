<?php

namespace App\Repository;

use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductRepository implements ProductRepositoryInterface {

    public function getAllProducts()
    {
       return Product::all();
    }

    public function getSingleProduct($id)
    {
        return Product::findOrFail($id);
    }

    public function createProduct($data)
    {
        return Product::create($data->all());
    }


}



?>