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

        $products =  $this->productCollection->getAllProducts();

        return ProductResource::collection(Product::all());

    }

    public function create(CreateProductRequest $request)
    {
        $products = $this->productCollection->create($request);

        return new ProductResource(Product::create($request->all()));
    }
}
?>