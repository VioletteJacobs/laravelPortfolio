<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("navbars")->insert(
            [
                [
                    "li" => "home",
                    "href" => "/home"
                ],
                [
                    "li" => "about",
                    "href" => "#about"
                ],
                [
                    "li" => "section2",
                    "href" => "#section2"
                ],
                [
                    "li" => "section3",
                    "href" => "#section3"
                ],
                [
                    "li" => "Backoffice",
                    "href" => "/backoffice"
                ],
            ]
                );
    }
}
