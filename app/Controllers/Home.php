<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (session('nik')) {
            return redirect()->to('dashboard');
        }

        $data = [
            'title' => 'Home | Pelayanan Masyarakat',
        ];

        return view('user/home', $data);
    }
}
