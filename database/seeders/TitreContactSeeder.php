<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("titre_contacts")->insert(
            [
                [
                    "icon" => "bx bx-share-alt",
                    "title" => "Social Profiles"
                ],
                [
                    "icon" => "bx bx-envelope",
                    "title" => "Social Profiles"
                ],
                [
                    "icon" => "bx bx-phone-call",
                    "title" => "Social Profiles"
                ]
            ]
            );
    }
}
