<?php

namespace App\Controllers;

class Detail extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Detail Produk',
        ];

        return view('pages/detail', $data);
    }
}
