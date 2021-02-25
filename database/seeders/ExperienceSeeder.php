<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("experiences")->insert(
            [
                [
                    "title" => "Senior Graphic",
                    "years" => "2015-2018",
                    "name" => "Experion NY",
                    "task1" => "lead design",
                    "task2" => "Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.",
                    "task3" => "Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design",
                    "task4" => "Oversee the efficient use of production project budgets ranging from $2,000 - $25,000",
                ],
                [
                    "title" => "Senior Graphic",
                    "years" => "2015-2018",
                    "name" => "Experion NY",
                    "task1" => "lead design",
                    "task2" => "Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.",
                    "task3" => "Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design",
                    "task4" => "Oversee the efficient use of production project budgets ranging from $2,000 - $25,000",
                ]

            ]
            );
    }
}
