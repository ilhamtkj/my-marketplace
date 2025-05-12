<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\ProducerModel;

class Profile extends BaseController
{

    // tidak dipakai
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

    public function profileProducer()
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

        return view('pages/profile_producer', $data);
    }

    public function profileDistributor()
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

        return view('pages/profile_distributor', $data);
    }

    public function profileEditProducer()
    {
        $data = [
            'title' => 'Edit profile'
        ];

        return view('pages/profile_edit_producer', $data);
    }

    public function profileEditDistributor()
    {
        $data = [
            'title' => 'Edit profile'
        ];

        return view('pages/profile_edit_distributor', $data);
    }
}
