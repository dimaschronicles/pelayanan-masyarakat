<?php

namespace App\Models;

use CodeIgniter\Model;

class SktmModel extends Model
{
    protected $table = 'sktm';
    protected $primaryKey = 'id_sktm';
    protected $allowedFields = ['id_user', 'nama_lengkap', 'jenis_kelamin', 'tanggal_lahir', 'tempat_lahir', 'warga_negara', 'agama', 'nik', 'pekerjaan', 'alamat', 'keperluan', 'tanggal', 'status'];

    public function getSuratByIdUser($id = false)
    {
        if ($id == false) {
            return $this->db->table('sktm')->select('*')->where(['id_user' => session()->get('id_user'), 'id_sktm' => $id])->get()->getResultArray();
        }
        return $this->db->table('sktm')->select('*')->where('id_sktm', $id)->get()->getRowArray();
    }

    public function getSuratUser()
    {
        return $this->db->table('sktm')->select('*')->where('id_user', session()->get('id_user'))->get()->getResultArray();
    }
}
