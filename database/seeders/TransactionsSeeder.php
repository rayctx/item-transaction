<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransactionsSeeder extends Seeder
{
    public function run()
    {
        $transactions = array(
            [
                'id' => 1,
                'item_id' => 1,
                'transactions_date' => Carbon::parse('2023-05-01'),
                'amount_sold' => 10
            ],
            [
                'id' => 2,
                'item_id' => 2,
                'transactions_date' => Carbon::parse('2023-05-05'),
                'amount_sold' => 19
            ],
            [
                'id' => 3,
                'item_id' => 1,
                'transactions_date' => Carbon::parse('2023-05-10'),
                'amount_sold' => 15
            ],
            [
                'id' => 4,
                'item_id' => 3,
                'transactions_date' => Carbon::parse('2023-05-11'),
                'amount_sold' => 20
            ],
            [
                'id' => 5,
                'item_id' => 4,
                'transactions_date' => Carbon::parse('2023-05-11'),
                'amount_sold' => 30
            ],
            [
                'id' => 6,
                'item_id' => 5,
                'transactions_date' => Carbon::parse('2023-05-12'),
                'amount_sold' => 25
            ],
            [
                'id' => 7,
                'item_id' => 2,
                'transactions_date' => Carbon::parse('2023-05-12'),
                'amount_sold' => 5
            ]
        );
        DB::table('transactions')->truncate();
        DB::table('transactions')->insert($transactions);
    }
}
