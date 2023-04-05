<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarRental;
class CarRentalSeeder extends Seeder
{
 /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            [
                'Toyata Ist',
                '45',
            ],
            [
                'Nissan Xtrail',
                '55',
            ],
            [
                'Suzuki Grand Vitara',
                '60',
            ],
            [
                'Toyota Rav4',
                '50',
            ],
            [
                'Toyota Alphard',
                '85',
            ],
            [
                'Toyota Prado(2007)',
                '110',
            ],
    
        ];
        for ($i = 1; $i <= count($cars); $i++) {
            CarRental::create([
                'name' => $cars[$i-1][0],
                'price' => $cars[$i-1][1],
                'image' => 'img/cars/car-' . $i . '.png',
            ]);
        }
    }
}
