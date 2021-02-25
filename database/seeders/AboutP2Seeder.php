<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutP2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("about_p2_s")->insert(
            [
                [
                    "icon" => "icofont-simple-smile",
                    "color" => " #20b38e;",
                    "span" => "65",
                    "strong" => "Happy Clients",
                    "p" => "consequuntur voluptas nostrum aliquid ipsam architecto ut."
                ],
                [
                    "icon" => "icofont-simple-smile",
                    "color" => " #20b38e;",
                    "span" => "65",
                    "strong" => "Happy Clients",
                    "p" => "consequuntur voluptas nostrum aliquid ipsam architecto ut."
                ],
                [
                    "icon" => "icofont-simple-smile",
                    "color" => " #20b38e;",
                    "span" => "65",
                    "strong" => "Happy Clients",
                    "p" => "consequuntur voluptas nostrum aliquid ipsam architecto ut."
                ],
                [
                    "icon" => "icofont-simple-smile",
                    "color" => " #20b38e;",
                    "span" => "65",
                    "strong" => "Happy Clients",
                    "p" => "consequuntur voluptas nostrum aliquid ipsam architecto ut."
                ],
            ]
            );
    }
}
