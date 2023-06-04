<?php

namespace Database\Seeders;

use App\Models\StatusPengaduan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class status_pengaduan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status_pengaduan = [
            [
                'status_pengaduan' => 'Menunggu',
                'kode_status' => 1
            ],
            [
                'status_pengaduan' => 'Diproses',
                'kode_status' => 2
            ],
            [
                'status_pengaduan' => 'Selesai',
                'kode_status' => 3
            ],
            [
                'status_pengaduan' => 'Ditolak',
                'kode_status' => 4
            ],
            [
                'status_pengaduan' => 'Dibatalkan',
                'kode_status' => 5
            ],
        ];
        foreach ($status_pengaduan as $key => $value) {
            StatusPengaduan::create($value);
        }
    }
}
