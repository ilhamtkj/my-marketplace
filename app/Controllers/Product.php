<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Detail Produk',
        ];

        return view('pages/detail', $data);
    }

    public function productDetail($id)
    {
        $productModel = new ProductModel();
        $product = $productModel->getProductDetail($id);
        $tittle = $product['name'];

        $data = [
            'title' => $tittle,
            'productData' => $product,
        ];

        return view('pages/detail', $data);
    }
}
