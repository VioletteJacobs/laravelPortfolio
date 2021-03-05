<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("skills")->insert(
            [
                [
                  "language" => "HTML",
                  "val" =>"100%",
                  "valuenow" => "100"  
                ],
                [
                    "language" => "CSS",
                    "val" =>"80%",
                    "valuenow" => "80"  
                  ],
                  [
                    "language" => "Javascript",
                    "val" =>"60%",
                    "valuenow" => "60"  
                  ],
                
            ]
            );
        
    }
}
