<?php

use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
           'meno' => "Kristian",
           'priezvisko' => "Ronald",
           'klub' => "OSK Lieskova",
           'cislo'=>7,
        ]);
    }
}
