<?php 

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\ProductRepositoryInterface;
use Illuminate\Http\Request;
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

        return response()->json($products, 201);

    }

    public function create(array $data, CreateProductRequest $request)
    {
        $validated = $request->validated();
        $products = $this->productCollection->create($data);

        return response()->json($products, 201);
    }
}
?>