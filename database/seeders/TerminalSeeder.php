<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Terminal;

class TerminalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $terminals = [
            ['name' => 'Sunyani Station', 'region_id' => 6, 'location' => 'Techiman'],
            ['name' => '37 Station', 'region_id' => 7, 'location' => 'Lapaz'],
            ['name' => 'Kotokuraba Taxi Station', 'region_id' => 8, 'location' => 'Cape Cost'],
            ['name' => 'Transport Yard', 'region_id' => 12, 'location' => 'Bolga'],
            ['name' => 'Kpone Junction', 'region_id' => 7, 'location' => 'Tema'],
            ['name' => 'Tech Junction', 'region_id' => 6, 'location' => 'Kumasi'],
            ['name' => 'Baah Yard', 'region_id' => 7, 'location' => 'Awoshi'],
            ['name' => 'Wa VIP Station', 'region_id' => 13, 'location' => 'Wa'],
            ['name' => 'Asafo Station', 'region_id' => 6, 'location' => 'Kumasi'],
            ['name' => 'Dawhenya Trotro Station', 'region_id' => 7, 'location' => 'Tema'],
            ['name' => 'O. A. Bus Terminal', 'region_id' => 7, 'location' => 'Kwame Nkrumah Circle'],
            ['name' => 'Metro Mass Transit', 'region_id' => 11, 'location' => 'Tamale'],
            ['name' => 'Aflao Station', 'region_id' => 7, 'location' => 'Accra'],
            ['name' => 'O. A. Bus Terminal', 'region_id' => 17, 'location' => 'Techiman'],
            ['name' => 'Abetifi Station', 'region_id' => 9, 'location' => 'Mpraeso'],
        ];

        foreach ($terminals as $terminal) {
            Terminal::create($terminal);
        }
    }
}
