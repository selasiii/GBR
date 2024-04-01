<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(TerminalSeeder::class);
        $this->call(RouteSeeder::class);
        \App\Models\User::factory(5)->create();
        \App\Models\Bus::factory(28)->create();
        \App\Models\Driver::factory(17)->create();
        \App\Models\Conductor::factory(38)->create();
        \App\Models\Trip::factory(31)->create();

    }
}
