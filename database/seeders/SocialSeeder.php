<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("socials")->insert(
            [
                [
                    "icon" => "icofont-twitter",
                    "class" => "twitter",
                    "href" => "#",
                ],
                [
                    "icon" => "icofont-facebook",
                    "class" => "facebook",
                    "href" => "#",
                ],
                [
                    "icon" => "icofont-instagram",
                    "class" => "instagram",
                    "href" => "#",
                ],
                [
                    "icon" => "icofont-skype",
                    "class" => "skype",
                    "href" => "#",
                ],
                [
                    "icon" => "icofont-linkedin",
                    "class" => "linkedin",
                    "href" => "",
                ],
            ]
            );
    }
}
