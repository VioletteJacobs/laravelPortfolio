<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            NavbarSeeder::class,
            HeroSeeder::class,
            TitreSeeder::class,

            AboutInfoSeeder::class,
            AboutP2Seeder::class,
            SkillSeeder::class,

            ResumeTitreSeeder::class,
            SumarySeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,

            ServiceSeeder::class,

            PortfolioSeeder::class,

            TitreContactSeeder::class,
            SocialSeeder::class,
            MailSeeder::class,
            PhoneSeeder::class,

            FooterSeeder::class
        ]);
    }
}
