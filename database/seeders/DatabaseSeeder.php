<?php

namespace Database\Seeders;

use App\Models\Organisation;
use App\Models\Mission;
use App\Models\MissionLine;
use App\Models\Contribution;
use App\Models\Transaction;
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
        // \App\Models\User::factory(10)->create();
        // $this->call(OrganisationSeeder::class);
        // $this->call(MissionSeeder::class);
        // $this->call(MissionLineSeeder::class);
        // $this->call(ContributionSeeder::class);
        $Organisation = Organisation::factory()
            ->has(
                Mission::factory()
                    ->count(5)
                    ->has(
                        MissionLine::factory()
                            ->count(3),
                        'lines'
                    )
                    ->has(
                        Transaction::factory()
                            ->count(2),
                            'source'
                    ),
                'missions'
            )
            ->has(
                Contribution::factory()
                    ->count(2)
                    ->has(
                        Transaction::factory()
                            ->count(2),
                            'source'
                    ),
                'contributions'
            )
            ->create();
    }
}
