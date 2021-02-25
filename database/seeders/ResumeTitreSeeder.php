<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeTitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("resume_titres")->insert(
          [
              [
                "titre" => "Sumary"  
              ],
              [
                "titre" => "Studies"  
              ],
              [
                "titre" => "Experiences"  
              ],
              
              
          ]
            );  
    }
}
