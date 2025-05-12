<?php

namespace App\Controllers;

class Cart extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Keranjang belanja',
        ];

        return view('pages/cart', $data);
    }
}
