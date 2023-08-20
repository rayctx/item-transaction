<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    public function run()
    {
        $items = array(
            [
                'id' => 1,
                'item_name' => 'Kopi',
                'kinds_id' => 1,
                'stock' => '75',
                'is_deleted' => false
            ],
            [
                'id' => 2,
                'item_name' => 'Teh',
                'kinds_id' => 1,
                'stock' => '76',
                'is_deleted' => false
            ],
            [
                'id' => 3,
                'item_name' => 'Pasta Gigi',
                'kinds_id' => 2,
                'stock' => '80',
                'is_deleted' => false
            ],
            [
                'id' => 4,
                'item_name' => 'Sabun Mandi',
                'kinds_id' => 2,
                'stock' => '70',
                'is_deleted' => false
            ],
            [
                'id' => 5,
                'item_name' => 'Sampo',
                'kinds_id' => 2,
                'stock' => '75',
                'is_deleted' => false
            ]
        );
        DB::table('items')->truncate();
        DB::table('items')->insert($items);
    }
}
