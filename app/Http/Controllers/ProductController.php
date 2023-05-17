<?php 

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\ProductRepositoryInterface;
use Illuminate\Http\Request;

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

    public function create(Request $request)
    {
        $products = $this->productCollection->create($request);

        return response()->json($products, 201);
    }
}
?>