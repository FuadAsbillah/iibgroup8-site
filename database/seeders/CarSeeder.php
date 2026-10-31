<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Seed the cars available for ordering.
     */
    public function run(): void
    {
        $cars = [
            [
                'name' => 'Nissan Skyline GT-R R34',
                'tagline' => 'Godzilla',
                'price' => 185000.00,
            ],
            [
                'name' => 'Toyota Supra MK4',
                'tagline' => '2JZ Legend',
                'price' => 165000.00,
            ],
            [
                'name' => 'Mazda RX-7 FD',
                'tagline' => 'Rotary King',
                'price' => 120000.00,
            ],
            [
                'name' => 'Honda NSX',
                'tagline' => 'Everyday Supercar',
                'price' => 145000.00,
            ],
            [
                'name' => 'Subaru Impreza WRX STI',
                'tagline' => 'Rally Beast',
                'price' => 95000.00,
            ],
            [
                'name' => 'Mitsubishi Lancer Evo IX',
                'tagline' => 'Rally Weapon',
                'price' => 98000.00,
            ],
        ];

        foreach ($cars as $car) {
            Car::query()->firstOrCreate(
                ['name' => $car['name']],
                ['tagline' => $car['tagline'], 'price' => $car['price']],
            );
        }
    }
}
