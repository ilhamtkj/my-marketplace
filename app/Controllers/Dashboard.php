<?php 

namespace App\Controllers;

use App\Models\ProductModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | My-Marketplace'
        ];

        return view('pages/dashboard/index', $data);
    }

    public function manageProduct()
    {
        $productModel = new ProductModel();
        $product = $productModel->getProductAdmin(session('role_id'));
        
        $data = [
            'title' => 'Dashboard - Kelola produk | My-Marketplace',
            'productData' => $product
        ];

        return view('pages/dashboard/manageProduct', $data);
    }
}

?>