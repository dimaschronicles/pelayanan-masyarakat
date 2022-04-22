<?php

namespace App\Controllers;

use App\Models\PindahModel;
use App\Controllers\BaseController;
use TCPDF;

class PengantarPindah extends BaseController
{
    public function __construct()
    {
        $this->pindah = new PindahModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Surat Pengantar Pindah',
            'validation' => \Config\Services::validation()
        ];

        return view('pindah/pindah_add', $data);
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
            'nik' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'Nomor NIK harus diisi!',
                    'numeric' => 'Nomor NIK harus angka!',
                    'min_length' => 'Nomor NIK kurang dari 16 digit!',
                    'max_length' => 'Nomor NIK lebih dari 16 digit!',
                ]
            ],
            'nama_lengkap' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama Lengkap harus diisi!',
                ]
            ],
            'nomor_kk' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'Nomor KK harus diisi!',
                    'numeric' => 'Nomor KK harus angka!',
                    'min_length' => 'Nomor KK kurang dari 16 digit!',
                    'max_length' => 'Nomor KK lebih dari 16 digit!',
                ]
            ],
            'nama_kepkel' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama Kepala Keluarga harus diisi!',
                ]
            ],
            'alamat_sekarang' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat Sekarang harus diisi!',
                ]
            ],
            'alamat_tujuan' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat Tujuan harus diisi!',
                ]
            ],
            'jumlah_keluarga' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Jumlah Keluarga harus diisi!',
                    'numeric' => 'Jumlah Keluarga harus angka!',
                ]
            ],
        ])) {
            return redirect()->to('/pengantarpindah')->withInput();
        }

        $this->pindah->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'nik' => $this->request->getVar('nik'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'no_kk' => $this->request->getVar('nomor_kk'),
            'nama_kepkel' => $this->request->getVar('nama_kepkel'),
            'alamat_sekarang' => $this->request->getVar('alamat_sekarang'),
            'alamat_tujuan' => $this->request->getVar('alamat_tujuan'),
            'jumlah_keluarga' => $this->request->getVar('jumlah_keluarga'),
            'id_user' => $this->request->getVar('id_user'),
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil membuat surat!</div>');

        return redirect()->to('/pengantarpindah/historipindah');
    }

    public function delete($id)
    {
        $this->pindah->delete($id);
        session()->setFlashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
        return redirect()->to('/surat/pindah');
    }

    public function cancelPindah($id)
    {
        $builder = $this->db->table('pindah');
        $data = [
            'status' => 'dibatalkan',
        ];
        $builder->where('id_pindah', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil dibatalkan!</div>');

        return redirect()->to('/pengantarpindah/historipindah');
    }

    public function historiPindah()
    {
        $data = [
            'title' => 'Pembuatan Pengantar Pindah',
            'pindah' => $this->pindah->getSuratUser(),
        ];

        return view('pindah/pindah_histori', $data);
    }

    public function detailPindah($id)
    {
        $data = [
            'title' => 'Detail Permohonan Pengantar Pindah',
            'pindah' => $this->pindah->getSuratByIdUser($id),
        ];

        return view('pindah/pindah_detail', $data);
    }

    // admin
    public function donePindah($id)
    {
        $builder = $this->db->table('pindah');
        $data = [
            'status' => 'selesai',
        ];
        $builder->where('id_pindah', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil diselesaikan!</div>');

        return redirect()->to('/surat/pindah');
    }

    public function printPindah($id)
    {
        $data = [
            'title' => 'Cetak Surat Pengantar Pindah',
            'pindah' => $this->pindah->find($id),
        ];

        return view('pindah/pindah_print', $data);
    }
}
