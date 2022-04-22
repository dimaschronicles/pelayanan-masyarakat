<?php

namespace App\Controllers;

use App\Models\NikahModel;
use TCPDF;

class PengantarNikah extends BaseController
{
    public function __construct()
    {
        $this->nikah = new NikahModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Surat Pengantar Nikah',
            'validation' => \Config\Services::validation()
        ];

        return view('nikah/nikah_add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'tanggal' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal harus diisi!',
                ]
            ],
            'nama_lengkap' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama Lengkap harus diisi!',
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Jenis Kelamin harus diisi!',
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tempat Lahir harus diisi!',
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal Lahir harus diisi!',
                ]
            ],
            'warga_negara' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Warga Negara harus diisi!',
                ]
            ],
            'agama' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Agama harus diisi!',
                ]
            ],
            'nik' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'Nomor NIK harus diisi!',
                    'numeric' => 'Nomor NIK harus angka!',
                    'min_length' => 'Nomor NIK kurang dari 16 digit!',
                    'max_length' => 'Nomor NIK lebih dari 16 digit!',
                ]
            ],
            'no_kk' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'Nomor KK harus diisi!',
                    'numeric' => 'Nomor KK harus angka!',
                    'min_length' => 'Nomor KK kurang dari 16 digit!',
                    'max_length' => 'Nomor KK lebih dari 16 digit!',
                ]
            ],
            'pekerjaan' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Pekerjaan harus diisi!',
                ]
            ],
            'tempat_tinggal' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tempat Tinggal harus diisi!',
                ]
            ],
            'keperluan' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Keperluan harus diisi!',
                ]
            ],
            'keterangan' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Keterangan Lain harus diisi!',
                ]
            ],
        ])) {
            return redirect()->to('/pengantarnikah')->withInput();
        }

        $this->nikah->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'nama' => $this->request->getVar('nama_lengkap'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'warga_negara' => $this->request->getVar('warga_negara'),
            'agama' => $this->request->getVar('agama'),
            'nik' => $this->request->getVar('nik'),
            'no_kk' => $this->request->getVar('no_kk'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'tempat_tinggal' => $this->request->getVar('tempat_tinggal'),
            'keperluan' => $this->request->getVar('keperluan'),
            'keterangan' => $this->request->getVar('keterangan'),
            'berlaku' => $this->request->getVar('berlaku'),
            'id_user' => $this->request->getVar('id_user'),
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil membuat surat!</div>');

        return redirect()->to('/pengantarnikah/historinikah');
    }

    public function delete($id)
    {
        $this->nikah->delete($id);
        session()->setFlashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
        return redirect()->to('/surat/nikah');
    }

    public function cancelNikah($id)
    {
        $builder = $this->db->table('nikah');
        $data = [
            'status' => 'dibatalkan',
        ];
        $builder->where('id_nikah', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil dibatalkan!</div>');

        return redirect()->to('/pengantarnikah/historinikah');
    }

    public function historiNikah()
    {
        $data = [
            'title' => 'Pembuatan Pengantar Numpang Nikah',
            'nikah' => $this->nikah->getSuratUser(),
        ];

        return view('nikah/nikah_histori', $data);
    }

    public function detailNikah($id)
    {
        $data = [
            'title' => 'Detail Permohonan Pengantar Numpang Nikah',
            'nikah' => $this->nikah->getSuratByIdUser($id),
        ];

        return view('nikah/nikah_detail', $data);
    }

    // admin
    public function donenikah($id)
    {
        $builder = $this->db->table('nikah');
        $data = [
            'status' => 'selesai',
        ];
        $builder->where('id_nikah', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil diselesaikan!</div>');

        return redirect()->to('/surat/nikah');
    }

    public function printNikah($id)
    {
        $data = [
            'title' => 'Cetak Surat Pengantar Numpang Nikah',
            'nikah' => $this->nikah->find($id),
        ];

        return view('nikah/nikah_print', $data);
    }
}
