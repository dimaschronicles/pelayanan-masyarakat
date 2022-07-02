<?php

namespace App\Controllers;

use App\Models\KeteranganModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->user = new UserModel();
        $this->ktp = new KeteranganModel();
        $this->keterangan = new KeteranganModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'jumlahUser' => $this->user->where('role', 2)->countAllResults(),
            'jumlahKtp' => $this->ktp->countAllResults(),
            'jumlahSuket' => $this->keterangan->countAllResults()
        ];

        return view('admin/dashboard', $data);
    }
}
