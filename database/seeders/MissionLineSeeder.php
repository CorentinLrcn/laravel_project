<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MissionLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MissionLine::Factory(10)->create();
    }
}
