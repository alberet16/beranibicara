<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class CreateTypeUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = [
            [
                'keterangan' => 'Masyarakat'
            ],
            [
                'keterangan' => 'Kadis'
            ],
            [
                'keterangan' => 'BPH'
            ],

        ];
        foreach ($type as $key => $value) {
            Type::create($value);
        }
    }
}
