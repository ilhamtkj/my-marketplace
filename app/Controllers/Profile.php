<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\ProducerModel;

class Profile extends BaseController
{
    public function index()
    {
        $producerModel = new ProducerModel();
        $contactModel = new ContactModel();

        $producer = $producerModel->getProducerAddr(session('role_id'));
        $contact = $contactModel->getAllContact(session('role_id'));

        $data = [
            'title' => 'Profil | My-Marketplace',
            'producerData' => $producer,
            'contactData' => $contact,
        ];

        return view('pages/profile', $data);
    }
}
