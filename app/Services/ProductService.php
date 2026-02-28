<?php

namespace App\Services;

class ProductService
{
    protected $products = [
        ['id' => 1, 'name' => 'Laptop', 'category' => 'Electronics'],
        ['id' => 2, 'name' => 'Chair', 'category' => 'Furniture'],
        ['id' => 3, 'name' => 'Book', 'category' => 'Education'],
    ];

    public function __construct(array $products = [])
    {
        if (! empty($products)) {
            $this->products = $products;
        }
    }

    public function listProducts()
    {
        return $this->products;
    }

    public function insert($product)
    {
        $this->products[] = $product;
        return $product;
    }
}

