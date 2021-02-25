<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SumarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("sumaries")->insert(
            [
               "name" => "Pauline",
               "p" => "Web design UI zeihgf lzuhefah zlefhzhf lzhgflh   zegf zhefg",
               "adresse" => "100 bxl",
               "phone" => "0450/544,554",
               "mail" => "pauline.gmail.com"
            ]
            );
    }
}
