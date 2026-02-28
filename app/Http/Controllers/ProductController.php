<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TaskService;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService; 
    }

    public function index(ProductService $productService)
    {
        $newProduct = [
            'id' => 4,
            'name' => 'Orange',
            'category' => "Fruits"
        ];

        $productService->insert($newProduct);

        $this->taskService->add('Add to cart');
        $this->taskService->add('Checkout');

        $data = [
            'products' => $productService->listProducts(),
            'tasks' => $this->taskService->getAllTasks() 
        ];

        return view('products.index', $data);
    }

    public function show($id, ProductService $productService)
    {
        $products = $productService->listProducts();

        foreach ($products as $product) {
            if (is_array($product) && isset($product['id']) && $product['id'] == $id) {
                return response()->json($product);
            }

            if (is_object($product) && isset($product->id) && $product->id == $id) {
                return response()->json($product);
            }
        }

        abort(404);
    }
}