<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routes = [
            ['name' => 'Kumasi to Accra', 'price' => 30.00, 'start_terminal_id' => 12, 'end_terminal_id' => 19],
            ['name' => 'Tamale to Bolga', 'price' => 20.50, 'start_terminal_id' => 18, 'end_terminal_id' => 10],
            ['name' => 'Cape Coast to Accra', 'price' => 15.75, 'start_terminal_id' => 9, 'end_terminal_id' => 19],
            ['name' => 'Koforidua to Techiman', 'price' => 25.00, 'start_terminal_id' => 8, 'end_terminal_id' => 20],
            ['name' => 'Wa to Ho', 'price' => 35.25, 'start_terminal_id' => 14, 'end_terminal_id' => 21],
            ['name' => 'Sekondi - Takoradi to Tema', 'price' => 40.00, 'start_terminal_id' => 15, 'end_terminal_id' => 16],
            ['name' => 'Sunyani to Tamale', 'price' => 28.50, 'start_terminal_id' => 7, 'end_terminal_id' => 18],
            ['name' => 'Kumasi to Wa', 'price' => 45.00, 'start_terminal_id' => 12, 'end_terminal_id' => 14],
            ['name' => 'Accra to Bolga', 'price' => 50.75, 'start_terminal_id' => 19, 'end_terminal_id' => 10],
            ['name' => 'Tema to Kumasi', 'price' => 35.50, 'start_terminal_id' => 16, 'end_terminal_id' => 12],
            ['name' => 'Bolgatanga to Tamale', 'price' => 18.25, 'start_terminal_id' => 10, 'end_terminal_id' => 18],
            ['name' => 'Ho to Cape Coast', 'price' => 27.00, 'start_terminal_id' => 21, 'end_terminal_id' => 9],
            ['name' => 'Kumasi to Techiman', 'price' => 22.75, 'start_terminal_id' => 12, 'end_terminal_id' => 20],
            ['name' => 'Accra to Sunyani', 'price' => 32.50, 'start_terminal_id' => 19, 'end_terminal_id' => 7],
            ['name' => 'Tamale to Wa', 'price' => 20.00, 'start_terminal_id' => 18, 'end_terminal_id' => 14],
            ['name' => 'Koforidua to Tema', 'price' => 15.25, 'start_terminal_id' => 8, 'end_terminal_id' => 16],
            ['name' => 'Sunyani to Bolga', 'price' => 35.75, 'start_terminal_id' => 7, 'end_terminal_id' => 10],
            ['name' => 'Wa to Cape Coast', 'price' => 42.50, 'start_terminal_id' => 14, 'end_terminal_id' => 9],
            ['name' => 'Kumasi to Ho', 'price' => 38.25, 'start_terminal_id' => 12, 'end_terminal_id' => 21],
            ['name' => 'Accra to Techiman', 'price' => 47.00, 'start_terminal_id' => 19, 'end_terminal_id' => 20],
            ['name' => 'Bolga to Kumasi', 'price' => 25.50, 'start_terminal_id' => 10, 'end_terminal_id' => 12],
            ['name' => 'Tema to Wa', 'price' => 55.25, 'start_terminal_id' => 16, 'end_terminal_id' => 14],
            ['name' => 'Tamale to Cape Coast', 'price' => 30.00, 'start_terminal_id' => 18, 'end_terminal_id' => 9],
            ['name' => 'Koforidua to Sunyani', 'price' => 40.75, 'start_terminal_id' => 8, 'end_terminal_id' => 7],
        ];
        
        foreach ($routes as $route) {
            Route::create($route);
        }
    }
}
