<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("portfolios")->insert(
            [
                [
                    "filter" => "filter-app",
                    "img" => "assets/img/portfolio/portfolio-2.jpg",
                    "title" => "App 1",
                    "p" => "App",
                    "href1" => "assets/img/portfolio/portfolio-9.jpg",
                    "href2" => "portfolio-details.html",

                ],
                [
                    "filter" => "filter-app",
                    "img" => "assets/img/portfolio/portfolio-1.jpg",
                    "title" => "App 1",
                    "p" => "App",
                    "href1" => "assets/img/portfolio/portfolio-1.jpg",
                    "href2" => "portfolio-details.html",

                ],
                [
                    "filter" => "filter-web",
                    "img" => "assets/img/portfolio/portfolio-6.jpg",
                    "title" => "App 1",
                    "p" => "App",
                    "href1" => "assets/img/portfolio/portfolio-1.jpg",
                    "href2" => "portfolio-details.html",

                ],
                [
                    "filter" => "filter-card",
                    "img" => "assets/img/portfolio/portfolio-7.jpg",
                    "title" => "App 1",
                    "p" => "App",
                    "href1" => "assets/img/portfolio/portfolio-1.jpg",
                    "href2" => "portfolio-details.html",

                ],
                [
                    "filter" => "filter-app",
                    "img" => "assets/img/portfolio/portfolio-8.jpg",
                    "title" => "App 1",
                    "p" => "App",
                    "href1" => "assets/img/portfolio/portfolio-1.jpg",
                    "href2" => "portfolio-details.html",

                ],
                [
                    "filter" => "filter-card",
                    "img" => "assets/img/portfolio/portfolio-9.jpg",
                    "title" => "App 1",
                    "p" => "App",
                    "href1" => "assets/img/portfolio/portfolio-1.jpg",
                    "href2" => "portfolio-details.html",

                ],
                [
                    "filter" => "filter-web",
                    "img" => "assets/img/portfolio/portfolio-4.jpg",
                    "title" => "App 1",
                    "p" => "App",
                    "href1" => "assets/img/portfolio/portfolio-1.jpg",
                    "href2" => "portfolio-details.html",

                ],
                [
                    "filter" => "filter-app",
                    "img" => "assets/img/portfolio/portfolio-3.jpg",
                    "title" => "App 1",
                    "p" => "App",
                    "href1" => "assets/img/portfolio/portfolio-1.jpg",
                    "href2" => "portfolio-details.html",

                ],
                [
                    "filter" => "filter-web",
                    "img" => "assets/img/portfolio/portfolio-2.jpg",
                    "title" => "App 1",
                    "p" => "App",
                    "href1" => "assets/img/portfolio/portfolio-.jpg",
                    "href2" => "portfolio-details.html",

                ],
            ]
            );
    }
}
