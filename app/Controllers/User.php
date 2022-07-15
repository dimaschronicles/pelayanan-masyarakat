<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data User',
            'user' => $this->user->getUser(),
        ];

        return view('user/index', $data);
    }

    public function addUser()
    {
        $data = [
            'title' => 'Tambah Data User',
            'validation' => \Config\Services::validation(),
        ];

        return view('user/user_add', $data);
    }

    public function create()
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
            return redirect()->to('/user_add')->withInput();
        }

        $this->user->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getVar('role'),
        ]);

        session()->setFlashdata('message', '<div class="alert alert-success">Data user berhasil ditambahkan!</div>');

        return redirect()->to('/user');
    }

    public function delete($id)
    {
        $this->user->delete($id);
        session()->setFlashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
        return redirect()->to('/user');
    }

    public function detailUser($id)
    {
        $data = [
            'title' => 'Detail Data User',
            'user' => $this->user->find($id),
        ];

        return view('user/user_detail', $data);
    }

    public function editUser($id = null)
    {
        $data = [
            'title' => 'Ubah Data User',
            'validation' => \Config\Services::validation(),
            'user' => $this->user->find($id),
        ];

        return view('user/user_edit', $data);
    }

    public function update($id = null)
    {
        if (!$this->validate([
            'nik' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'NIK harus diisi!',
                    'numeric' => 'NIK harus angka!',
                    'min_length' => 'NIK kurang dari 16 digit!',
                    'max_length' => 'NIK lebih dari 16 digit!',
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
            // 'password' => [
            //     'rules' => 'trim|min_length[8]|matches[password_conf]',
            //     'errors' => [
            //         'min_length' => 'Password kurang dari 8 karakter!',
            //         'matches' => 'Password tidak sama dengan Konfirmasi Password!',
            //     ]
            // ],
            // 'password_conf' => [
            //     'rules' => 'trim|min_length[8]|matches[password]',
            //     'errors' => [
            //         'min_length' => 'Konfirmasi Password kurang dari 8 karakter!',
            //         'matches' => 'Konfirmasi Password tidak sama dengan Konfirmasi Password!',
            //     ]
            // ]
        ])) {
            return redirect()->to('/user_edit' . '/' . $this->request->getVar('id_user'))->withInput();
        }

        $this->user->save([
            'id_user' => $id,
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getVar('role'),
        ]);

        session()->setFlashdata('message', '<div class="alert alert-success">Data user berhasil diubah!</div>');

        return redirect()->to('/user');
    }

    public function aktivasi($id)
    {
        $data = [
            'active' => 1,
        ];
        $this->db->table('users')->where('id_user', $id)->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">User berhasil diaktivasi!</div>');
        return redirect()->to('/user');
    }
}
