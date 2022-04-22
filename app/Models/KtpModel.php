<?php

namespace App\Models;

use CodeIgniter\Model;

class KtpModel extends Model
{
    protected $table = 'ktp';
    protected $primaryKey = 'id_ktp';
    protected $allowedFields = ['id_user', 'jenis', 'nama_lengkap', 'nomor_kk', 'nik',  'alamat', 'rt', 'rw', 'dusun', 'tanggal', 'status'];

    public function getSuratByIdUser($id = false)
    {
        if ($id == false) {
            return $this->db->table('ktp')->select('*')->where(['id_user' => session()->get('id_user'), 'id_ktp' => $id])->get()->getResultArray();
        }
        return $this->db->table('ktp')->select('*')->where('id_ktp', $id)->get()->getRowArray();
    }

    public function getSuratUser()
    {
        return $this->db->table('ktp')->select('*')->where('id_user', session()->get('id_user'))->get()->getResultArray();
    }
}
