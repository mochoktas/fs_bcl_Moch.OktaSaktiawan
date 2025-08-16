<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArmadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('armada')->insert([
            'nomor_armada' => '1',
            'ketersediaan' => 'tersedia',
            'kapasitas_muatan' => '50',
            'id_jenis_kendaraan' => '1'
        ]);

        DB::table('armada')->insert([
            'nomor_armada' => '2',
            'ketersediaan' => 'tersedia',
            'kapasitas_muatan' => '50',
            'id_jenis_kendaraan' => '1'
        ]);
    }
}
