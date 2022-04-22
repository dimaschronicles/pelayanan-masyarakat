<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nik', 'nama', 'email', 'no_hp', 'password', 'role'];

    public function getLogin($nik)
    {
        return $this->db->table($this->table)->getWhere(['nik' => $nik])->getRowArray();
    }

    public function getUser()
    {
        return $this->db->table($this->table)->getWhere(['role' => 2])->getResultArray();
    }
}
