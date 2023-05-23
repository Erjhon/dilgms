<?php

namespace App\Controllers;

use App\Models\DilgModel;
use CodeIgniter\Controller;

class DilgController extends Controller
{
    public function index()
    {
        $dilgModel = new DilgModel();
        $data['dilg'] = $dilgModel->findAll();

        return view('layout/status', $data);
    }
}
