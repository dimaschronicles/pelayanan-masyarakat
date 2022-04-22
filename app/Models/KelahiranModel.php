<?php

namespace App\Models;

use CodeIgniter\Model;

class KelahiranModel extends Model
{
    protected $table = 'kelahiran';
    protected $primaryKey = 'id_kelahiran';
    protected $allowedFields = [
        'id_user', 'nama_kepkel', 'no_kk',
        'nama_anak', 'jk_anak', 'tempat_dilahirkan_anak', 'tempat_lahir_anak', 'tanggal_lahir_anak', 'pukul', 'jenis_kelahiran', 'kelahiran_ke', 'penolong_kelahiran', 'berat_anak', 'panjang_anak',
        'nik_ibu', 'nama_ibu', 'tanggal_lahir_ibu', 'umur_ibu', 'pekerjaan_ibu', 'alamat_ibu', 'desa_ibu', 'kecamatan_ibu', 'kabupaten_ibu', 'provinsi_ibu', 'kebangsaan_ibu', 'warga_negara_ibu', 'tgl_pencatatan_perkawinan',
        'nik_ayah', 'nama_ayah', 'tanggal_lahir_ayah', 'umur_ayah', 'pekerjaan_ayah', 'alamat_ayah', 'desa_ayah', 'kecamatan_ayah', 'kabupaten_ayah', 'provinsi_ayah', 'warga_negara_ayah', 'kebangsaan_ayah',
        'nik_pelapor', 'nama_pelapor', 'umur_pelapor', 'jk_pelapor', 'pekerjaan_pelapor', 'alamat_pelapor', 'desa_pelapor', 'kecamatan_pelapor', 'kabupaten_pelapor', 'provinsi_pelapor',
        'nik_saksi_satu', 'nama_saksi_satu', 'umur_saksi_satu', 'pekerjaan_saksi_satu', 'alamat_saksi_satu', 'desa_saksi_satu', 'kecamatan_saksi_satu', 'kabupaten_saksi_satu', 'provinsi_saksi_satu',
        'nik_saksi_dua', 'nama_saksi_dua', 'umur_saksi_dua', 'pekerjaan_saksi_dua', 'alamat_saksi_dua', 'desa_saksi_dua', 'kecamatan_saksi_dua', 'kabupaten_saksi_dua', 'provinsi_saksi_dua',
        'tanggal', 'status'
    ];

    public function getSuratByIdUser($id = false)
    {
        if ($id == false) {
            return $this->db->table('kelahiran')->select('*')->where(['id_user' => session()->get('id_user'), 'id_kelahiran' => $id])->get()->getResultArray();
        }
        return $this->db->table('kelahiran')->select('*')->where('id_kelahiran', $id)->get()->getRowArray();
    }

    public function getSuratUser()
    {
        return $this->db->table('kelahiran')->select('*')->where('id_user', session()->get('id_user'))->get()->getResultArray();
    }
}
