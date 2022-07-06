<?php

namespace App\Controllers;

use App\Models\KartuKeluargaModel;
use App\Models\KelahiranModel;
use App\Models\KematianModel;
use App\Models\KeteranganModel;
use App\Models\KtpModel;
use App\Models\NikahModel;
use App\Models\PindahModel;
use App\Models\SktmModel;
use App\Models\UserModel;
use App\Models\WarisModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->user = new UserModel();
        $this->ktp = new KtpModel();
        $this->kk = new KartuKeluargaModel();
        $this->keterangan = new KeteranganModel();
        $this->pindah = new PindahModel();
        $this->kelahiran = new KelahiranModel();
        $this->kematian = new KematianModel();
        $this->sktm = new SktmModel();
        $this->nikah = new NikahModel();
        $this->waris = new WarisModel();
    }

    public function index()
    {
        $ktp = $this->ktp->where('status', 'selesai')->countAllResults();
        $kk = $this->kk->where('status', 'selesai')->countAllResults();
        $keterangan = $this->keterangan->where('status', 'selesai')->countAllResults();
        $pindah = $this->pindah->where('status', 'selesai')->countAllResults();
        $kelahiran = $this->kelahiran->where('status', 'selesai')->countAllResults();
        $kematian = $this->kematian->where('status', 'selesai')->countAllResults();
        $sktm = $this->sktm->where('status', 'selesai')->countAllResults();
        $nikah = $this->nikah->where('status', 'selesai')->countAllResults();
        $waris = $this->waris->where('status', 'selesai')->countAllResults();
        $jumlahSelesai = intval($ktp + $kk + $keterangan + $pindah + $kelahiran + $kematian + $sktm + $nikah + $waris);

        $ktp = $this->ktp->where('status', 'dibatalkan')->countAllResults();
        $kk = $this->kk->where('status', 'dibatalkan')->countAllResults();
        $keterangan = $this->keterangan->where('status', 'dibatalkan')->countAllResults();
        $pindah = $this->pindah->where('status', 'dibatalkan')->countAllResults();
        $kelahiran = $this->kelahiran->where('status', 'dibatalkan')->countAllResults();
        $kematian = $this->kematian->where('status', 'dibatalkan')->countAllResults();
        $sktm = $this->sktm->where('status', 'dibatalkan')->countAllResults();
        $nikah = $this->nikah->where('status', 'dibatalkan')->countAllResults();
        $waris = $this->waris->where('status', 'dibatalkan')->countAllResults();
        $jumlahDibatalkan = intval($ktp + $kk + $keterangan + $pindah + $kelahiran + $kematian + $sktm + $nikah + $waris);

        $data = [
            'title' => 'Dashboard',
            'jumlahUser' => $this->user->where('role', 2)->countAllResults(),
            'jumlahSelesai' => $jumlahSelesai,
            'jumlahDibatalkan' => $jumlahDibatalkan,
            // user
            'ktp' => $this->ktp->where('id_user', session('id_user'))->findAll(),
            'kk' => $this->kk->where('id_user', session('id_user'))->findAll(),
            'keterangan' => $this->keterangan->where('id_user', session('id_user'))->findAll(),
            'pindah' => $this->pindah->where('id_user', session('id_user'))->findAll(),
            'kelahiran' => $this->kelahiran->where('id_user', session('id_user'))->findAll(),
            'kematian' => $this->kematian->where('id_user', session('id_user'))->findAll(),
            'sktm' => $this->sktm->where('id_user', session('id_user'))->findAll(),
            'nikah' => $this->nikah->where('id_user', session('id_user'))->findAll(),
            'waris' => $this->waris->where('id_user', session('id_user'))->findAll(),
        ];

        return view('admin/dashboard', $data);
    }
}
