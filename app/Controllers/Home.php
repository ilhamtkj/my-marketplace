<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    public function index(): string
    {
        $productModel = new ProductModel();
        $product = $productModel->getAllProduct();

        $data = [
            'title' => 'My-Marketplace',
            'productData' => $product,
        ];

        return view('pages/home', $data);
    }
}
