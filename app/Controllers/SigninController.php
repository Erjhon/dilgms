<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class SigninController extends Controller
{

    

    public function myMethod()
    {
        if (!logged_in()) {
            return redirect()->to(base_url());
        }
        
        // Your logic for logged-in user
    }
    
    public function index()
    {
        helper(['form']);
        echo view('signin');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        $session->setFlashdata('msg', 'Youre Logged out');
        return redirect()->to('/signin');
    }

    public function loginAuth()
{
    $session = session();
    $userModel = new UserModel();
    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');

    $data = $userModel->where('email', $email)->first();

    if ($data) {
        $pass = $data['password'];
        $authenticatePassword = password_verify($password, $pass);
        if ($authenticatePassword) {
            $ses_data = [
                'id' => $data['id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'isLoggedIn' => true,
                'role' => $data['role'] // Assuming you have a 'role' column in the user table
            ];
            $session->set($ses_data);

            // Redirect to the appropriate dashboard based on the user's role
            if ($data['role'] === 'admin') {
                return redirect()->to('admin/dashboard');
            } else {
                // Check if the user is an admin trying to access the user dashboard
                if ($data['role'] === 'user') {
                    return redirect()->to('user/home');
                } else {
                    // Log out the user if they have an unrecognized role
                    $session->destroy();
                    $session->setFlashdata('msg', 'Invalid role. Please contact the administrator.');
                    return redirect()->to('/signin');
                }
            }
        } else {
            $session->setFlashdata('msg', 'Password is incorrect.');
            return redirect()->to('/signin');
        }
    } else {
        $session->setFlashdata('msg', 'Email does not exist.');
        return redirect()->to('/signin');
    }
}

    


    
}