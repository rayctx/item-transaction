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
            ],
            [
                'id' => 6,
                'item_name' => 'Telur',
                'kinds_id' => 1,
                'stock' => '100',
                'is_deleted' => false
            ],
            [
                'id' => 7,
                'item_name' => 'Minyak',
                'kinds_id' => 1,
                'stock' => '76',
                'is_deleted' => false
            ],
            [
                'id' => 8,
                'item_name' => 'Beras',
                'kinds_id' => 1,
                'stock' => '80',
                'is_deleted' => false
            ],
            [
                'id' => 9,
                'item_name' => 'Mi Instan',
                'kinds_id' => 1,
                'stock' => '22',
                'is_deleted' => false
            ],
            [
                'id' => 10,
                'item_name' => 'Sikat Gigi',
                'kinds_id' => 2,
                'stock' => '33',
                'is_deleted' => false
            ],
            [
                'id' => 11,
                'item_name' => 'Sabun Cuci',
                'kinds_id' => 2,
                'stock' => '75',
                'is_deleted' => false
            ],
            [
                'id' => 12,
                'item_name' => 'Sabun Wajah',
                'kinds_id' => 2,
                'stock' => '76',
                'is_deleted' => false
            ],
            [
                'id' => 13,
                'item_name' => 'Tisu Wajah',
                'kinds_id' => 2,
                'stock' => '130',
                'is_deleted' => false
            ],
            [
                'id' => 14,
                'item_name' => 'Sagu',
                'kinds_id' => 1,
                'stock' => '70',
                'is_deleted' => false
            ],
            [
                'id' => 15,
                'item_name' => 'Tisu Basah',
                'kinds_id' => 2,
                'stock' => '75',
                'is_deleted' => false
            ],
            [
                'id' => 16,
                'item_name' => 'Nugget',
                'kinds_id' => 1,
                'stock' => '75',
                'is_deleted' => false
            ],
            [
                'id' => 17,
                'item_name' => 'Susu',
                'kinds_id' => 1,
                'stock' => '98',
                'is_deleted' => false
            ],
            [
                'id' => 18,
                'item_name' => 'Tepung',
                'kinds_id' => 1,
                'stock' => '80',
                'is_deleted' => false
            ],
            [
                'id' => 19,
                'item_name' => 'Cabai Bubuk',
                'kinds_id' => 1,
                'stock' => '70',
                'is_deleted' => false
            ],
            [
                'id' => 20,
                'item_name' => 'Madu',
                'kinds_id' => 1,
                'stock' => '75',
                'is_deleted' => false
            ]
        );
        DB::table('items')->truncate();
        DB::table('items')->insert($items);
    }
}
