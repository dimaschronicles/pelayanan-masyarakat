<?php

namespace App\Controllers;

use App\Models\KelahiranModel;

class Kelahiran extends BaseController
{
    public function __construct()
    {
        $this->kelahiran = new KelahiranModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Surat Keterangan Kelahiran',
            'validation' => \Config\Services::validation()
        ];

        return view('kelahiran/kelahiran_add', $data);
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
            'no_kk' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'No KK harus diisi!',
                    'numeric' => 'No KK harus angka!',
                    'min_length' => 'No KK kurang dari 16 digit!',
                    'max_length' => 'No KK lebih dari 16 digit!',
                ]
            ],
            'nama_kepkel' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama Kepala Keluarga harus diisi!',
                ]
            ],
            // anak
            'nama_anak' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama Anak harus diisi!',
                ]
            ],
            'jk_anak' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Jenis Kelamin Anak harus diisi!',
                ]
            ],
            'tempat_dilahirkan_anak' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tempat Dilahirkan Anak harus diisi!',
                ]
            ],
            'tempat_lahir_anak' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tempat Lahir Anak harus diisi!',
                ]
            ],
            'tanggal_lahir_anak' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal Lahir Anak harus diisi!',
                ]
            ],
            'pukul' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Pukul harus diisi!',
                ]
            ],
            'jenis_kelahiran' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Jenis Kelahiran harus diisi!',
                ]
            ],
            'kelahiran_ke' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Kelahiran Ke harus diisi!',
                    'numeric' => 'Kelahiran Ke harus angka!',
                ]
            ],
            'penolong_kelahiran' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Penolong Kelahiran harus diisi!',
                ]
            ],
            'berat_anak' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Berat Anak harus diisi!',
                    'numeric' => 'Berat Anak harus angka!',
                ]
            ],
            'panjang_anak' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Panjang Anak harus diisi!',
                    'numeric' => 'Panjang Anak harus angka!',
                ]
            ],
            // ibu
            'nik_ibu' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'NIK Ibu harus diisi!',
                    'numeric' => 'NIK Ibu harus angka!',
                    'min_length' => 'NIK Ibu kurang dari 16 digit!',
                    'max_length' => 'NIK Ibu lebih dari 16 digit!',
                ]
            ],
            'nama_ibu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama Ibu harus diisi!',
                ]
            ],
            'tanggal_lahir_ibu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal Lahir Ibu harus diisi!',
                ]
            ],
            'umur_ibu' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Umur Ibu harus diisi!',
                    'numeric' => 'Umur Ibu harus angka!',
                ]
            ],
            'pekerjaan_ibu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Pekerjaan Ibu harus diisi!',
                ]
            ],
            'alamat_ibu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat Ibu harus diisi!',
                ]
            ],
            'desa_ibu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Desa Ibu harus diisi!',
                ]
            ],
            'kecamatan_ibu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kecamatan Ibu harus diisi!',
                ]
            ],
            'kecamatan_ibu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kecamatan Ibu harus diisi!',
                ]
            ],
            'kabupaten_ibu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kabupaten Ibu harus diisi!',
                ]
            ],
            'provinsi_ibu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Provinsi Ibu harus diisi!',
                ]
            ],
            'warga_negara_ibu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Warga Negara Ibu harus diisi!',
                ]
            ],
            'kebangsaan_ibu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kebangsaan Ibu harus diisi!',
                ]
            ],
            'tgl_pencatatan_perkawinan' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal diisi!',
                ]
            ],
            // ayah
            'nik_ayah' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'NIK Ayah harus diisi!',
                    'numeric' => 'NIK Ayah harus angka!',
                    'min_length' => 'NIK Ayah kurang dari 16 digit!',
                    'max_length' => 'NIK Ayah lebih dari 16 digit!',
                ]
            ],
            'nama_ayah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama Ayah harus diisi!',
                ]
            ],
            'tanggal_lahir_ayah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal Lahir Ayah harus diisi!',
                ]
            ],
            'umur_ayah' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Umur Ayah harus diisi!',
                    'numeric' => 'Umur Ayah harus angka!',
                ]
            ],
            'pekerjaan_ayah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Pekerjaan Ayah harus diisi!',
                ]
            ],
            'alamat_ayah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat Ayah harus diisi!',
                ]
            ],
            'desa_ayah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Desa Ayah harus diisi!',
                ]
            ],
            'kecamatan_ayah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kecamatan Ayah harus diisi!',
                ]
            ],
            'kecamatan_ayah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kecamatan Ayah harus diisi!',
                ]
            ],
            'kabupaten_ayah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kabupaten Ayah harus diisi!',
                ]
            ],
            'provinsi_ayah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Provinsi Ayah harus diisi!',
                ]
            ],
            'warga_negara_ayah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Warga Negara Ayah harus diisi!',
                ]
            ],
            'kebangsaan_ayah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kebangsaan Ayah harus diisi!',
                ]
            ],
            // pelapor
            'nik_pelapor' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'NIK Pelapor harus diisi!',
                    'numeric' => 'NIK Pelapor harus angka!',
                    'min_length' => 'NIK Pelapor kurang dari 16 digit!',
                    'max_length' => 'NIK Pelapor lebih dari 16 digit!',
                ]
            ],
            'nama_pelapor' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama Pelapor harus diisi!',
                ]
            ],
            'umur_pelapor' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Umur Pelapor harus diisi!',
                    'numeric' => 'Umur Pelapor harus angka!',
                ]
            ],
            'jk_pelapor' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Jenis Kelamin harus diisi!',
                ]
            ],
            'pekerjaan_pelapor' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Pekerjaan Pelapor harus diisi!',
                ]
            ],
            'alamat_pelapor' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat Pelapor harus diisi!',
                ]
            ],
            'desa_pelapor' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Desa Pelapor harus diisi!',
                ]
            ],
            'kecamatan_pelapor' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kecamatan Pelapor harus diisi!',
                ]
            ],
            'kecamatan_pelapor' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kecamatan Pelapor harus diisi!',
                ]
            ],
            'kabupaten_pelapor' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kabupaten Pelapor harus diisi!',
                ]
            ],
            'provinsi_pelapor' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Provinsi Pelapor harus diisi!',
                ]
            ],
            // saksi satu
            'nik_saksi_satu' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'NIK Saksi 1 harus diisi!',
                    'numeric' => 'NIK Saksi 1 harus angka!',
                    'min_length' => 'NIK Saksi 1 kurang dari 16 digit!',
                    'max_length' => 'NIK Saksi 1 lebih dari 16 digit!',
                ]
            ],
            'nama_saksi_satu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama Saksi 1 harus diisi!',
                ]
            ],
            'umur_saksi_satu' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Umur Saksi 1 harus diisi!',
                    'numeric' => 'Umur Saksi 1 harus angka!',
                ]
            ],
            'pekerjaan_saksi_satu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Pekerjaan Saksi 1 harus diisi!',
                ]
            ],
            'alamat_saksi_satu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat Saksi 1 harus diisi!',
                ]
            ],
            'desa_saksi_satu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Desa Saksi 1 harus diisi!',
                ]
            ],
            'kecamatan_saksi_satu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kecamatan Saksi 1 harus diisi!',
                ]
            ],
            'kecamatan_saksi_satu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kecamatan Saksi 1 harus diisi!',
                ]
            ],
            'kabupaten_saksi_satu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kabupaten Saksi 1 harus diisi!',
                ]
            ],
            'provinsi_saksi_satu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Provinsi Saksi 1 harus diisi!',
                ]
            ],
            // saksi dua
            'nik_saksi_dua' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'NIK Saksi 2 harus diisi!',
                    'numeric' => 'NIK Saksi 2 harus angka!',
                    'min_length' => 'NIK Saksi 2 kurang dari 16 digit!',
                    'max_length' => 'NIK Saksi 2 lebih dari 16 digit!',
                ]
            ],
            'nama_saksi_dua' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama Saksi 2 harus diisi!',
                ]
            ],
            'umur_saksi_dua' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Umur Saksi 2 harus diisi!',
                    'numeric' => 'Umur Saksi 2 harus angka!',
                ]
            ],
            'pekerjaan_saksi_dua' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Pekerjaan Saksi 2 harus diisi!',
                ]
            ],
            'alamat_saksi_dua' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat Saksi 2 harus diisi!',
                ]
            ],
            'desa_saksi_dua' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Desa Saksi 2 harus diisi!',
                ]
            ],
            'kecamatan_saksi_dua' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kecamatan Saksi 2 harus diisi!',
                ]
            ],
            'kecamatan_saksi_dua' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kecamatan Saksi 2 harus diisi!',
                ]
            ],
            'kabupaten_saksi_dua' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kabupaten Saksi 2 harus diisi!',
                ]
            ],
            'provinsi_saksi_dua' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Provinsi Saksi 2 harus diisi!',
                ]
            ],
        ])) {
            return redirect()->to('/kelahiran')->withInput();
        }

        $this->kelahiran->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'nama_kepkel' => $this->request->getVar('nama_kepkel'),
            'no_kk' => $this->request->getVar('no_kk'),
            // anak
            'nama_anak' => $this->request->getVar('nama_anak'),
            'jk_anak' => $this->request->getVar('jk_anak'),
            'tempat_dilahirkan_anak' => $this->request->getVar('tempat_dilahirkan_anak'),
            'tempat_lahir_anak' => $this->request->getVar('tempat_lahir_anak'),
            'tanggal_lahir_anak' => $this->request->getVar('tanggal_lahir_anak'),
            'pukul' => $this->request->getVar('pukul'),
            'jenis_kelahiran' => $this->request->getVar('jenis_kelahiran'),
            'kelahiran_ke' => $this->request->getVar('kelahiran_ke'),
            'penolong_kelahiran' => $this->request->getVar('penolong_kelahiran'),
            'berat_anak' => $this->request->getVar('berat_anak'),
            'panjang_anak' => $this->request->getVar('panjang_anak'),
            // ibu
            'nik_ibu' => $this->request->getVar('nik_ibu'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'tanggal_lahir_ibu' => $this->request->getVar('tanggal_lahir_ibu'),
            'umur_ibu' => $this->request->getVar('umur_ibu'),
            'pekerjaan_ibu' => $this->request->getVar('pekerjaan_ibu'),
            'alamat_ibu' => $this->request->getVar('alamat_ibu'),
            'desa_ibu' => $this->request->getVar('desa_ibu'),
            'kecamatan_ibu' => $this->request->getVar('kecamatan_ibu'),
            'kabupaten_ibu' => $this->request->getVar('kabupaten_ibu'),
            'provinsi_ibu' => $this->request->getVar('provinsi_ibu'),
            'warga_negara_ibu' => $this->request->getVar('warga_negara_ibu'),
            'kebangsaan_ibu' => $this->request->getVar('kebangsaan_ibu'),
            'tgl_pencatatan_perkawinan' => $this->request->getVar('tgl_pencatatan_perkawinan'),
            // ayah
            'nik_ayah' => $this->request->getVar('nik_ayah'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'tanggal_lahir_ayah' => $this->request->getVar('tanggal_lahir_ayah'),
            'umur_ayah' => $this->request->getVar('umur_ayah'),
            'pekerjaan_ayah' => $this->request->getVar('pekerjaan_ayah'),
            'alamat_ayah' => $this->request->getVar('alamat_ayah'),
            'desa_ayah' => $this->request->getVar('desa_ayah'),
            'kecamatan_ayah' => $this->request->getVar('kecamatan_ayah'),
            'kabupaten_ayah' => $this->request->getVar('kabupaten_ayah'),
            'provinsi_ayah' => $this->request->getVar('provinsi_ayah'),
            'warga_negara_ayah' => $this->request->getVar('warga_negara_ayah'),
            'kebangsaan_ayah' => $this->request->getVar('kebangsaan_ayah'),
            // pelapor
            'nik_pelapor' => $this->request->getVar('nik_pelapor'),
            'nama_pelapor' => $this->request->getVar('nama_pelapor'),
            'umur_pelapor' => $this->request->getVar('umur_pelapor'),
            'jk_pelapor' => $this->request->getVar('jk_pelapor'),
            'pekerjaan_pelapor' => $this->request->getVar('pekerjaan_pelapor'),
            'alamat_pelapor' => $this->request->getVar('alamat_pelapor'),
            'desa_pelapor' => $this->request->getVar('desa_pelapor'),
            'kecamatan_pelapor' => $this->request->getVar('kecamatan_pelapor'),
            'kabupaten_pelapor' => $this->request->getVar('kabupaten_pelapor'),
            'provinsi_pelapor' => $this->request->getVar('provinsi_pelapor'),
            // saksi 1
            'nik_saksi_satu' => $this->request->getVar('nik_saksi_satu'),
            'nama_saksi_satu' => $this->request->getVar('nama_saksi_satu'),
            'umur_saksi_satu' => $this->request->getVar('umur_saksi_satu'),
            'pekerjaan_saksi_satu' => $this->request->getVar('pekerjaan_saksi_satu'),
            'alamat_saksi_satu' => $this->request->getVar('alamat_saksi_satu'),
            'desa_saksi_satu' => $this->request->getVar('desa_saksi_satu'),
            'kecamatan_saksi_satu' => $this->request->getVar('kecamatan_saksi_satu'),
            'kabupaten_saksi_satu' => $this->request->getVar('kabupaten_saksi_satu'),
            'provinsi_saksi_satu' => $this->request->getVar('provinsi_saksi_satu'),
            // saksi 2
            'nik_saksi_dua' => $this->request->getVar('nik_saksi_dua'),
            'nama_saksi_dua' => $this->request->getVar('nama_saksi_dua'),
            'umur_saksi_dua' => $this->request->getVar('umur_saksi_dua'),
            'pekerjaan_saksi_dua' => $this->request->getVar('pekerjaan_saksi_dua'),
            'alamat_saksi_dua' => $this->request->getVar('alamat_saksi_dua'),
            'desa_saksi_dua' => $this->request->getVar('desa_saksi_dua'),
            'kecamatan_saksi_dua' => $this->request->getVar('kecamatan_saksi_dua'),
            'kabupaten_saksi_dua' => $this->request->getVar('kabupaten_saksi_dua'),
            'provinsi_saksi_dua' => $this->request->getVar('provinsi_saksi_dua'),
            'id_user' => $this->request->getVar('id_user'),
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil membuat surat!</div>');

        return redirect()->to('/kelahiran/historikelahiran');
    }

    public function delete($id)
    {
        $this->kelahiran->delete($id);
        session()->setFlashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
        return redirect()->to('/surat/kelahiran');
    }

    public function cancelKelahiran($id)
    {
        $builder = $this->db->table('kelahiran');
        $data = [
            'status' => 'dibatalkan',
        ];
        $builder->where('id_kelahiran', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil dibatalkan!</div>');

        return redirect()->to('/kelahiran/historikelahiran');
    }

    public function detailKelahiran($id)
    {
        $data = [
            'title' => 'Detail Permohonan Surat Keterangan Kelahiran',
            'kelahiran' => $this->kelahiran->getSuratByIdUser($id),
        ];

        return view('kelahiran/kelahiran_detail', $data);
    }

    public function historiKelahiran()
    {
        $data = [
            'title' => 'Pembuatan Surat Keterangan Kelahiran',
            'kelahiran' => $this->kelahiran->getSuratUser(),
        ];

        return view('kelahiran/kelahiran_histori', $data);
    }

    public function doneKelahiran($id)
    {
        $builder = $this->db->table('kelahiran');
        $data = [
            'status' => 'selesai',
        ];
        $builder->where('id_kelahiran', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil diselesaikan!</div>');

        return redirect()->to('/surat/kelahiran');
    }

    public function printKelahiran($id)
    {
        $data = [
            'title' => 'Cetak Surat Keterangan Kelahiran',
            'kelahiran' => $this->kelahiran->find($id)
        ];

        return view('kelahiran/kelahiran_print', $data);
    }
}
