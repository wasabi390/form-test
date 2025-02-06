<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            "商品のお届けについて",
            "商品の交換について",
            "商品トラブル",
            "ショップへのお問い合わせ",
            "その他"
        ];
        DB::table('detail')->insert($contents);
    }
}
