<?php

namespace App\Controllers;

class UserController extends BaseController
{

    public function __construct()
    {
        // parent::__construct();

        // Load the session library
        $this->session = \Config\Services::session();

        // Check if the session has expired
        if (!$this->session->has('logged_in')) {
            return redirect()->to(base_url());
        }
    }
    // Rest of your controller methods...
    public function index()
    {
        $data['pageTitle'] = 'Dashboard';
        return view('dashboard/home', $data);

    }

    public function memorandum()
    {
        $data['pageTitle'] = 'Memorandum';
        return view('dashboard/memorandum', $data);
    }
    public function announcement()
    {
        $data['pageTitle'] = 'Announcement';
        return view('dashboard/announcement', $data);
    }

    public function registration()
    {
        $data['pageTitle'] = 'Registration';
        return view('dashboard/registration', $data);
    }
    public function lguadmin()
    {
        $data['pageTitle'] = 'LAGCBS';
        return view('dashboard/lguadmin', $data);
    }

    public function status()
    {
        $data['pageTitle'] = 'Status';
        return view('dashboard/status', $data);
    }

    public function lgmed()
    {
        $data['pageTitle'] = 'LGMED';
        return view('dashboard/lgmed', $data);
    }
    public function lgcdd()
    {
        $data['pageTitle'] = 'LGCDD';
        return view('dashboard/lgcdd', $data);
    }
    public function monitor()
    {
        $data['pageTitle'] = 'Monitor';
        return view('monitoring/january.html', $data);
    }
    public function leds()
    {
        $data['pageTitle'] = 'LEDS';
        return view('dashboard/leds', $data);
    }
    public function dreps()
    {
        $data['pageTitle'] = 'DREPS';
        return view('dashboard/dreps', $data);
    }
    public function lppdas()
    {
        $data['pageTitle'] = 'LPPDAS';
        return view('dashboard/lppdas', $data);
    }
    public function ars()
    {
        $data['pageTitle'] = 'ARS';
        return view('dashboard/ars', $data);
    }
    
    // public function __construct()
    // {
    //     // parent::__construct();

    //     // Load the session library
    //     $this->session = \Config\Services::session();

    //     // Check if the session has expired
    //     if (!$this->session->has('logged_in')) {
    //         return redirect()->to(base_url());
    //     }
    // }
    

}




