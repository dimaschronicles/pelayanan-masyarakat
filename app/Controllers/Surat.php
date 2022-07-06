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
use App\Models\WarisModel;

class Surat extends BaseController
{
    public function __construct()
    {
        $this->ktp = new KtpModel();
        $this->kk = new KartuKeluargaModel();
        $this->sktm = new SktmModel();
        $this->nikah = new NikahModel();
        $this->pindah = new PindahModel();
        $this->kelahiran = new KelahiranModel();
        $this->kematian = new KematianModel();
        $this->keterangan = new KeteranganModel();
        $this->waris = new WarisModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Buat Surat'
        ];

        return view('user/buat_surat', $data);
    }

    public function status()
    {
        $data = [
            'title' => 'Status Surat'
        ];

        return view('user/status_surat', $data);
    }

    public function riwayat()
    {
        $data = [
            'title' => 'Riwayat Surat'
        ];

        return view('user/status_surat', $data);
    }

    public function surat_ktp()
    {
        if (session()->get('role') == 2) {
            return redirect()->to('dashboard');
        }

        $data = [
            'title' => 'Pembuatan KTP',
            'ktp' => $this->ktp->findAll(),
        ];

        return view('admin/ktp', $data);
    }

    public function kk()
    {
        if (session()->get('role') == 2) {
            return redirect()->to('dashboard');
        }

        $data = [
            'title' => 'Pembuatan Kartu Keluarga',
            'kk' => $this->kk->findAll(),
        ];

        return view('admin/kk', $data);
    }

    public function sktm()
    {
        if (session()->get('role') == 2) {
            return redirect()->to('dashboard');
        }

        $data = [
            'title' => 'Pembuatan SKTM',
            'sktm' => $this->sktm->findAll(),
        ];

        return view('admin/sktm', $data);
    }

    public function nikah()
    {
        if (session()->get('role') == 2) {
            return redirect()->to('dashboard');
        }

        $data = [
            'title' => 'Pembuatan Pengantar Numpang Nikah',
            'nikah' => $this->nikah->findAll(),
        ];

        return view('admin/nikah', $data);
    }

    public function pindah()
    {
        if (session()->get('role') == 2) {
            return redirect()->to('dashboard');
        }

        $data = [
            'title' => 'Pembuatan Pengantar Pindah',
            'pindah' => $this->pindah->findAll(),
        ];

        return view('admin/pindah', $data);
    }

    public function kelahiran()
    {
        if (session()->get('role') == 2) {
            return redirect()->to('dashboard');
        }

        $data = [
            'title' => 'Pembuatan Keterangan Kelahiran',
            'kelahiran' => $this->kelahiran->findAll(),
        ];

        return view('admin/kelahiran', $data);
    }

    public function kematian()
    {
        if (session()->get('role') == 2) {
            return redirect()->to('dashboard');
        }

        $data = [
            'title' => 'Pembuatan Keterangan Kematian',
            'kematian' => $this->kematian->findAll(),
        ];

        return view('admin/kematian', $data);
    }

    public function keterangan()
    {
        if (session()->get('role') == 2) {
            return redirect()->to('dashboard');
        }

        $data = [
            'title' => 'Pembuatan Surat Keterangan',
            'keterangan' => $this->keterangan->findAll(),
        ];

        return view('admin/keterangan', $data);
    }

    public function waris()
    {
        if (session()->get('role') == 2) {
            return redirect()->to('dashboard');
        }

        $data = [
            'title' => 'Pembuatan Surat Keterangan Ahli Waris',
            'waris' => $this->waris->findAll(),
        ];

        return view('admin/waris', $data);
    }
}
