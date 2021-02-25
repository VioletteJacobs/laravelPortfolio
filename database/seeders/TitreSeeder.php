<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')-> insert(
            [
                [
                    "titre" => "About",
                    "span" => "About",
                    "p" => " kjgfhze hzegf qzergf gzerufkgy qyguzerf qzrgf  qeryfg zergyf zyeYFG "
                ],
                [
                    "titre" => "Section2",
                    "span" => "Section2",
                    "p" => " kjgfhze hzegf qzergf gzerufkgy qyguzerf qzrgf  qeryfg zergyf zyeYFG "
                ],
                [
                    "titre" => "Section3",
                    "span" => "Section3",
                    "p" => " kjgfhze hzegf qzergf gzerufkgy qyguzerf qzrgf  qeryfg zergyf zyeYFG "
                ],
                [
                    "titre" => "Section4",
                    "span" => "Section4",
                    "p" => " kjgfhze hzegf qzergf gzerufkgy qyguzerf qzrgf  qeryfg zergyf zyeYFG "
                ],
                [
                    "titre" => "Section5",
                    "span" => "Section5",
                    "p" => " kjgfhze hzegf qzergf gzerufkgy qyguzerf qzrgf  qeryfg zergyf zyeYFG "
                ],
            ]
            );
    }
}
