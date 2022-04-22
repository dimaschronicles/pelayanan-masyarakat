<?php

namespace App\Controllers;

use App\Models\KartuKeluargaModel;

class KartuKeluarga extends BaseController
{
    public function __construct()
    {
        $this->kk = new KartuKeluargaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Surat Pembuatan Kartu Keluarga',
            'validation' => \Config\Services::validation()
        ];

        return view('kk/kk_add', $data);
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
            'nomor_kk' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'No KK harus diisi!',
                    'numeric' => 'No KK harus angka!',
                    'min_length' => 'No KK kurang dari 16 digit!',
                    'max_length' => 'No KK lebih dari 16 digit!',
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
                    'numeric' => 'RT harus angka!',
                ]
            ],
            'rw' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'RW harus diisi!',
                    'numeric' => 'RW harus angka!',
                ]
            ],
            'desa' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'RW harus diisi!',
                ]
            ],
            'kecamatan' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kecamatan harus diisi!',
                ]
            ],
            'kabupaten' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kabupaten harus diisi!',
                ]
            ],
            'provinsi' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Provinsi harus diisi!',
                ]
            ],
            'alasan' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alasan harus diisi!',
                ]
            ],
            'jumlah_keluarga' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Jumlah Keluarga harus diisi!',
                    'numeric' => 'Jumlah Keluarga harus angka!',
                ]
            ],
            'anggota_1_nik' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'NIK Anggota 1 harus diisi!',
                    'numeric' => 'NIK Anggota 1 harus angka!',
                ]
            ],
            'anggota_1_nama' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama Anggota 1 harus diisi!',
                ]
            ],
        ])) {
            return redirect()->to('/kk')->withInput();
        }

        $this->kk->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'no_kk' => $this->request->getVar('nomor_kk'),
            'nik' => $this->request->getVar('nik'),
            'alamat' => $this->request->getVar('alamat'),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw'),
            'desa' => $this->request->getVar('desa'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'provinsi' => $this->request->getVar('provinsi'),
            'alasan' => $this->request->getVar('alasan'),
            'jumlah_keluarga' => $this->request->getVar('jumlah_keluarga'),
            'anggota_1_nik' => $this->request->getVar('anggota_1_nik'),
            'anggota_1_nama' => $this->request->getVar('anggota_1_nama'),
            'id_user' => $this->request->getVar('id_user'),
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil membuat surat!</div>');

        return redirect()->to('/kk/historikk');
    }

    public function delete($id)
    {
        $this->kk->delete($id);
        session()->setFlashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
        return redirect()->to('/surat/kk');
    }

    public function cancelKk($id)
    {
        $builder = $this->db->table('kk');
        $data = [
            'status' => 'dibatalkan',
        ];
        $builder->where('id_kk', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil dibatalkan!</div>');

        return redirect()->to('/kk/historikk');
    }

    public function detailKk($id)
    {
        $data = [
            'title' => 'Detail Permohonan Kartu Keluarga',
            'kk' => $this->kk->getSuratByIdUser($id),
        ];

        return view('kk/kk_detail', $data);
    }

    public function historiKk()
    {
        $data = [
            'title' => 'Permohonan Pembuatan Kartu Keluarga',
            'kk' => $this->kk->getSuratUser(),
        ];

        return view('kk/kk_histori', $data);
    }

    public function doneKk($id)
    {
        $builder = $this->db->table('kk');
        $data = [
            'status' => 'selesai',
        ];
        $builder->where('id_kk', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil diselesaikan!</div>');

        return redirect()->to('/surat/kk');
    }

    public function printKk($id)
    {
        $data = [
            'title' => 'Cetak Surat Permohonan Kartu Keluarga',
            'kk' => $this->kk->find($id)
        ];

        return view('kk/kk_print', $data);
    }
}
