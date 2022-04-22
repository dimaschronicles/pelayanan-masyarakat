<?php

namespace App\Controllers;

use App\Models\KematianModel;

class Kematian extends BaseController
{
    public function __construct()
    {
        $this->kematian = new KematianModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Surat Keterangan Kematian',
            'validation' => \Config\Services::validation()
        ];

        return view('kematian/kematian_add', $data);
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
            // jenazah
            'nik_jenazah' => [
                'rules' => 'trim|required|numeric|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'NIK harus diisi!',
                    'numeric' => 'NIK harus angka!',
                    'min_length' => 'NIK kurang dari 16 digit!',
                    'max_length' => 'NIK lebih dari 16 digit!',
                ]
            ],
            'nama_jenazah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Nama Jenazah harus diisi!',
                ]
            ],
            'jk_jenazah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Jenis Kelamin jenazah harus diisi!',
                ]
            ],
            'umur_jenazah' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Umur Jenazah harus diisi!',
                    'numeric' => 'Umur Jenazah harus angka!',
                ]
            ],
            'tempat_lahir_jenazah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tempat Lahir harus diisi!',
                ]
            ],
            'tanggal_lahir_jenazah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal Lahir harus diisi!',
                ]
            ],
            'agama' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Agama harus diisi!',
                ]
            ],
            'pekerjaan_jenazah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Pekerjaan harus diisi!',
                ]
            ],
            'alamat_jenazah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat harus diisi!',
                ]
            ],
            'desa_jenazah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Desa harus diisi!',
                ]
            ],
            'kecamatan_jenazah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kecamatan harus diisi!',
                ]
            ],
            'kabupaten_jenazah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kabupaten harus diisi!',
                ]
            ],
            'provinsi_jenazah' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Provinsi harus diisi!',
                ]
            ],
            'anak_ke' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Anak Ke harus diisi!',
                    'numeric' => 'Anak Ke harus diisi!',
                ]
            ],
            'tanggal_kematian' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal Kematian harus diisi!',
                ]
            ],
            'pukul' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Pukul harus diisi!',
                ]
            ],
            'sebab_kematian' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Sebab Kematian harus diisi!',
                ]
            ],
            'tempat_kematian' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tempat Kematian harus diisi!',
                ]
            ],
            'yang_menyatakan' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Yang Menyatakan harus diisi!',
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
            'tanggal_lahir_pelapor' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal Lahir Pelapor harus diisi!',
                ]
            ],
            'umur_pelapor' => [
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Umur Pelapor harus diisi!',
                    'numeric' => 'Umur Pelapor harus angka!',
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
            'tgl_lhr_saksi_satu' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal Lahir Saksi 1 harus diisi!',
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
            'tgl_lhr_saksi_dua' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal Lahir Saksi 2 harus diisi!',
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
            return redirect()->to('/kematian')->withInput();
        }

        $this->kematian->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'nama_kepkel' => $this->request->getVar('nama_kepkel'),
            'no_kk' => $this->request->getVar('no_kk'),
            // anak
            'nik_jenazah' => $this->request->getVar('nik_jenazah'),
            'nama_jenazah' => $this->request->getVar('nama_jenazah'),
            'jk_jenazah' => $this->request->getVar('jk_jenazah'),
            'umur_jenazah' => $this->request->getVar('umur_jenazah'),
            'tempat_lahir_jenazah' => $this->request->getVar('tempat_lahir_jenazah'),
            'tanggal_lahir_jenazah' => $this->request->getVar('tanggal_lahir_jenazah'),
            'agama' => $this->request->getVar('agama'),
            'pekerjaan_jenazah' => $this->request->getVar('pekerjaan_jenazah'),
            'alamat_jenazah' => $this->request->getVar('alamat_jenazah'),
            'desa_jenazah' => $this->request->getVar('desa_jenazah'),
            'kecamatan_jenazah' => $this->request->getVar('kecamatan_jenazah'),
            'kabupaten_jenazah' => $this->request->getVar('kabupaten_jenazah'),
            'provinsi_jenazah' => $this->request->getVar('provinsi_jenazah'),
            'anak_ke' => $this->request->getVar('anak_ke'),
            'tanggal_kematian' => $this->request->getVar('tanggal_kematian'),
            'pukul' => $this->request->getVar('pukul'),
            'sebab_kematian' => $this->request->getVar('sebab_kematian'),
            'tempat_kematian' => $this->request->getVar('tempat_kematian'),
            'yang_menyatakan' => $this->request->getVar('yang_menyatakan'),
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
            // pelapor
            'nik_pelapor' => $this->request->getVar('nik_pelapor'),
            'nama_pelapor' => $this->request->getVar('nama_pelapor'),
            'tanggal_lahir_pelapor' => $this->request->getVar('tanggal_lahir_pelapor'),
            'umur_pelapor' => $this->request->getVar('umur_pelapor'),
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
            'tgl_lhr_saksi_satu' => $this->request->getVar('tgl_lhr_saksi_satu'),
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
            'tgl_lhr_saksi_dua' => $this->request->getVar('tgl_lhr_saksi_dua'),
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

        return redirect()->to('/kematian/historikematian');
    }

    public function delete($id)
    {
        $this->kematian->delete($id);
        session()->setFlashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
        return redirect()->to('/surat/kematian');
    }

    public function cancelKematian($id)
    {
        $builder = $this->db->table('kematian');
        $data = [
            'status' => 'dibatalkan',
        ];
        $builder->where('id_kematian', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil dibatalkan!</div>');

        return redirect()->to('/kematian/historikematian');
    }

    public function detailKematian($id)
    {
        $data = [
            'title' => 'Detail Permohonan Surat Keterangan Kematian',
            'kematian' => $this->kematian->getSuratByIdUser($id),
        ];

        return view('kematian/kematian_detail', $data);
    }

    public function historiKematian()
    {
        $data = [
            'title' => 'Pembuatan Surat Keterangan Kematian',
            'kematian' => $this->kematian->getSuratUser(),
        ];

        return view('kematian/kematian_histori', $data);
    }

    public function doneKematian($id)
    {
        $builder = $this->db->table('kematian');
        $data = [
            'status' => 'selesai',
        ];
        $builder->where('id_kematian', $id);
        $builder->update($data);

        session()->setFlashdata('message', '<div class="alert alert-success">Berhasil diselesaikan!</div>');

        return redirect()->to('/surat/kematian');
    }

    public function printKematian()
    {
    }
}
