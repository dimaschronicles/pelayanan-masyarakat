<?php

namespace App\Models;

use CodeIgniter\Model;

class KeteranganModel extends Model
{
    protected $table = 'keterangan';
    protected $primaryKey = 'id_suket';
    protected $allowedFields = ['id_user', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'warga_negara', 'agama', 'pekerjaan', 'tempat_tinggal', 'bukti_nik', 'bukti_no_kk', 'keperluan', 'keterangan_lain', 'tanggal', 'status'];

    public function getSuratByIdUser($id = false)
    {
        if ($id == false) {
            return $this->db->table('keterangan')->select('*')->where(['id_user' => session()->get('id_user'), 'id_suket' => $id])->get()->getResultArray();
        }
        return $this->db->table('keterangan')->select('*')->where('id_suket', $id)->get()->getRowArray();
    }

    public function getSuratUser()
    {
        return $this->db->table('keterangan')->select('*')->where('id_user', session()->get('id_user'))->get()->getResultArray();
    }
}
