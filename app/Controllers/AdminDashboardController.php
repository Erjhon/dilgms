<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Check if the user is logged in as an admin
        if (!session('isLoggedIn') || session('role') !== 'admin') {
            return redirect()->to('/signin');
        }

        // Render the admin dashboard view
        echo view('layout/dashboard');
    }

    public function userHomeRedirect()
    {
        // Check if the user is logged in as an admin
        if (!session('isLoggedIn') || session('role') !== 'admin') {
            return redirect()->to('/signin');
        }

        // Redirect admin to the admin dashboard instead of user/home
        return redirect()->to('admin/dashboard');
    }

    public function userHome()
    {
        // Check if the user is logged in as an admin
        if (session('isLoggedIn') && session('role') === 'admin') {
            return redirect()->to('admin/dashboard');
        }

        // Render the user home view
        echo view('admin/dashboard');
    }
}
