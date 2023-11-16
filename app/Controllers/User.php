<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{

    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {

        $user = $this->userModel->findAll();

        $data = [
            'title' => 'User',
            'judul' => 'Data User',
            'user' => $user
        ];

        return view('user/index', $data);
    }

    public function tambahUser()
    {
        $data = [
            'title' => 'Footwears | User',
            'judul' => 'Form Tambah User'
        ];

        return view('user/tambah_user', $data);
    }

    public function addUser()
    {

        $file_foto = $this->request->getFile('foto_profil');

        if ($file_foto->getError() == 4) {
            $nama_foto = 'foto_default.png';
        } else {
            $nama_foto = $file_foto->getRandomName();
            $file_foto->move('img_profile', $nama_foto);
        }

        if ($this->validate([
            'nama_lengkap' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.'
                ]
            ],
            'foto_profil' => [
                'label' => 'Foto Profil',
                'rules' => 'is_image[foto_profil]|max_size[foto_profil,2048]|mime_in[foto_profil,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar !!!',
                    'is_image' => 'File yang diupload bukan gambar !!!',
                    'mime_in' => 'File yang diupload harus berformat (JPG/JPEG/PNG)'
                ]
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.',
                    'is_unique' => '{field} Sudah Terdaftar.'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.',
                    'min_length' => 'Password harus memuat minimal 8 karakter.'
                ]
            ],
            'role' => [
                'label' => 'Role',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.'
                ]
            ]
        ])) {

            $nama_lengkap = $this->request->getPost('nama_lengkap');
            $foto_profil = $nama_foto;
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $role = $this->request->getPost('role');

            $password = password_hash("$password", PASSWORD_BCRYPT);

            $data = [
                'nama_lengkap' => $nama_lengkap,
                'foto_profil' => $foto_profil,
                'username' => $username,
                'password' => $password,
                'role' => $role
            ];

            $this->userModel->insert($data);
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('/user'));
        } else {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }
}
