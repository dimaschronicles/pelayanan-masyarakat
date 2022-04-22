<?php

namespace App\Models;

use CodeIgniter\Model;

class NikahModel extends Model
{
    protected $table = 'nikah';
    protected $primaryKey = 'id_nikah';
    protected $allowedFields = ['id_user', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'warga_negara', 'agama', 'pekerjaan', 'tempat_tinggal', 'nik', 'no_kk', 'keperluan', 'berlaku', 'keterangan', 'tanggal', 'status'];

    public function getSuratByIdUser($id = false)
    {
        if ($id == false) {
            return $this->db->table('nikah')->select('*')->where(['id_user' => session()->get('id_user'), 'id_nikah' => $id])->get()->getResultArray();
        }
        return $this->db->table('nikah')->select('*')->where('id_nikah', $id)->get()->getRowArray();
    }

    public function getSuratUser()
    {
        return $this->db->table('nikah')->select('*')->where('id_user', session()->get('id_user'))->get()->getResultArray();
    }
}
