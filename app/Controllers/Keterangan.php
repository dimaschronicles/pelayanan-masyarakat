<?php

namespace App\Controllers;

use App\Models\KeteranganModel;

class Keterangan extends BaseController
{
    public function __construct()
    {
        $this->keterangan = new KeteranganModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Surat Keterangan',
            'validation' => \Config\Services::validation()
        ];

        return view('keterangan/keterangan_add', $data);
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
            'nama' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama harus diisi!',
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
            'keterangan_lain' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Keterangan Lain harus diisi!',
                ]
            ],
        ])) {
            return redirect()->to('/keterangan')->withInput();
        }

        $this->keterangan->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'warga_negara' => $this->request->getVar('warga_negara'),
            'agama' => $this->request->getVar('agama'),
            'bukti_nik' => $this->request->getVar('nik'),
            'bukti_no_kk' => $this->request->getVar('no_kk'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'tempat_tinggal' => $this->request->getVar('tempat_tinggal'),
            'keperluan' => $this->request->getVar('keperluan'),
            'keterangan_lain' => $this->request->getVar('keterangan_lain'),
            'id_user' => $this->request->getVar('id_user'),
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil membuat surat!</div>');

        return redirect()->to('/keterangan/historiketerangan');
    }

    public function delete($id)
    {
        $this->keterangan->delete($id);
        session()->setFlashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
        return redirect()->to('/surat/keterangan');
    }

    public function cancelKeterangan($id)
    {
        $builder = $this->db->table('keterangan');
        $data = [
            'status' => 'dibatalkan',
        ];
        $builder->where('id_suket', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil dibatalkan!</div>');

        return redirect()->to('/keterangan/historiketerangan');
    }

    public function historiKeterangan()
    {
        $data = [
            'title' => 'Pembuatan Surat Keterangan',
            'keterangan' => $this->keterangan->getSuratUser(),
        ];

        return view('keterangan/keterangan_histori', $data);
    }

    public function detailKeterangan($id)
    {
        $data = [
            'title' => 'Detail Permohonan Surat Keterangan',
            'keterangan' => $this->keterangan->getSuratByIdUser($id),
        ];

        return view('keterangan/keterangan_detail', $data);
    }

    // admin
    public function doneKeterangan($id)
    {
        $builder = $this->db->table('keterangan');
        $data = [
            'status' => 'selesai',
        ];
        $builder->where('id_suket', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil diselesaikan!</div>');

        return redirect()->to('/surat/keterangan');
    }

    public function printKeterangan($id)
    {
        $data = [
            'title' => 'Cetak Surat Keterangan',
            'suket' => $this->keterangan->find($id)
        ];

        return view('keterangan/keterangan_print', $data);
    }
}
