<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProducerModel;

class Profile extends BaseController
{
    public function index()
    {
        $model = new ProducerModel();
        $producer = $model->getProducerByUserId(session()->get('id'));

        $data = [
            'tittle' => 'Profil | My-Marketplace',
            'producerData' => $producer,
        ];
        return view('pages/profile', $data);
    }
}
