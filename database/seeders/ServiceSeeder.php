<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert(
            [
                [
                    "icon" => "bx bxl-dribbble",
                    "titre" => "Design",
                    "p" => "zf ehf  erhf  earhf  earh erh earh ear er h e rlh aerj fhler ",
                ],
                [
                    "icon" => "bx bxl-dribbble",
                    "titre" => "Design",
                    "p" => "zf ehf  erhf  earhf  earh erh earh ear er h e rlh aerj fhler ",
                ],
                [
                    "icon" => "bx bxl-dribbble",
                    "titre" => "Design",
                    "p" => "zf ehf  erhf  earhf  earh erh earh ear er h e rlh aerj fhler ",
                ],
                [
                    "icon" => "bx bxl-dribbble",
                    "titre" => "Design",
                    "p" => "zf ehf  erhf  earhf  earh erh earh ear er h e rlh aerj fhler ",
                ],
            ]
            );
    }
}
