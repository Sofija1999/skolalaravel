<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skola;

class SkolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skola::factory()->count(15)->create();
    }
}
