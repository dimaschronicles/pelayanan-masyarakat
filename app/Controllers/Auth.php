<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->user = new UserModel();
    }

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
            if ($dataUser['active'] == 1) {
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
                session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">Akun anda belum aktif!</div>');
                return redirect()->to('auth')->withInput();
            }
        } else {
            session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">Cek <strong>username</strong> atau <strong>password</strong> anda!</div>');
            return redirect()->to('auth')->withInput();
        }
    }

    public function register()
    {
        $data = [
            'title' => 'Register',
            'validation' => \Config\Services::validation(),
        ];

        return view('auth/register', $data);
    }

    public function signUp()
    {
        if (!$this->validate([
            'nik' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]|is_unique[users.nik]',
                'errors' => [
                    'required' => 'NIK harus diisi!',
                    'numeric' => 'NIK harus angka!',
                    'min_length' => 'NIK kurang dari 16 digit!',
                    'max_length' => 'NIK lebih dari 16 digit!',
                    'is_unique' => 'NIK sudah terdaftar!',
                ]
            ],
            'nama' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama harus diisi!',
                ]
            ],
            'email' => [
                'rules' => 'trim|required|valid_email',
                'errors' => [
                    'required' => 'Email harus diisi!',
                    'valid_email' => 'Email tidak valid!',
                ]
            ],
            'no_hp' => [
                'rules' => 'trim|required|numeric|min_length[11]|max_length[13]',
                'errors' => [
                    'required' => 'NIK harus diisi!',
                    'numeric' => 'NIK harus angka!',
                    'min_length' => 'NIK kurang dari 11 digit!',
                    'max_length' => 'NIK lebih dari 13 digit!',
                ]
            ],
            'password' => [
                'rules' => 'trim|required|min_length[8]|matches[password_conf]',
                'errors' => [
                    'required' => 'Password harus diisi!',
                    'min_length' => 'Password kurang dari 8 karakter!',
                    'matches' => 'Password tidak sama dengan Konfirmasi Password!',
                ]
            ],
            'password_conf' => [
                'rules' => 'trim|required|min_length[8]|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi Password harus diisi!',
                    'min_length' => 'Konfirmasi Password kurang dari 8 karakter!',
                    'matches' => 'Konfirmasi Password tidak sama dengan Konfirmasi Password!',
                ]
            ]
        ])) {
            return redirect()->to('/register')->withInput();
        }

        $this->user->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => 2,
            'active' => 0,
        ]);

        session()->setFlashdata('message', '<div class="alert alert-success">Register berhasil. Silahkan tunggu 1x24 jam untuk aktivasi!</div>');
        return redirect()->to('/auth');
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
