<?php

namespace Database\Seeders;

use App\Models\CarReservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=1; $i < 20; $i++) {
            $user =CarReservation::create([
                'car_id' => 1,
                'user_id' => 1,
                'code' => bin2hex(random_bytes(20)),
                'start_date' => $faker->dateTime(),
                'end_date' => $faker->dateTimeBetween('now', '+30 days'),
                'total_price' =>5000,
                'status'=>$faker->randomElement(['waiting','confirmed','rejected'])
            ]);
        }
    }
}
