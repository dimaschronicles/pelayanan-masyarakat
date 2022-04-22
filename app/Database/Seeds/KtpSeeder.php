<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KtpSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_user' => '2',
                'jenis' => 'Baru',
                'nama_lengkap' => 'Anggie Febriansyah',
                'nomor_kk' => '3525011711086061',
                'nik' => '3525013006770017',
                'alamat' => 'Jatinegara',
                'rt' => '02',
                'rw' => '04',
                'dusun' => 'Jatinegara',
                'tanggal' => date('Y-m-d'),
                'status' => 'menunggu'
            ],
            [
                'id_user' => '2',
                'jenis' => 'Penggantian',
                'nama_lengkap' => 'Anggie Febriansyah',
                'nomor_kk' => '3525011711086061',
                'nik' => '3525013006770017',
                'alamat' => 'Jatinegara',
                'rt' => '02',
                'rw' => '04',
                'dusun' => 'Jatinegara',
                'tanggal' => date('Y-m-d'),
                'status' => 'menunggu'
            ],
            [
                'id_user' => '2',
                'jenis' => 'Perpanjangan',
                'nama_lengkap' => 'Anggie Febriansyah',
                'nomor_kk' => '3525011711086061',
                'nik' => '3525013006770017',
                'alamat' => 'Jatinegara',
                'rt' => '02',
                'rw' => '04',
                'dusun' => 'Jatinegara',
                'tanggal' => date('Y-m-d'),
                'status' => 'menunggu'
            ],
        ];

        $this->db->table('ktp')->insertBatch($data);
    }
}
