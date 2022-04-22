<?php

namespace App\Controllers;

use App\Models\SktmModel;

class Sktm extends BaseController
{
    public function __construct()
    {
        $this->sktm = new SktmModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Surat Keterangan Tidak Mampu',
            'validation' => \Config\Services::validation()
        ];

        return view('sktm/sktm_add', $data);
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
                    'required' => 'No KTP / NIK harus diisi!',
                    'numeric' => 'No KTP / NIK harus angka!',
                    'min_length' => 'No KTP / NIK kurang dari 16 digit!',
                    'max_length' => 'No KTP / NIK lebih dari 16 digit!',
                ]
            ],
            'pekerjaan' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Pekerjaan harus diisi!',
                ]
            ],
            'alamat' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat harus diisi!',
                ]
            ],
            'keperluan' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Keperluan harus diisi!',
                ]
            ],
        ])) {
            return redirect()->to('/sktm')->withInput();
        }

        $this->sktm->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'warga_negara' => $this->request->getVar('warga_negara'),
            'agama' => $this->request->getVar('agama'),
            'nik_nokk' => $this->request->getVar('nik_nokk'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'alamat' => $this->request->getVar('alamat'),
            'keperluan' => $this->request->getVar('keperluan'),
            'id_user' => $this->request->getVar('id_user'),
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil membuat surat!</div>');

        return redirect()->to('/sktm/historisktm');
    }

    public function delete($id)
    {
        $this->sktm->delete($id);
        session()->setFlashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
        return redirect()->to('/sktm');
    }

    public function cancelSktm($id)
    {
        $builder = $this->db->table('sktm');
        $data = [
            'status' => 'dibatalkan',
        ];
        $builder->where('id_sktm', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil dibatalkan!</div>');

        return redirect()->to('/sktm/historisktm');
    }

    public function doneSktm($id)
    {
        $builder = $this->db->table('sktm');
        $data = [
            'status' => 'selesai',
        ];
        $builder->where('id_sktm', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil diselesaikan!</div>');

        return redirect()->to('/surat/sktm');
    }

    public function historiSktm()
    {
        $data = [
            'title' => 'Pembuatan SKTM',
            'sktm' => $this->sktm->getSuratUser(),
        ];

        return view('sktm/sktm_histori', $data);
    }

    public function detailSktm($id)
    {
        $data = [
            'title' => 'Detail Permohonan Pembuatan SKTM',
            'sktm' => $this->sktm->getSuratByIdUser($id),
        ];

        return view('sktm/sktm_detail', $data);
    }

    public function printSktm($id)
    {
        $data = [
            'title' => 'Ceta Surat Keterangan Tidak Mampu',
            'sktm' => $this->sktm->find($id)
        ];

        return view('sktm/sktm_print', $data);
    }
}
