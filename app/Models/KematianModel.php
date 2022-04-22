<?php

namespace App\Models;

use CodeIgniter\Model;

class KematianModel extends Model
{
    protected $table = 'kematian';
    protected $primaryKey = 'id_kematian';
    protected $allowedFields = [
        'id_user', 'nama_kepkel', 'no_kk',
        'nik_jenazah', 'nama_jenazah', 'jk_jenazah', 'umur_jenazah', 'tempat_lahir_jenazah', 'tanggal_lahir_jenazah', 'agama', 'alamat_jenazah', 'desa_jenazah', 'kecamatan_jenazah', 'kabupaten_jenazah', 'provinsi_jenazah', 'anak_ke', 'pukul', 'tanggal_kematian', 'sebab_kematian', 'tempat_kematian', 'yang_menyatakan',
        'nik_ibu', 'nama_ibu', 'tanggal_lahir_ibu', 'umur_ibu', 'pekerjaan_ibu', 'alamat_ibu', 'desa_ibu', 'kecamatan_ibu', 'kabupaten_ibu', 'provinsi_ibu',
        'nik_ayah', 'nama_ayah', 'tanggal_lahir_ayah', 'umur_ayah', 'pekerjaan_ayah', 'alamat_ayah', 'desa_ayah', 'kecamatan_ayah', 'kabupaten_ayah', 'provinsi_ayah',
        'nik_pelapor', 'nama_pelapor', 'tanggal_lahir_pelapor', 'umur_pelapor', 'pekerjaan_pelapor', 'alamat_pelapor', 'desa_pelapor', 'kecamatan_pelapor', 'kabupaten_pelapor', 'provinsi_pelapor',
        'nik_saksi_satu', 'nama_saksi_satu', 'tgl_lhr_saksi_satu', 'umur_saksi_satu', 'pekerjaan_saksi_satu', 'alamat_saksi_satu', 'desa_saksi_satu', 'kecamatan_saksi_satu', 'kabupaten_saksi_satu', 'provinsi_saksi_satu',
        'nik_saksi_dua', 'nama_saksi_dua', 'tgl_lhr_saksi_dua', 'umur_saksi_dua', 'pekerjaan_saksi_dua', 'alamat_saksi_dua', 'desa_saksi_dua', 'kecamatan_saksi_dua', 'kabupaten_saksi_dua', 'provinsi_saksi_dua',
        'tanggal', 'status'
    ];

    public function getSuratByIdUser($id = false)
    {
        if ($id == false) {
            return $this->db->table('kematian')->select('*')->where(['id_user' => session()->get('id_user'), 'id_kematian' => $id])->get()->getResultArray();
        }
        return $this->db->table('kematian')->select('*')->where('id_kematian', $id)->get()->getRowArray();
    }

    public function getSuratUser()
    {
        return $this->db->table('kematian')->select('*')->where('id_user', session()->get('id_user'))->get()->getResultArray();
    }
}
