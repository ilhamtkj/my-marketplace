<?php

namespace App\Controllers;

class Order extends BaseController
{
    public function orderList()
    {
        $data = [
            'title' => 'Order List'
        ];

        return view('pages/order_list', $data);
    }
}