<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("colors")->insert([
            [
                "nom" => "pêche",
                "rgba" => "d11644"
            ],
            [
                "nom" => "olive",
                "rgba" => "878f84"
            ],
            [
                "nom" => "aubergine",
                "rgba" => "584053"
            ],
            [
                "nom" => "bordeaux",
                "rgba" => "a77376"
            ],

        ]);
    }
}
