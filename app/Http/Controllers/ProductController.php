<?php 

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\ProductRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{
    protected $productCollection;

    public function __construct(ProductRepositoryInterface $productCollection) {
        $this->productCollection = $productCollection;
    }



    public function index()
    {
        // return all products

      return  ProductResource::collection($this->productCollection->getAllProducts());

    }

    public function create(CreateProductRequest $request)
    {
     return new ProductResource($this->productCollection->createProduct($request));
    }
}
?>