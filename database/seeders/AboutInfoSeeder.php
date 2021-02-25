<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("about_infos")->insert(
        [
            [
                "icon" => "icofont-rounded-right",
                "titre" => "Name:",
                "info" => "Pauline p",

            ],
            [
                "icon" => "icofont-rounded-right",
                "titre" => "Name:",
                "info" => "Pauline p",

            ],
            [
                "icon" => "icofont-rounded-right",
                "titre" => "Name:",
                "info" => "Pauline p",

            ],
            [
                "icon" => "icofont-rounded-right",
                "titre" => "Name:",
                "info" => "Pauline p",

            ],
            [
                "icon" => "icofont-rounded-right",
                "titre" => "Name:",
                "info" => "Pauline p",

            ],
            [
                "icon" => "icofont-rounded-right",
                "titre" => "Name:",
                "info" => "Pauline p",

            ],
            [
                "icon" => "icofont-rounded-right",
                "titre" => "Name:",
                "info" => "Pauline p",

            ],
            [
                "icon" => "icofont-rounded-right",
                "titre" => "Name:",
                "info" => "Pauline p",

            ],
            [
                "icon" => "icofont-rounded-right",
                "titre" => "Name:",
                "info" => "Pauline p",

            ],
        ]
        );
    }
}
