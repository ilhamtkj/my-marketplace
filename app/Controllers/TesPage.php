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
        } elseif ($param == "profile") {
            $data = [
                "title" => "Profile",
                "name" => "fajar ilham"
            ];
            return view('pages/profile', $data);
        } elseif ($param == "profile-edit") {
            return view('pages/profile_edit');
        }

        return "Halaman <b>$param</b> tidak ditemukan";
    }
}