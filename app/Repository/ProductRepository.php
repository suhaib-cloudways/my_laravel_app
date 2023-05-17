<?php

namespace App\Repository;

use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductRepository implements ProductRepositoryInterface {

    public function getAllProducts()
    {
       return ProductResource::collection(Product::all());
    }

    public function getSingleProduct($id)
    {
        return ProductResource(Product::findOrFail($id));
    }

    public function create($request)
    {
        return new ProductResource(Product::create($request->all()));
    }


}



?>