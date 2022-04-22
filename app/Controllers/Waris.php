<?php

namespace App\Controllers;

use App\Models\WarisModel;

class Waris extends BaseController
{
    public function __construct()
    {
        $this->waris = new WarisModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Surat Keterangan Ahli Waris',
            'validation' => \Config\Services::validation()
        ];

        return view('waris/waris_add', $data);
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
            'nama_alm' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama harus diisi!',
                ]
            ],
            'tempat_lahir_alm' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tempat Lahir harus diisi!',
                ]
            ],
            'tanggal_lahir_alm' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal Lahir harus diisi!',
                ]
            ],
            'pekerjaan_alm' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Pekerjaan harus diisi!',
                ]
            ],
            'alamat_alm' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat harus diisi!',
                ]
            ],
            'nama_ahli' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama harus diisi!',
                ]
            ],
            'tempat_lahir_ahli' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tempat Lahir harus diisi!',
                ]
            ],
            'tanggal_lahir_ahli' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal Lahir harus diisi!',
                ]
            ],
            'pekerjaan_ahli' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Pekerjaan harus diisi!',
                ]
            ],
            'alamat_ahli' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat harus diisi!',
                ]
            ],
            // 'keterangan_lain' => [
            //     'rules' => 'trim|required',
            //     'errors' => [
            //         'required' => 'Keterangan Lain harus diisi!',
            //     ]
            // ],
        ])) {
            return redirect()->to('/waris')->withInput();
        }

        $this->waris->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'nama_alm' => $this->request->getVar('nama_alm'),
            'tempat_lahir_alm' => $this->request->getVar('tempat_lahir_alm'),
            'tanggal_lahir_alm' => $this->request->getVar('tanggal_lahir_alm'),
            'pekerjaan_alm' => $this->request->getVar('pekerjaan_alm'),
            'alamat_alm' => $this->request->getVar('alamat_alm'),
            'nama_alm' => $this->request->getVar('nama_alm'),
            'tempat_lahir_ahli' => $this->request->getVar('tempat_lahir_ahli'),
            'tanggal_lahir_ahli' => $this->request->getVar('tanggal_lahir_ahli'),
            'pekerjaan_ahli' => $this->request->getVar('pekerjaan_ahli'),
            'alamat_ahli' => $this->request->getVar('alamat_ahli'),
            // 'keterangan_lain' => $this->request->getVar('keterangan_lain'),
            'id_user' => $this->request->getVar('id_user'),
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil membuat surat!</div>');

        return redirect()->to('/waris/historiwaris');
    }

    public function delete($id)
    {
        $this->waris->delete($id);
        session()->setFlashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
        return redirect()->to('/surat/waris');
    }

    public function cancelWaris($id)
    {
        $builder = $this->db->table('waris');
        $data = [
            'status' => 'dibatalkan',
        ];
        $builder->where('id_waris', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil dibatalkan!</div>');

        return redirect()->to('/waris/historiwaris');
    }

    public function historiWaris()
    {
        $data = [
            'title' => 'Pembuatan Surat Keterangan Ahli Waris',
            'waris' => $this->waris->getSuratUser(),
        ];

        return view('waris/waris_histori', $data);
    }

    public function detailWaris($id)
    {
        $data = [
            'title' => 'Detail Permohonan Surat Keterangan Ahli Waris',
            'waris' => $this->waris->getSuratByIdUser($id),
        ];

        return view('waris/waris_detail', $data);
    }

    // admin
    public function doneWaris($id)
    {
        $builder = $this->db->table('waris');
        $data = [
            'status' => 'selesai',
        ];
        $builder->where('id_waris', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil diselesaikan!</div>');

        return redirect()->to('/surat/waris');
    }

    public function printWaris($id)
    {
        $data = [
            'title' => 'Cetak Surat Keterangan Ahli Waris',
            'waris' => $this->waris->find($id)
        ];

        return view('waris/waris_print', $data);
    }
}
