<?php

namespace App\Controllers;

class Cart extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Keranjang belanja',
        ];

        return view('pages/cart', $data);
    }
}
