<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{

    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('auth/form_login');
    }

    public function checkLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->userModel->getUser($username);

        $validate = $this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.'
                ]
            ]
        ]);
        if ($validate) {
            if ($user && password_verify("$password", $user['password'])) {
                session()->set('isLogin', true);
                session()->set('nama_lengkap', $user['nama_lengkap']);
                session()->set('username', $user['username']);
                session()->set('password', $user['password']);
                session()->set('role', $user['role']);
                return redirect()->to(base_url('/dashboard'));
            } else {
                session()->setFlashdata('error', 'Username atau password salah.');
                return redirect()->to(base_url('/'));
            }
        } else {
            session()->setFlashdata('errors', 'Username dan Password Tidak Boleh Kosong !!!');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        session()->remove('isLogin');
        session()->remove('nama_lengkap');
        session()->remove('username');
        session()->remove('password');
        session()->remove('role');

        session()->setFlashdata('logout', 'Anda Telah Logout !!!');
        return redirect()->to(base_url('/'));
    }
}
