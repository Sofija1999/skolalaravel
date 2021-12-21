<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ucenik;

class UcenikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ucenik::factory()->count(25)->create();
    }
}
