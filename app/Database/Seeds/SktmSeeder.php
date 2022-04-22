<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SktmSeeder extends Seeder
{
    public function run()
    {
        $tgl_lahir = '1999-12-8';
        $data = [
            [
                'id_user' => '3',
                'nama_lengkap' => 'Farhan Ramdhani Ashari',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => date('Y-m-d', strtotime($tgl_lahir)),
                'tempat_lahir' => 'Purwokerto',
                'warga_negara' => 'Indonesia',
                'agama' => 'Islam',
                'nik_nokk' => '3525011711086063',
                'pekerjaan' => 'Mahasiswa',
                'alamat' => 'Bantarkawung',
                'keperluan' => 'Beasiswa',
                'tanggal' => date('Y-m-d'),
                'status' => 'menunggu',
            ],
            [
                'id_user' => '3',
                'nama_lengkap' => 'Farhan Ramdhani Ashari',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => date('Y-m-d', strtotime($tgl_lahir)),
                'tempat_lahir' => 'Purwokerto',
                'warga_negara' => 'Indonesia',
                'agama' => 'Islam',
                'nik_nokk' => '3525011711086063',
                'pekerjaan' => 'Mahasiswa',
                'alamat' => 'Bantarkawung',
                'keperluan' => 'Beasiswa S2',
                'tanggal' => date('Y-m-d'),
                'status' => 'menunggu',
            ],
            [
                'id_user' => '3',
                'nama_lengkap' => 'Farhan Ramdhani Ashari',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => date('Y-m-d', strtotime($tgl_lahir)),
                'tempat_lahir' => 'Purwokerto',
                'warga_negara' => 'Indonesia',
                'agama' => 'Islam',
                'nik_nokk' => '3525011711086063',
                'pekerjaan' => 'Mahasiswa',
                'alamat' => 'Bantarkawung',
                'keperluan' => 'Bantuan SPP',
                'tanggal' => date('Y-m-d'),
                'status' => 'menunggu',
            ],
        ];

        $this->db->table('sktm')->insertBatch($data);
    }
}
