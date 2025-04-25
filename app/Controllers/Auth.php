<?php

namespace App\Controllers;

use App\Models\ProducerModel;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        $data = ['tittle' => 'Masuk/Login | My-Marketplace'];
        return view('pages/login', $data);
    }

    public function loginProcess()
    {
        $session = session();
        $userModel = new UserModel();

        // ambil dari post
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // ambil dari db
        $user = $userModel->getUserByEmail($email);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // simpan data ke session
                $session->set([
                    'id'        => $user['id'],
                    'email'     => $user['email'],
                    'role'      => $user['role'],
                    'logged_in' => true
                ]);
                // tambahkan nama
                $producerModel = new ProducerModel();
                $producer = $producerModel->getCompanyName($user['id']);
                $session->set([
                    'name' => $producer['company_name'],
                    'role_id' => $producer['id'],
                ]);

                return redirect()->to('/');
            } else {
                return redirect()->back()->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()->with('error', 'User tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    // belum selesai
    public function register()
    {
        $data = [
            'tittle' => 'Daftar'
        ];

        return view('pages/register', $data);
    }
}
