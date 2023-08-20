<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KindsSeeder extends Seeder
{
    public function run()
    {
        $kinds = array(
            [
                'id' => 1,
                'kinds_name' => 'Konsumsi',
                'descriptions' => 'Barang yang dapat dimakan/diminum'
            ],
            [
                'id' => 2,
                'kinds_name' => 'Pembersih',
                'descriptions' => 'Barang yang digunakan untuk membersihkan'
            ]
        );
        DB::table('kinds')->truncate();
        DB::table('kinds')->insert($kinds);
    }
}
