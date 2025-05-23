<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Detail extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Detail Produk',
        ];

        return view('pages/detail', $data);
    }

    public function productDetail($id)
    {
        $productModel = new ProductModel();
        $product = $productModel->getProductDetail($id);
        $tittle = $product['name'];

        $data = [
            'tittle' => $tittle,
            'productData' => $product,
        ];

        return view('pages/detail', $data);
    }
}
