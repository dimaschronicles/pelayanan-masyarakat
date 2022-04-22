<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profil extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Profil',
        ];

        return view('user/profil', $data);
    }

    public function changePassword()
    {
        $data = [
            'title' => 'Ganti Password',
            'validation' => \Config\Services::validation(),
            'user' => $this->userModel->where('nama', session()->get('nama'))->first(),
        ];

        return view('user/change_password', $data);
    }

    public function savePass()
    {
        if (!$this->validate([
            'current_password' => [
                'rules' => 'trim|required|min_length[8]',
                'errors' => [
                    'required' => 'Password Saat Ini harus diisi!',
                    'min_length' => 'Password Saat Ini kurang dari 8 karakter!',
                ]
            ],
            'new_password' => [
                'rules' => 'trim|required|min_length[8]|matches[confirm_password]',
                'errors' => [
                    'required' => 'Password Baru harus diisi!',
                    'min_length' => 'Password Baru kurang dari 8 karakter!',
                    'matches' => 'Password Baru tidak sama dengan Konfirmasi Password!',
                ]
            ],
            'confirm_password' => [
                'rules' => 'trim|required|min_length[8]|matches[new_password]',
                'errors' => [
                    'required' => 'Konfirmasi Password Baru harus diisi!',
                    'min_length' => 'Konfirmasi Password Baru kurang dari 8 karakter!',
                    'matches' => 'Konfirmasi Password Baru tidak sama dengan Konfirmasi Password!',
                ]
            ]
        ])) {
            return redirect()->to('/changepassword')->withInput();
        }

        $user = $this->userModel->where('nama', session()->get('nama'))->first();

        $current_password = $this->request->getVar('current_password');
        $new_password = $this->request->getVar('new_password');

        if (!password_verify($current_password, $user['password'])) {
            session()->setFlashdata('message', '<div class="alert alert-danger">Password saat ini salah!</div>');
            return redirect()->to('/changepassword');
        } else {
            if ($current_password == $new_password) {
                session()->setFlashdata('message', '<div class="alert alert-danger">Password baru harus berbeda dengan password saat ini!</div>');
                return redirect()->to('/changepassword');
            } else {
                $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                $this->userModel->save([
                    'id_user' => $this->request->getVar('id_user'),
                    'password' => $password_hash,
                ]);

                session()->setFlashdata('message', '<div class="alert alert-success">Password berhasil diganti!</div>');

                return redirect()->to('/changepassword');
            }
        }
    }
}
