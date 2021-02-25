<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("education")->insert(
            [
                [
                    "title" => "Master Of Art",
                    "years" => "2015-2016",
                    "school" => "Institute of Technology BXL",
                    "p" => " ehrf her f erfg earoygergfyger aeryug ayeg r  aerufyg aerguf  aeryfg earuyfg uerygf ea rfuyger aerufyg ery uygerf erfu erf uygerfygerfeg qgerf", 
                ],
                [
                    "title" => "Master Of Art",
                    "years" => "2015-2016",
                    "school" => "Institute of Technology BXL",
                    "p" => " ehrf her f erfg earoygergfyger aeryug ayeg r  aerufyg aerguf  aeryfg earuyfg uerygf ea rfuyger aerufyg ery uygerf erfu erf uygerfygerfeg qgerf", 
                ],
            ]
            );
    }
}
