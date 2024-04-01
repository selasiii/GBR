<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            ['name' => 'Ashanti Region', 'city' => 'Kumasi', 'city_code' => 'KSI'],
            ['name' => 'Greater Accra', 'city' => 'Accra', 'city_code' => 'ACC'],
            ['name' => 'Central Region', 'city' => 'Cape Coast', 'city_code' => 'CAP'],
            ['name' => 'Eastern Region', 'city' => 'Koforidua', 'city_code' => 'KOF'],
            ['name' => 'Brong Ahafo', 'city' => 'Sunyani', 'city_code' => 'SUN'],
            ['name' => 'Northern Region', 'city' => 'Tamale', 'city_code' => 'TAM'],
            ['name' => 'Upper East Region', 'city' => 'Bolgatanga', 'city_code' => 'BOL'],
            ['name' => 'Upper West Region', 'city' => 'Wa', 'city_code' => 'WA'],
            ['name' => 'Volta Region', 'city' => 'Ho', 'city_code' => 'HO'],
            ['name' => 'Western Region', 'city' => 'Sekondi - Takoradi', 'city_code' => 'SEK'],
            ['name' => 'Savannah Region', 'city' => 'Damongo', 'city_code' => 'DAM'],
            ['name' => 'Bono-East Region', 'city' => 'Techiman', 'city_code' => 'TCH'],
            ['name' => 'Oti Region', 'city' => 'Dambai', 'city_code' => 'DBI'],
            ['name' => 'Ahafo Region', 'city' => 'Goaso', 'city_code' => 'GOA'],
            ['name' => 'Western North', 'city' => 'Sefwi Wiawso', 'city_code' => 'SEF'],
            ['name' => 'North East Region', 'city' => 'Nalerigu', 'city_code' => 'NAL'],
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
