<?php

namespace App\Controllers;

class TesPage extends BaseController
{
    public function showTes($param)
    {
        if ($param == "home") {
            return view('pages/home');
        } elseif ($param == "detail") {
            return view('pages/detail');
        } elseif ($param == "login") {
            return view('pages/login');
        } elseif ($param == "register") {
            return view('pages/register');
        } elseif ($param == "cart") {
            return view('pages/cart');
        }

        return "Halaman <b>$param</b> tidak ditemukan";
    }
}