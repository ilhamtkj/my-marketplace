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
        }

        return "Halaman tidak ditemukan";
    }
}