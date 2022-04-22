<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PindahSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_user' => '2',
                'nik' => '3525013006770017',
                'nama_lengkap' => 'Anggie Febriansyah',
                'no_kk' => '3525011711086063',
                'nama_kepkel' => 'Anggie',
                'alamat_sekarang' => 'Jatinegara',
                'alamat_tujuan' => 'Purwokerto Utara',
                'jumlah_keluarga' => '3',
                'tanggal' => date('Y-m-d'),
                'status' => 'menunggu',
            ],
            [
                'id_user' => '2',
                'nik' => '3525013006770017',
                'nama_lengkap' => 'Anggie Febriansyah',
                'no_kk' => '3525011711086063',
                'nama_kepkel' => 'Anggie',
                'alamat_sekarang' => 'Purwokerto Utara',
                'alamat_tujuan' => 'Baturraden',
                'jumlah_keluarga' => '3',
                'tanggal' => date('Y-m-d'),
                'status' => 'menunggu',
            ],
            [
                'id_user' => '3',
                'nik' => '3525011711086063',
                'nama_lengkap' => 'Farhan Ramdhani Ashari',
                'no_kk' => '3525011711086063',
                'nama_kepkel' => 'Farhan',
                'alamat_sekarang' => 'Bantarkawung',
                'alamat_tujuan' => 'Purwokerto Barat',
                'jumlah_keluarga' => '2',
                'tanggal' => date('Y-m-d'),
                'status' => 'menunggu',
            ],
            [
                'id_user' => '3',
                'nik' => '3525011711086063',
                'nama_lengkap' => 'Farhan Ramdhani Ashari',
                'no_kk' => '3525011711086063',
                'nama_kepkel' => 'Farhan',
                'alamat_sekarang' => 'Purwokerto Barat',
                'alamat_tujuan' => 'Sumpiuh',
                'jumlah_keluarga' => '2',
                'tanggal' => date('Y-m-d'),
                'status' => 'menunggu',
            ],
        ];

        $this->db->table('pindah')->insertBatch($data);
    }
}
