<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SkolaSeeder;
use Database\Seeders\ProfesorSeeder;
use Database\Seeders\UcenikSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $skolaSeeder = new SkolaSeeder();
        $profesorSeeder = new ProfesorSeeder();
        $ucenikSeeder = new UcenikSeeder();

        $skolaSeeder->run();
        $profesorSeeder->run();
        $ucenikSeeder->run();
    }
}
