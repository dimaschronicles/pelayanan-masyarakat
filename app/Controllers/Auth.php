<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        if (session('nik')) {
            return redirect()->to('dashboard');
        }

        $data = [
            'title' => 'Login',
            'validation' => \Config\Services::validation(),
        ];

        return view('auth/login', $data);
    }

    public function login()
    {
        if (!$this->validate([
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIK harus diisi!',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi!'
                ]
            ]
        ])) {
            return redirect()->to('auth')->withInput();
        }

        $userModel = new UserModel();
        $nik = $this->request->getVar('nik');
        $password = $this->request->getVar('password');
        $dataUser = $userModel->getLogin($nik);

        if (!empty($dataUser)) {
            if (password_verify($password, $dataUser['password'])) {
                session()->set([
                    'nik' => $dataUser['nik'],
                    'nama' => $dataUser['nama'],
                    'id_user' => $dataUser['id_user'],
                    'role' => $dataUser['role']
                ]);
                return redirect()->to('dashboard');
            } else {
                session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">Cek <strong>username</strong> atau <strong>password</strong> anda!</div>');
                return redirect()->to('auth')->withInput();
            }
        } else {
            session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">Cek <strong>username</strong> atau <strong>password</strong> anda!</div>');
            return redirect()->to('auth')->withInput();
        }
    }

    public function logout()
    {
        $array_items = ['nik', 'nama', 'role', 'id_user'];
        session()->remove($array_items);
        session()->setFlashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil keluar!</div>');
        return redirect()->to('auth')->withInput();
    }

    public function block()
    {
        return view('auth/block');
    }
}
