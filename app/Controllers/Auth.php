<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends BaseController
{
    // Show Registration Form
    public function register()
{
    helper('form'); // ✅ Load the form helper
    return view('auth/register');
}

    // Handle Registration POST
    public function registerPost()
    {
        $rules = [
            'username' => 'required|min_length[3]',
            'email'    => 'required|valid_email|is_unique[user.email]',
            'password' => 'required|min_length[6]',
        ];

        
        if (!$this->validate($rules)) {
    helper('form');
    return view('auth/register', [
        'validation' => $this->validator,
    ]);
}

        $userModel = new UserModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $userModel->save($data);

        return redirect()->to('/login')->with('success', 'Registration successful. Please login.');
    }

    // Show Login Form
    public function login()
{
    helper('form'); // ✅ Load the form helper
    return view('auth/login');
}


    // Handle Login POST
    public function loginPost()
    {
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required',
        ];

        if (!$this->validate($rules)) {
            return view('auth/login', [
                'validation' => $this->validator,
            ]);
        }

        $session = session();
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'isLoggedIn' => true,
            ]);
            return redirect()->to('/plant');
        } else {
            return redirect()->to('/login')->with('error', 'Invalid email or password.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function dashboard()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/plant');
        }
        return view('auth/dashboard');
    }
}
