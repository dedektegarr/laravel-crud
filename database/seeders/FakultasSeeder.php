<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert banyak data
        $data_fakultas = [
            [
                "nama_fakultas" => "Teknik"
            ],
            [
                "nama_fakultas" => "FISIP"
            ],
            [
                "nama_fakultas" => "FKIP"
            ],
        ];

        Fakultas::insert($data_fakultas);
    }
}
