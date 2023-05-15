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

    public function register()
    {
        $data['pageTitle'] = 'Register';
        return view('dashboard/register',$data);
    }
}
