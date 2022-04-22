<?php

namespace App\Models;

use CodeIgniter\Model;

class PindahModel extends Model
{
    protected $table = 'pindah';
    protected $primaryKey = 'id_pindah';
    protected $allowedFields = ['id_user', 'nik', 'nama_lengkap', 'no_kk', 'nama_kepkel', 'alamat_sekarang', 'alamat_tujuan', 'jumlah_keluarga', 'tanggal', 'status'];

    public function getSuratByIdUser($id = false)
    {
        if ($id == false) {
            return $this->db->table('pindah')->select('*')->where(['id_user' => session()->get('id_user'), 'id_pindah' => $id])->get()->getResultArray();
        }
        return $this->db->table('pindah')->select('*')->where('id_pindah', $id)->get()->getRowArray();
    }

    public function getSuratUser()
    {
        return $this->db->table('pindah')->select('*')->where('id_user', session()->get('id_user'))->get()->getResultArray();
    }
}
