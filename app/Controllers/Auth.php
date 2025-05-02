<?php

namespace App\Controllers;

use Config\Database;
use App\Models\DistributorModel;
use App\Models\ProducerModel;
use App\Models\UserModel;

class Auth extends BaseController
{
    protected $db;

    public function index()
    {
        $data = ['title' => 'Masuk/Login | My-Marketplace'];
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
                if ($user['role'] == 'producer') {
                    $producerModel = new ProducerModel();
                    $producer = $producerModel->getCompanyName($user['id']);
                    $session->set([
                        'name' => $producer['company_name'],
                        'role_id' => $producer['id'],
                    ]);
                } elseif ($user['role'] == 'distributor') {
                    $distributorModel = new DistributorModel();
                    $distributor = $distributorModel->getCompanyName($user['id']);
                    $session->set([
                        'name' => $distributor['company_name'],
                        'role_id' => $distributor['id'],
                    ]);
                }

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
            'title' => 'Daftar'
        ];

        return view('pages/register', $data);
    }

    public function registerProcess()
    {
        $this->db = Database::connect();

        if ($this->request->getMethod() == 'POST') {
            // ambil data dari form
            $email = $this->request->getPost('email');
            $password = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);
            $role = $this->request->getPost('role');
            $companyName = $this->request->getPost('company_name');

            // data untuk tabel users
            $dataUser = [
                'email' => $email,
                'password' => $password,
                'role' => $role
            ];
    
            $userModel = new UserModel();

            // Mulai transaksi
            $this->db->transStart();

            // masukkan data user dan ambil id terakhir
            $userId = $userModel->createUser($dataUser);

            // masukan data ke tabel producers/distributors, sesuai role
            if ($role == 'producer') {
                $producerModel = new ProducerModel();

                $dataProducer = [
                    'company_name' => $companyName,
                    'user_id' => $userId,
                ];

                $producerModel->createProducer($dataProducer);
            } elseif ($role == 'distributor') {
                $distributorModel = new DistributorModel();

                $dataDistributor = [
                    'company_name' => $companyName,
                    'user_id' => $userId,
                ];
                
                $distributorModel->createDistributor($dataDistributor);
            }

            // Menyelesaikan transaksi
            $this->db->transComplete();
            // Cek transaksi berhasil atau gagal
            if ($this->db->transStatus() == FALSE) {
                // Rollback transaksi jika ada yang gagal
                return redirect()->to('/register')->with('error', 'Registrasi gagal');
            }

            return redirect()->to('/login')->with('message', 'Registrasi berhasil');
        } else {
            echo "tidak memakai post";
        }
    }
}
