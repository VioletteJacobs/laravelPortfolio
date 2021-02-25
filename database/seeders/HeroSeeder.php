<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("heroes")->insert(
            [
                "titre" => "Pauline P",
                "h2" => "Web design ux/ui"
            ]
            );
    }
}
