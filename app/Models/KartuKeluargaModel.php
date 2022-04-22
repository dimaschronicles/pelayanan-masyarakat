<?php

namespace App\Models;

use CodeIgniter\Model;

class KartuKeluargaModel extends Model
{
    protected $table = 'kk';
    protected $primaryKey = 'id_kk';
    protected $allowedFields = [
        'id_user', 'nama_lengkap', 'no_kk', 'nik',  'alamat', 'rt', 'rw', 'desa', 'kecamatan', 'kabupaten', 'provinsi', 'telepon', 'alasan', 'jumlah_keluarga',
        'anggota_1_nik', 'anggota_1_nama', 'anggota_2_nik', 'anggota_2_nama', 'anggota_3_nik', 'anggota_3_nama', 'anggota_4_nik', 'anggota_4_nama', 'anggota_5_nik', 'anggota_5_nama',
        'anggota_6_nik', 'anggota_6_nama', 'anggota_7_nik', 'anggota_7_nama', 'anggota_8_nik', 'anggota_8_nama', 'anggota_9_nik', 'anggota_9_nama', 'anggota_10_nik', 'anggota_10_nama',
        'tanggal', 'status'
    ];

    public function getSuratByIdUser($id = false)
    {
        if ($id == false) {
            return $this->db->table('kk')->select('*')->where(['id_user' => session()->get('id_user'), 'id_kk' => $id])->get()->getResultArray();
        }
        return $this->db->table('kk')->select('*')->where('id_kk', $id)->get()->getRowArray();
    }

    public function getSuratUser()
    {
        return $this->db->table('kk')->select('*')->where('id_user', session()->get('id_user'))->get()->getResultArray();
    }
}
