<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Dashboard';
        return view('dashboard/home', $data);

    }

    public function navigation()
    {
        $data['pageTitle'] = 'Navigation';
        return view('dashboard/navigation', $data);
    }

    public function registration()
    {
        $data['pageTitle'] = 'Registration';
        return view('dashboard/registration', $data);
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

}
