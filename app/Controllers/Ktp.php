<?php

namespace App\Controllers;

use App\Models\KtpModel;

class Ktp extends BaseController
{
    public function __construct()
    {
        $this->ktp = new KtpModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Surat Permohonan Pembuatan KTP',
            'validation' => \Config\Services::validation()
        ];

        return view('ktp/ktp_add', $data);
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
            'jenis' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Permohonan KTP harus diisi!',
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
            'nik' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'NIK harus diisi!',
                    'numeric' => 'NIK harus angka!',
                    'min_length' => 'NIK kurang dari 16 digit!',
                    'max_length' => 'NIK lebih dari 16 digit!',
                ]
            ],
            'alamat' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat harus diisi!',
                ]
            ],
            'rt' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'RT harus diisi!',
                    'numeric' => 'RT harus berupa angka!',
                ]
            ],
            'rw' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'RW harus diisi!',
                    'numeric' => 'RW harus berupa angka!',
                ]
            ],
            'dusun' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Dusun harus diisi!',
                ]
            ],
        ])) {
            return redirect()->to('/ktp')->withInput();
        }

        $this->ktp->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'jenis' => $this->request->getVar('jenis'),
            'nomor_kk' => $this->request->getVar('nomor_kk'),
            'nik' => $this->request->getVar('nik'),
            'alamat' => $this->request->getVar('alamat'),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw'),
            'dusun' => $this->request->getVar('dusun'),
            'tanggal' => $this->request->getVar('tanggal'),
            'id_user' => $this->request->getVar('id_user'),
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil membuat surat!</div>');

        return redirect()->to('/ktp/histori_ktp');
    }


    public function delete($id)
    {
        $this->ktp->delete($id);
        session()->setFlashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
        return redirect()->to('/surat_ktp');
    }

    public function cancel_ktp($id)
    {
        $builder = $this->db->table('ktp');
        $data = [
            'status' => 'dibatalkan',
        ];
        $builder->where('id_ktp', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil dibatalkan!</div>');

        return redirect()->to('/ktp/histori_ktp');
    }

    public function detail_ktp($id)
    {
        $data = [
            'title' => 'Detail Permohonan Pembuatan KTP',
            'ktp' => $this->ktp->getSuratByIdUser($id),
        ];

        return view('ktp/ktp_detail', $data);
    }

    // admin
    public function done_ktp($id)
    {
        $builder = $this->db->table('ktp');
        $data = [
            'status' => 'selesai',
        ];
        $builder->where('id_ktp', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil diselesaikan!</div>');

        return redirect()->to('/surat_ktp');
    }

    public function print_ktp($id)
    {
        $data = [
            'title' => 'Cetak Permohonan KTP',
            'ktp' => $this->ktp->find($id),
        ];

        return view('ktp/ktp_print', $data);
    }

    public function histori_ktp()
    {
        $data = [
            'title' => 'Pembuatan KTP',
            'ktp' => $this->ktp->getSuratUser(),
        ];

        return view('ktp/ktp_histori', $data);
    }
}
