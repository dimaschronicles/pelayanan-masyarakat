<?php

namespace App\Models;

use CodeIgniter\Model;

class WarisModel extends Model
{
    protected $table = 'waris';
    protected $primaryKey = 'id_waris';
    protected $allowedFields = ['id_user', 'nama_alm', 'tempat_lahir_alm', 'tanggal_lahir_alm', 'pekerjaan_alm', 'alamat_alm', 'nama_ahli', 'tempat_lahir_ahli', 'tanggal_lahir_ahli', 'pekerjaan_ahli', 'alamat_ahli', 'keterangan_lain', 'tanggal', 'status'];

    public function getSuratByIdUser($id = false)
    {
        if ($id == false) {
            return $this->db->table('waris')->select('*')->where(['id_user' => session()->get('id_user'), 'id_waris' => $id])->get()->getResultArray();
        }
        return $this->db->table('waris')->select('*')->where('id_waris', $id)->get()->getRowArray();
    }

    public function getSuratUser()
    {
        return $this->db->table('waris')->select('*')->where('id_user', session()->get('id_user'))->get()->getResultArray();
    }
}
